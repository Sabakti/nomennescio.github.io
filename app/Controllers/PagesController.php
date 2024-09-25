<?php

namespace App\Controllers;

use App\Models\CalonModel;
use App\Models\PemainModel;
use App\Models\PengurusModel;


class PagesController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $pengurusModel = new PengurusModel();
        $pemainModel = new PemainModel();
        $calonModel = new CalonModel();
        $Calon = $calonModel->findAll();
        // Get the total counts
        $totalPengurus = $pengurusModel->countAll();
        $totalCalonAnggota = $calonModel->where('status', 'Calon Anggota')->countAllResults();
        $totalPemain = $pemainModel->countAll();

        $data = [
            'username' => $session->get('username'),
            'totalPengurus' => $totalPengurus,
            'totalCalonAnggota' => $totalCalonAnggota,
            'calonAnggota' => $Calon,
            'totalPemain' => $totalPemain
        ];
        return view('admin/dashboard', $data);
    }

    public function print($id)
    {
        $pemainModel = new PemainModel();
        $pemain = $pemainModel->find($id);

        if (!$pemain) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pemain not found');
        }

        $data = [
            'pemain' => $pemain
        ];

        return view('admin/pemain/print_card', $data);
    }
    public function Pengurus()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $pengurusModel = new PengurusModel();
        $data['pengurus'] = $pengurusModel->findAll();
        return view('admin/pengurus', $data);
    }
    public function createPengurus()
    {
        return view('admin/pengurus/create');
    }

    public function storePengurus()
    {
        $pengurusModel = new PengurusModel();
        $file = $this->request->getFile('foto');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . '/public/image', $newName);


            $data = [
                'nama' => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'foto' => $newName
            ];
            $pengurusModel->save($data);
            session()->setFlashdata('success', 'Data telah tersimpan');
        } else {
            session()->setFlashdata('error', 'Terjadi kesalahan saat mengunggah foto.');
        }


        return redirect()->to('/pengurus');
    }

    public function editPengurus($id)
    {
        $pengurusModel = new PengurusModel();
        $data['pengurus'] = $pengurusModel->find($id);

        return view('admin/pengurus/edit', $data);
    }

    public function updatePengurus($id)
    {
        $pengurusModel = new PengurusModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),

        ];

        $pengurusModel->update($id, $data);

        return redirect()->to('/pengurus');
    }

    public function deletePengurus($id)
    {
        $pengurusModel = new PengurusModel();
        $pengurusModel->delete($id);

        return redirect()->to('/pengurus');
    }
    public function Pemain()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $pemainModel = new PemainModel();

        // Fetch all pemain data
        $data['pemain'] = $pemainModel->findAll();

        // Load the view
        return view('admin/pemain', $data);
    }
    public function create()
    {
        return view('admin/pemain/create');
    }

    public function store()
    {
        $pemainModel = new PemainModel();
        $file = $this->request->getFile('foto');
        $dokumen = $this->request->getFile('dokumen'); 

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/image', $newName);

            // Handle dokumen upload
            if ($dokumen && $dokumen->isValid() && !$dokumen->hasMoved()) {
                $dokumenName = $dokumen->getRandomName();
                $dokumen->move(ROOTPATH . 'public/dokumen', $dokumenName);
            }

            $data = [
                'nama' => $this->request->getPost('nama'),
                'tmp_lahir' => $this->request->getPost('tmp_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jenkel' => $this->request->getPost('jenkel'),
                'tinggi' => $this->request->getPost('tinggi'),
                'berat' => $this->request->getPost('berat'),
                'no_telp' => $this->request->getPost('no_telp'),
                'posisi' => $this->request->getPost('posisi'),
                'status' => $this->request->getPost('status'),
                'foto' => $newName,
                'dokumen' => $dokumenName ?? null
            ];

            $pemainModel->save($data);
            session()->setFlashdata('success', 'Data telah tersimpan');
        } else {
            session()->setFlashdata('error', 'Terjadi kesalahan saat mengunggah foto.');
        }

        return redirect()->to('/pemain');
    }

    public function edit($id)
    {
        $pemainModel = new PemainModel();
        $data['pemain'] = $pemainModel->find($id);

        return view('admin/pemain/edit', $data);
    }

    public function update($id)
    {
        $pemainModel = new PemainModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tmp_lahir' => $this->request->getPost('tmp_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenkel' => $this->request->getPost('jenkel'),
            'tinggi' => $this->request->getPost('tinggi'),
            'berat' => $this->request->getPost('berat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'posisi' => $this->request->getPost('posisi'),
            'status' => $this->request->getPost('status')
        ];

        $pemainModel->update($id, $data);

        return redirect()->to('/pemain');
    }

    public function delete($id)
    {
        $pemainModel = new PemainModel();
        $pemainModel->delete($id);

        return redirect()->to('/pemain');
    }

    public function Calon()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $calonModel = new CalonModel();
        $data['calon'] = $calonModel->findAll();
        return view('admin/calon', $data);
    }
    public function createCalon()
    {
        return view('admin/calon/create');
    }

    public function storeCalon()
    {
        $calonModel = new CalonModel();
        $file = $this->request->getFile('foto');
        $dokumen = $this->request->getFile('dokumen'); // Handle the document upload

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/image', $newName);
        
             // Handle dokumen upload
             if ($dokumen && $dokumen->isValid() && !$dokumen->hasMoved()) {
                $dokumenName = $dokumen->getRandomName();
                $dokumen->move(ROOTPATH . 'public/dokumen', $dokumenName);
            }
            $data = [
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'tempatlahir' => $this->request->getPost('tempatlahir'),
                'tanggallahir' => $this->request->getPost('tanggallahir'),
                'jenkel' => $this->request->getPost('jenkel'),
                'tinggi' => $this->request->getPost('tinggi'),
                'berat' => $this->request->getPost('berat'),
                'no_telp' => $this->request->getPost('no_telp'),
                'posisi' => $this->request->getPost('posisi'),
                'status' => $this->request->getPost('status'),
                'foto' => $newName,
                'dokumen' => $dokumenName ?? null
            ];

            $calonModel->save($data);
            session()->setFlashdata('success', 'Data telah tersimpan');
        } else {
            session()->setFlashdata('error', 'Terjadi kesalahan saat mengunggah foto.');
        }
        return redirect()->to('/calon');
    }

    public function editCalon($id)
    {
        $calonModel = new CalonModel();
        $data['calon'] = $calonModel->find($id);

        return view('admin/calon/edit', $data);
    }

    public function updateCalon($id)
    {
        $calonModel = new CalonModel();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempatlahir' => $this->request->getPost('tempatlahir'),
            'tanggallahir' => $this->request->getPost('tanggallahir'),
            'jenkel' => $this->request->getPost('jenkel'),
            'tinggi' => $this->request->getPost('tinggi'),
            'berat' => $this->request->getPost('berat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'posisi' => $this->request->getPost('posisi'),
            'status' => $this->request->getPost('status'),
        ];

        $calonModel->update($id, $data);

        return redirect()->to('/calon');
    }

    public function deleteCalon($id)
    {
        $calonModel = new CalonModel();
        $calonModel->delete($id);

        return redirect()->to('/calon');
    }
    public function acceptCalon($id)
{
    $calonModel = new CalonModel();
    $pemainModel = new PemainModel();

    // Find calon data by ID
    $calon = $calonModel->find($id);

    if ($calon) {
        // Transfer data to pemain
        $data = [
            'nama' => $calon['nama'],
            'tmp_lahir' => $calon['tempatlahir'],
            'tgl_lahir' => $calon['tanggallahir'],
            'jenkel' => $calon['jenkel'],
            'tinggi' => $calon['tinggi'],
            'berat' => $calon['berat'],
            'no_telp' => $calon['no_telp'],
            'posisi' => $calon['posisi'],
            'status' => 'Anggota',
            'foto' => $calon['foto']
        ];
        $pemainModel->save($data);

        // Delete from calon table
        $calonModel->delete($id);

        session()->setFlashdata('success', 'Calon anggota telah diterima dan dipindahkan ke daftar anggota.');
    } else {
        session()->setFlashdata('error', 'Terjadi kesalahan saat memproses data.');
    }

    return redirect()->to('/calon');
}

public function rejectCalon($id)
{
    $calonModel = new CalonModel();
    $calonModel->delete($id);

    session()->setFlashdata('success', 'Calon anggota telah ditolak dan dihapus.');
    return redirect()->to('/calon');
}
}
