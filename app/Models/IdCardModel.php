<?php

namespace App\Models;

use CodeIgniter\Model;

class IdCardModel extends Model
{
    protected $table = 'idcard_qrcodes'; 
    protected $primaryKey = 'id';

    protected $allowedFields = ['institutionId', 'groupId', 'label', 'createdBy', 'createdAt', 'unqId','isverify', 'nameOnCard', 'pos','idNum', 'file_path', 'issuedDate','expireDate'];

    // get all bids 
    public function savaData($data)
    {
        $this->insert($data);
        return true;
    }

    public function select_id_card_label_by_group(){
        $query = $this->db->table('idcard_qrcodes')
        ->select('COUNT(idcard_qrcodes.label) as total')
        ->select('idcard_qrcodes.*')
        ->select('institutions.*')
        ->join('institutions', 'idcard_qrcodes.institutionId = institutions.id')
        ->groupBy('idcard_qrcodes.groupId')
        ->get();

    return $query->getResult();
    }
    
    public function getIdCardDataByUnqid($unqid)
    {
        return $this->select('idcard_qrcodes.*, institutions.*')
            ->join('institutions', 'idcard_qrcodes.institutionId = institutions.id')
            ->where('idcard_qrcodes.unqId', $unqid)
            ->first(); // You can use findOne() if you expect a single row
    }

    
}
