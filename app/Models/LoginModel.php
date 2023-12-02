<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'accountType', 'passwd'];
    protected $useTimestamps = true;
    protected $createdField  = 'createdAt';
    protected $updatedField  = null;
}
