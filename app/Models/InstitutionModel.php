<?php

namespace App\Models;

use CodeIgniter\Model;

class InstitutionModel extends Model
{
    protected $table = 'institutions'; // Replace with your actual database table name

    protected $primaryKey = 'id'; // Replace with your primary key field

    protected $allowedFields = ['institutionName', 'phone', 'email', 'address', 'logo_path', 'about', 'createdBy'];

    public function saveInstitution($data)
    {
        return $this->insert($data);;
    }

    // // all unexpire job 
    // public function unExpireJobs()
    // {
    //     return $this->orderBy('id', 'desc')->where('deadLine >=', date('Y-m-d'))->findAll();

    // }

    // public function createJob($data)
    // {
    //     return $this->insert($data);
    // }
    
    // public function updateJob($id, $data)
    // {
    //     return $this->where('id', $id)->set($data)->update();
    // }

    // public function getJobsByLocationAndDeadline($location)
    // {
    //     $currentDate = date('Y-m-d');

    //     return $this->like('location', $location)
    //                 ->where('deadline >', $currentDate)
    //                 ->findAll();
    // }
}
