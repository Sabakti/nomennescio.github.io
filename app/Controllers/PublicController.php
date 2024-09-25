<?php

namespace App\Controllers;

use App\Models\PemainModel;
use App\Models\PengurusModel;
use App\Models\CalonModel;
use App\Models\JadwalTurnamenModel;
use DateTime;


class PublicController extends BaseController
{
    public function pendaftaran()
    {
        return view('public/pendaftaran');
    }
    public function struktur()
    {
        return view('public/struktur');
    }
    public function latihan()
    {
        return view('public/latihan');
    }
    public function utama()
    {
        return view('utama');
    }
    public function Prestasi()
    {
        return view('public/prestasi');
    }
    public function sejarah()
    {
        return view('sejarah');
    }
    public function Pemain()
    {

        $pemainModel = new PemainModel();

        // Fetch all pemain data
        $data['pemain'] = $pemainModel->findAll();

        // Load the view
        return view('public/pemain', $data);
    }
    
    public function Pengurus()
{
    $request = service('request');
    $search = $request->getVar('search');
    $jabatan = $request->getVar('jabatan');

    $pengurusModel = new PengurusModel();

    // Apply filters for search and jabatan
    if (!empty($search) && !empty($jabatan)) {
        $pengurus = $pengurusModel->like('nama', $search)
                                  ->where('jabatan', $jabatan)
                                  ->findAll();
    } elseif (!empty($search)) {
        $pengurus = $pengurusModel->like('nama', $search)->findAll();
    } elseif (!empty($jabatan)) {
        $pengurus = $pengurusModel->where('jabatan', $jabatan)->findAll();
    } else {
        $pengurus = $pengurusModel->findAll();
    }

    $data = [
        'pengurus' => $pengurus,
        'search' => $search,
        'jabatan' => $jabatan
    ];

    return view('public/pengurus', $data);
}


    public function jadwal()
    {

        $model = new JadwalTurnamenModel();

        // Fetch all pemain data
        $data['jadwalTurnamen'] = $model->findAll();

        // Load the view
        return view('public/jadwal_turnamen', $data);
    }
    public function createCalon()
    {
        return view('public/pendaftaran');
    }

    public function storeCalon()
    {

        $calonModel = new CalonModel();
        $file = $this->request->getFile('foto');
        $dokumen = $this->request->getFile('dokumen');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/image', $newName);
            if ($dokumen && $dokumen->isValid() && !$dokumen->hasMoved()) {
                $dokumenName = $dokumen->getRandomName();
                $dokumen->move(ROOTPATH . 'public/dokumen', $dokumenName);
            }

            $nik = $this->request->getPost('nik');
            $nama = $this->request->getPost('nama');
            $tempatlahir = $this->request->getPost('tempatlahir');
            $tanggallahir =  (string) $this->request->getPost('tanggallahir');
            $jenkel = $this->request->getPost('jenkel');
            $tinggi = $this->request->getPost('tinggi');
            $berat = $this->request->getPost('berat');
            $no_telp = $this->request->getPost('no_telp');
            $posisi = $this->request->getPost('posisi');
            $status = $this->request->getPost('status');
            $foto = $newName;
            $dokumen = $dokumenName ?? null;

            // Check if the kode already exists
            if ($calonModel->where('nik', $nik)->first()) {
                session()->setFlashdata('error', 'NIK Telah Digunakan.');
                return redirect()->to('public/pendaftaran')->withInput();
            }
            // Calculate age
            $today = new DateTime();
            $birthDate = DateTime::createFromFormat('Y-m-d', $tanggallahir);

            if (!$birthDate) {
                session()->setFlashdata('error', 'Format tanggal lahir tidak valid.');
                return redirect()->to('public/pendaftaran')->withInput();
            }

            $age = $today->diff($birthDate)->y;

            // Check if age is more than 25 years
            if ($age > 25) {
                session()->setFlashdata('error', 'Umur maksimal Untuk Pendaftar adalah 25 tahun.');
                return redirect()->to('public/pendaftaran')->withInput();
            }
            $data = [
                'nik' => $nik,
                'nama' => $nama,
                'tempatlahir' => $tempatlahir,
                'tanggallahir' => $tanggallahir,
                'jenkel' => $jenkel,
                'tinggi' => $tinggi,
                'berat' => $berat,
                'no_telp' => $no_telp,
                'posisi' => $posisi,
                'status' => $status,
                'foto' => $foto,
                'dokumen' => $dokumen,
            ];
            $calonModel->save($data);
            session()->setFlashdata('success', 'Data telah tersimpan');
        } else {
            session()->setFlashdata('error', 'Terjadi kesalahan saat mengunggah foto.');
        }

        return redirect()->to('public/pendaftaran');
    }
}
