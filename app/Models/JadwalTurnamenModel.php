<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalTurnamenModel extends Model
{
    protected $table = 'jadwal_turnamen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_turnamen', 'lokasi', 'tanggal', 'waktu', 'deskripsi', 'pemain_names'];
}
