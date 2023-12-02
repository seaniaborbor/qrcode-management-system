<?php

namespace App\Controllers;

use App\Models\IdCardModel; // Import the qrcode 
use App\Models\InstitutionModel; // Import the Institution Model
use App\Models\ReportCardModel; // Import the Modal that controlls 
use App\Models\LoginModel;


use App\Codeigniter\Controller; 

class QrcodeController extends BaseController
{
    public function __construct()
    {
        helper("form");
        helper("text");
    }
   
// this controller create and save qrcodes in db and return to dashboard
    public function index()
    {
        $data = [];
        $data['title'] = 'create qrcode';

         // load all institution data 
         $institution_db = new InstitutionModel();
         $data['institution_data'] = $institution_db->findAll();

         // load all id_card qrcodes data 
         $idcard_qr_code_db = new IdCardModel();
         $data['idcard_qr_code'] = $idcard_qr_code_db->select_id_card_label_by_group();

        // load all report_card qrcodes data 
        $reportcard_qr_code_db = new ReportCardModel();
        $data['reportcard_qr_code_db'] = $reportcard_qr_code_db->select_report_card_label_by_group();

        
    
        // if the form is submitted 
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'label' => 'required',
                'type' => 'required',
                'institutionId' => 'required',
                'quantity' => 'required',
            ];
    
            if ($this->validate($rules)) {

                //get the veriables from the forms 
                
                $qrcodeData['label'] = $this->request->getPost('label');
                $qrcodeData['institutionId'] = $this->request->getPost('institutionId');
                $qrcodeData['createdBy'] = session()->get('loginEmail');

                // create unique group identification
                $qrcodeData['groupId'] = random_string('alnum',5);


                // decide which type of qrcode is this?
                $type  = $this->request->getPost('type');
                $total  = $this->request->getPost('quantity');
                $counter = 0; // this will keep count of the total data inserted
                $error  = 0; // this will keep erro count occured
                $msg = "";

                
                if($type == 'id_card')
                {
                    // if the type of qr code is id_card
                   
                    for($i = 1; $i <= $total; $i++){
                        $qrcodeData['unqId'] = random_string('alnum',5);
                        if($idcard_qr_code_db->savaData($qrcodeData)){
                            $counter++;
                        }else{
                            $error++;
                        };

                    }

                    $msg = $counter." total of ID Cards QR Codes created successfully <br> ".$error." errors occured";

                }elseif($type == 'report_card'){
                    // if the type of qr code is report card
                    for($i = 1; $i <= $total; $i++){
                        $qrcodeData['unqId'] = random_string('alnum',5);
                        if($reportcard_qr_code_db->savaData($qrcodeData)){
                            $counter++;
                        }else{
                            $error++;
                        };

                    }
                    $msg = $counter." total of Report Card QR Codes Generated Successfully <br> ".$error." errors occured";

                }else{
                    $msg = "Nothing happened";
                }

                return redirect()->to(base_url('dashboard'))->with('success', $msg);

            } else {
                // Correct the variable name to 'validation'
                $data['validation'] = $this->validator;
            }
        }
    
        return view('dashboard/index', $data);
    }


// this method renders all the qrcodes of a reportcard under a  label
    public function view_report_card_qrcodes($groupId)
    {

        $reportcard_qr_code_db = new ReportCardModel();
        $data['groupId'] = $groupId;
        $data['reportcard_qr_code_data'] = $reportcard_qr_code_db->where('groupId', $groupId)->findAll();
        $data['group_label'] = $reportcard_qr_code_db->where('groupId', $groupId)->first();
        
        return view('dashboard/view_report_card_qrcodes', $data);
    }



// this method renders all the qrcodes of an idcard under a label 
    public function view_id_card_qr_codes($groupId)
    {

        $idcard_qr_code_db = new IdCardModel();

        $data['groupId'] = $groupId;
        $data['idcard_qr_code_data'] = $idcard_qr_code_db->where('groupId', $groupId)->findAll();
        $data['group_label'] = $idcard_qr_code_db->where('groupId', $groupId)->first();
        
        return view('dashboard/view_id_card_qr_codes', $data);
    }


// this method delete single qrcode, institution, or user base on the information given 
    public function delete_single($uniqueId, $table)
    {

        $institution_db = new InstitutionModel();
        $reportcard_qr_code_db = new ReportCardModel();
        $idcard_qr_code_db = new IdCardModel();
        $user_db = new LoginModel();

        //delete id id card
        if($table == 'idCard'){
            $idData = $idcard_qr_code_db->where('unqId', $uniqueId);
            if($idData){
                $idcard_qr_code_db->where('unqId', $uniqueId)->delete();
                return redirect()->back()->with("success", "You deleted an ID Card qrcode from the database ");
                exit();
                
            }else{
                return redirect()->back()->with("failed", "The qrcode does not exist, you're trying to  delete");
                exit();

            }
        }

        // delete report card 
        if($table == 'reportCard'){
            $reportcardData = $reportcard_qr_code_db->where('unqId', $uniqueId);
            if($reportcardData){
                $reportcard_qr_code_db->where('unqId', $uniqueId)->delete();
                return redirect()->back()->with("success", "You deleted Report Card qrcode from the database ");
                exit();
            }else{
                return redirect()->back()->with("failed", "The qrcode does not exist, you're trying to  delete");
                exit();
            }
        }

        // delete institution
        if($table == 'institution'){
            $institutionData = $institution_db->where('id', $uniqueId);
            if($institutionData){
                $institutionData->where('id', $uniqueId)->delete();
                return redirect()->to(base_url('/dashboard'))->with("success", "You deleted Institution qrcode from the database ");
                exit();
            }else{
                return redirect()->back()->with("failed", "The institution does not exist, you're trying to  delete");
                exit();

            }
        }
        //delete user
        if($table == 'users'){
            $users_data = $user_db->where('id', $uniqueId);
            if($users_data){
                $users_data->where('id', $uniqueId)->delete();
                return redirect()->to(base_url('/dashboard'))->with("success", "You deleted a user from the database ");
                exit();

            }else{
                return redirect()->back()->with("failed", "The user does not exist, you're trying to  delete");
                exit();
            }
        }

        return redirect()->back()->with("failed", "Ops! unknown action");
          
    }


    // this method delete group of qrcodes, institution, or user base on the information given 
    public function delete_group($groupId, $table)
    {

        $reportcard_qr_code_db = new ReportCardModel();
        $idcard_qr_code_db = new IdCardModel();

        //delete id id card
        if($table == 'idCard'){
            $idData = $idcard_qr_code_db->where('groupId', $groupId);
            if($idData){
                $idcard_qr_code_db->where('groupId', $groupId)->delete();
                return redirect()->to('dashboard')->with("success", "You deleted an ID Card qrcode from the database ");
            }else{
                return redirect()->back()->with("failed", "The qrcode does not exist, you're trying to  delete");
            }
        }

        // delete report card 
        if($table == 'reportCard'){
            $reportcardData = $reportcard_qr_code_db->where('groupId', $groupId);
            if($reportcardData){
                $reportcard_qr_code_db->where('groupId', $groupId)->delete();
                return redirect()->to('dashboard')->with("success", "You deleted Report Card qrcode from the database ");
            }else{
                return redirect()->back()->with("failed", "The qrcode does not exist, you're trying to  delete");
            }
        }

        // delete institution

        //delete user
          
    }
    


   
}
