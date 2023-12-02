<?php

namespace App\Controllers;
use App\Models\IdCardModel; // Import the qrcode 
use App\Models\InstitutionModel; // Import the Modal that controlls  
use App\Models\ReportCardModel; // Import the Modal that controlls  
use App\Models\LoginModel;

class Dashboard extends BaseController
{
    // this is the default hompage of the dashboard
    public function index(): string
    {
        $data['title'] = 'dashboard';

         // load all institution data 
         $institution_db = new InstitutionModel();
         $data['institution_data'] = $institution_db->findAll();
         // load all id_card qrcodes data 
         $idcard_qr_code_db = new IdCardModel();
         $data['idcard_qr_code'] = $idcard_qr_code_db->select_id_card_label_by_group();

         // load all report_card qrcodes data 
         $reportcard_qr_code_db = new ReportCardModel();
         $data['reportcard_qr_code_db'] = $reportcard_qr_code_db->select_report_card_label_by_group();

        
        return view('dashboard/index', $data);
    }

    
   
}
