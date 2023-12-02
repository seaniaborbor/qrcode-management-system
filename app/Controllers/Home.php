<?php

namespace App\Controllers;
use App\Models\IdCardModel; // Import the qrcode 
use App\Models\InstitutionModel; // Import the Institution Model
use App\Models\ReportCardModel; // Import the Modal that controlls 
use App\Models\LoginModel;

class Home extends BaseController
{

    // ============================================
     // THIS IS THE HOME PAGE
     public function index(): string
     {
         return view('index');
     }


     // ======================================
     // VERIFY ID CARD OR PROGRAM INFORMATION FOR QRCODE TO READ  
     public function verify_id($unqId)
     {
        $id_db = new IdCardModel();
        $idData = $id_db->where('unqId',$unqId)->first();
        $data['unqId'] = $unqId;

        
        $data['file_to_show'] = "";
        
        if($idData){
            if($idData['isverify'] == 0){
                $data['id'] = $idData['id'];
                $data['unqId'] = $idData['unqId'];
                $data['file_to_show'] = 'verify_id_form.php';
            }else{
                $data['card_info'] = $id_db->getIdCardDataByUnqid($unqId);
                $data['file_to_show'] = 'show_id_data.php';
            }
        }else{
                $data['file_to_show'] = 'id_does_not_exist.php';
        }
        //whe the request is made to save the id card data information through a post request
        if($this->request->getMethod() == 'post')
        {
            // validation rules 
            $rules = [
                'nameOnCard' => 'required',
                'pos' => 'required',
                'idNum' => 'required|numeric',
                'issuedDate' => 'required',
                'expireDate' => 'required',
                'pic' => 'uploaded[pic]|max_size[pic,1024]|mime_in[pic,image/jpg,image/jpeg,image/png]',
            ];

            if ($this->validate($rules)) {

                $idData['nameOnCard'] = $this->request->getPost('nameOnCard');
                $idData['pos'] = $this->request->getPost('pos');
                $idData['idNum'] = $this->request->getPost('idNum');
                $idData['issuedDate'] = $this->request->getPost('issuedDate');
                $idData['expireDate'] = $this->request->getPost('expireDate');
                $idData['isverify'] = 1;
            
                // Move the uploaded file to a writable directory (you can customize the directory)
                $pic = $this->request->getFile('pic');
                if ($pic->isValid() && !$pic->hasMoved()) {
                    $newName = $pic->getRandomName();
                    $pic->move('uploads/', $newName);
                    $idData['file_path'] = $newName;
                }
            
                // Assuming $unqId is correctly set
                $id_db->update($idData['id'],$idData);
            
                return redirect()->back()->with('success', 'ID Card information saved successfully');
            } else {
                $data['validation'] = $this->validator;
            }
            


        }

        return view('verify_id_card', $data);

     }

     // =============================================================

     // VERIFY OR PROGRAM REPORT CARD QR CODE METHOD 
     public function verify_reportcard($unqId)
     {
        $report_card_db = new ReportCardModel();
        $report_card_data = $report_card_db->where('unqId',$unqId)->first();
        $data['unqId'] = $unqId;

        
        $data['file_to_show'] = "";
        
        if($report_card_data){
            if($report_card_data['isverify'] == 0){
                $data['id'] = $report_card_data['id'];
                $data['unqId'] = $report_card_data['unqId'];
                $data['file_to_show'] = 'verify_reportcard_form.php';
            }else{
                $data['card_info'] = $report_card_db->getReportCardByUniqueId($unqId);
                $data['file_to_show'] = 'show_report_card_data.php';
            }
        }else{
                $data['file_to_show'] = 'id_does_not_exist.php';
        }
        //whe the request is made to save the id card data information through a post request
        if($this->request->getMethod() == 'post')
        {
            // validation rules 
            $rules = [
                'class' => 'required',
                'nameOnCard' => 'required',
                'promoted_stmt' => 'required',
                'conduct' => 'required',
                'issuedDate' => 'required'
            ];

            if ($this->validate($rules)) {

                $cardData['nameOnCard'] = $this->request->getPost('nameOnCard');
                $cardData['class'] = $this->request->getPost('class');
                $cardData['promoted_stmt'] = $this->request->getPost('promoted_stmt');
                $cardData['conduct'] = $this->request->getPost('conduct');
                $cardData['issuedDate'] = $this->request->getPost('issuedDate');
                $cardData['isverify'] = 1;
            
                // Assuming $unqId is correctly set
                $report_card_db->update($report_card_data['id'],$cardData);
            
                return redirect()->back()->with('success', 'ID Card information saved successfully');
            } else {
                $data['validation'] = $this->validator;
            }
            


        }

        return view('verify_report_card', $data);
     }

      
}
