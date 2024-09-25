<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalTurnamenModel;

class JadwalController extends BaseController
{
    public function jadwal()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new JadwalTurnamenModel();
        $jadwalTurnamen = $model->findAll();

        $data = [
            'jadwalTurnamen' => $jadwalTurnamen,
            'username' => $session->get('username'),
        ];

        return view('admin/jadwal_turnamen', $data);
    }

    public function create()
    {
        return view('admin/jadwal_turnamen/create');
    }

    public function store()
    {
        $model = new JadwalTurnamenModel();

        $data = [
            'nama_turnamen' => $this->request->getPost('nama_turnamen'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pemain_names' => $this->request->getPost('pemain_names')
        ];

        $model->insert($data);

        return redirect()->to('jadwal_turnamen');
    }

    public function edit($id)
    {
        $model = new JadwalTurnamenModel();
        $data['jadwal_turnamen'] = $model->find($id);

        return view('admin/jadwal_turnamen/edit', $data);
    }

    public function update($id)
    {
        $model = new JadwalTurnamenModel();

        $data = [
            'nama_turnamen' => $this->request->getPost('nama_turnamen'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pemain_names' => $this->request->getPost('pemain_names')
        ];

        $model->update($id, $data);

        return redirect()->to('jadwal_turnamen');
    }

    public function delete($id)
    {
        $model = new JadwalTurnamenModel();
        $model->delete($id);

        return redirect()->to('jadwal_turnamen');
    }
}
