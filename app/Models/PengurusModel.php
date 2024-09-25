<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'tbl_pengurus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jabatan', 'foto'];
}
