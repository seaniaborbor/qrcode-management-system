<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportCardModel extends Model
{
    protected $table = 'reportcard_qrcodes'; 
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'institutionId', 
        'label', 'createdBy', 
        'createdAt', 
        'unqId',
        'groupId',
        'isverify', 
        'nameOnCard', 
        'class',
        'promoted_stmt', 
        'issuedDate',
        'conduct'
    ];

    // get all bids 
    public function savaData($data)
    {
        $this->insert($data);
        return true;
    }

    public function select_report_card_label_by_group(){
        $query = $this->db->table('reportcard_qrcodes')
        ->select('COUNT(reportcard_qrcodes.label) as total')
        ->select('reportcard_qrcodes.*')
        ->select('institutions.*')
        ->join('institutions', 'reportcard_qrcodes.institutionId = institutions.id')
        ->groupBy('reportcard_qrcodes.groupId')
        ->get();

    return $query->getResult();
    }


      public function getReportCardByUniqueId($unqid){
        return $this->select('reportcard_qrcodes.*, institutions.*')
            ->join('institutions', 'reportcard_qrcodes.institutionId = institutions.id')
            ->where('reportcard_qrcodes.unqId', $unqid)
            ->first(); // You can use findOne() if you expect a single row
    }

    
}
