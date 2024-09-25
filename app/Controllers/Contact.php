<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit()
    {
        $session = session();

        // Simpan pesan ke database atau kirim email, dll.
        // Di sini, kita hanya akan mengatur pesan sukses di sesi.
        $session->setFlashdata('success', 'Your message has been sent successfully!');

        return redirect()->to('/contact');
    }
}
