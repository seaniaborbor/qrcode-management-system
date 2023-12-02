<?php

namespace App\Controllers;
use App\Codeigniter\Controller; 

use App\Models\IdCardModel; // Import the qrcode 
use App\Models\InstitutionModel; // Import the Modal that controlls 


class InstitutionController extends BaseController
{
    public function __construct()
    {
        helper("form");
    }
   
// ========   add institution ================
    public function add_institution()
    {
        $data = [];
        // load all institution data 
        $institution_db = new InstitutionModel();
        $data['institution_data'] = $institution_db->findAll();
        // load all id_card qrcodes data 
        $idcard_qr_code_db = new IdCardModel();
        $data['idcard_qr_code'] = $idcard_qr_code_db->select_id_card_label_by_group();


        // if the form is submitted 
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'institutionName' => 'required',
                'phone' => 'required|max_length[15]',
                'email' => 'required|max_length[50]',
                'address' => 'required|max_length[50]',
                'logo_path' => 'uploaded[logo_path]|max_size[logo_path,5048]|ext_in[logo_path,png,jpg,jpeg]',
                'about' => 'required',
            ];
    
            if ($this->validate($rules)) {
                
                $logoNewName = "";

                $logo = $this->request->getFile('logo_path');
                if ($logo->isValid() && !$logo->hasMoved()) {
                    $logoNewName = $logo->getRandomName();
                    $logo->move('uploads/', $logoNewName);
                }

                $institutionData = [
                    'institutionName' => $this->request->getPost('institutionName'),
                    'phone' => $this->request->getPost('phone'),
                    'email' => $this->request->getPost('email'),
                    'address' => $this->request->getPost('address'),
                    'about' => $this->request->getPost('about'),
                    'logo_path' => $logoNewName,
                    'createdBy' => session()->get('loginEmail'),
                ];

                $institution_db->saveInstitution($institutionData);

                return redirect()->to(base_url('dashboard'))->with('success', 'An institution profile is created successfully');


            } else {

                //Correct the variable name to 'validation'
               $data['validation'] = $this->validator;
            }
        }
    
        return view('dashboard/index', $data);
    }
    

    //============ view or edit institution profile ===========

    public function edit_institution_profile($id)
    {
        $institution_db = new InstitutionModel();
        $data = [];
        $record  = $institution_db->where('id', $id)->first();
        $data['institution_data'] = $record;

        $data['title'] = 'institution edit';
            
        if(empty($record)){
                return redirect()->back()->with('error', 'Institution is not available ');
                exit();
        }

        if($record['createdBy'] != session()->get('loginEmail')){
            return redirect()->back()->with('error', 'You are only allowed to edited institution you added ');
            exit();
        }

        

        $updateLogo = false; // when the user wants to update the institution logo, this will change
        
    
         // if the form is submitted 
         if ($this->request->getMethod() == 'post') {

            
           

            $rules = [
                'institutionName' => 'required',
                'phone' => 'required|max_length[15]',
                'email' => 'required|max_length[50]',
                'address' => 'required|max_length[50]',
                'about' => 'required',
            ];

            // if the user submits new logo or stamps; validate 
            if($this->request->getFile('logo_path') && $this->request->getFile('logo_path')->isValid()){
                $updateLogo = true; // change the value of updatelogo to true which will be used later
                $rules['logo_path'] = 'uploaded[logo_path]|max_size[logo_path,5048]|ext_in[logo_path,png,jpg,jpeg]';


            }
            // now validate the the user submitted 
            if ($this->validate($rules)) {
                $logoNewName = "";
                $institutionData = [];
                
                if($updateLogo){
                    
                    $logo = $this->request->getFile('logo_path');

                        if ($logo->isValid() && !$logo->hasMoved()) {
                        $logoNewName = $logo->getRandomName();
                        $logo->move('uploads/', $logoNewName);
                     }
                     $institutionData['logo_path'] = $logoNewName;
                }

                $institutionData['institutionName'] = $this->request->getPost('institutionName');
                $institutionData['phone'] = $this->request->getPost('phone');
                $institutionData['email'] = $this->request->getPost('email');
                $institutionData['address'] = $this->request->getPost('address');
                $institutionData['about'] = $this->request->getPost('about');
                $institutionData['createdBy'] = session()->get('loginEmail');
            

                $institution_db->update($id,$institutionData);

                return redirect()->to(base_url('dashboard'))->with('success', 'An institution profile is Updated successfully');


            } else {

                //Correct the variable name to 'validation'
               $data['validation'] = $this->validator;
            }
        }
    
        return view('dashboard/view_institution_profile', $data);
    }

    
    
   
}
