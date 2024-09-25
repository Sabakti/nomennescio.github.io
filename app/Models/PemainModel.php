<?php

namespace App\Models;

use CodeIgniter\Model;

class PemainModel extends Model
{
    protected $table = 'tbl_pemain';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'tmp_lahir',
        'tgl_lahir',
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
