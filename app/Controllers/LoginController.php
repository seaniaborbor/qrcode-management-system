<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\BidModel; // Import the BidModel
use App\Models\JobModel; // Import the JobModel


class LoginController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    // load the home page
    public function index()
    {
        $data = [];
        $db = new LoginModel();
        
         $data = [];
        
        

        $rules = [
            'email' => [
               'rules' => 'required|valid_email',
               'label' => 'Email field or input ',
               'errors' => [
                'required' => 'Email required, please fill out',
                'valid_email'=> 'Your email is invalid'
               ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'label' => 'Password Input',
                'errors' => [
                    'required' => 'Password fied cant be blank',
                    'min_length' => 'Password too short' 
                ]
                ]
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                
                // get the user data from the database
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $user = $db->where('email', $email)->first(); // Retrieve the first matching user
            
                // check if the user exists
                if (!$user) {
                    // If no user exists, redirect to 'auth' page with error message
                    return redirect()->to('login')->with('error', "Wrong Email or Password");
                }
                
                // Validate that $password contains the actual password input from the user
                if (empty($password)) {
                    // If password is empty, redirect to 'auth' page with error message
                    return redirect()->to('login')->with('error', "Password is empty");
                }
                
                if (password_verify($password, $user['passwd'])) {
                    // Password matches, redirect to 'dashboard' with success message
                    session()->set('isLoggedIn',"yes");
                    session()->set('loginEmail', $email);
                    session()->set('accountType', $user['accountType']);
                    return redirect()->to('dashboard')->with('success', "Welcome to the dashboard");
                } else {
                    // Password does not match, redirect to 'auth' page with error message
                    return redirect()->to('login')->with('error', "Wrong Email or Password");
                }
                
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('login', $data);
    }


// this allows user and admin to view his or her profile
public function profile()
{
    $db = new LoginModel();

    $data = [];
    $email = session()->get('loginEmail');
    $data['title'] = "profile";

    $data['user'] = $db->where('email', $email)->first(); // Retrieve the first matching user
    $data['users'] = $db->findAll();

    return view('dashboard/profile', $data);

}



// this allows user create his or her account 
public function create_user()
{
    $db = new LoginModel();

    $data = [];
    $email = session()->get('loginEmail');
    $data['title'] = "profile";

    $data['user'] = $db->where('email', $email)->first(); // Retrieve the first matching user
    $data['users'] = $db->findAll();

    $rules = [
        'accEmail' => "required|valid_email|is_unique[users.email]",
        'accType' => "required",
        "accPassword" => 'required|min_length[5]'
    ];

    if($this->request->getMethod() == 'post'){
        if($this->validate($rules)){
            $accData = [
                "email" => $this->request->getPost('accEmail'),
                "accountType" => $this->request->getPost('accType'),
                "passwd" => password_hash($this->request->getPost('accPassword'), PASSWORD_DEFAULT),
            ];

            $db->insert($accData);
            return redirect()->to('dashboard/profile')->with('success', "Account created Successfully");
        }else{
            $data['validation'] = $this->validator;
        }
    }

    return view('dashboard/profile', $data);

}


// update password 
public function update_password(){
    $db = new LoginModel();

    $data = [];
    $email = session()->get('loginEmail');
    $data['title'] = "profile";
    $userData = $db->where('email', $email)->first(); // Retrieve the first matching user
    $data['user'] = $userData;
    $data['users'] = $db->findAll();

    if($this->request->getMethod() == 'post')
    {
        $rules = [
            'passwd' => [
                'rules' => 'required|min_length[5]',
                'label' => 'Account Password ',
                'errors' => [
                    'required' => 'Password fied cant be blank',
                    'min_length' => 'Password too short' 
                ]
                ], 
            'nPassword' => [
                    'rules' => 'required|min_length[5]',
                    'label' => 'New  Password Field',
                    'errors' => [
                        'required' => 'Password fied cant be blank',
                        'min_length' => 'Password too short' 
                    ]
                ]
        ];

        
        if($this->validate($rules)){

            if(password_verify($this->request->getPost('passwd'), $userData['passwd'])){
                $updateData = [
                    'passwd' => password_hash($this->request->getPost('nPassword'), PASSWORD_DEFAULT),
                ];

                $db->where('id', $userData['id'])->set($updateData)->update();
                return redirect()->to('dashboard/profile')->with('success', "Profile Updated Successfully");

            }else{
                return redirect()->to('dashboard/profile')->with('error', "Enter the correct Old Password and try again");
                exit();
            }
            
        }else{
            $data['validation'] = $this->validator;
        }

    }

    return view('dashboard/profile', $data);
}





public function delete_user($id)
{
    $db = new LoginModel();
      $userdata = $db->find($id);
      $data['title'] = "Delete";
      

      if($userdata){
          $db->delete($id);
          return redirect()->to('dashboard')->with("success", "You deleted a user account from the database ");
      }else{
          return redirect()->back()->with("failed", "The user doesn't exist, you're trying to deleate");
      }
}


    public function logout(){
        // destroy all session here 
        if(session()->has('isLoggedIn')){
            session()->destroy();
            return redirect()->to('login')->withInput('error', 'You are logged out');
        }else{
            return redirect()->to('login')->withInput('error', 'You were not logged in');
        }
    }
}
