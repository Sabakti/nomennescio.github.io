<?php

namespace App\Models;

use CodeIgniter\Model;

class CalonModel extends Model
{
    protected $table = 'tbl_calon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'nik',
        'tempatlahir',
        'tanggallahir',
        'jenkel',
        'tinggi',
        'berat',
        'no_telp',
        'posisi',
        'status',
        'foto',
        'dokumen'
    ];
}
