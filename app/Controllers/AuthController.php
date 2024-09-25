<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {

        return view('auth/login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            if ($password == $pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Username atau Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Pastikan username dan password adalah string
        if (is_string($username) && is_string($password)) {
            $user = $model->where('username', $username)->first();

            // Pastikan $user ditemukan dan password adalah string
            if ($user && isset($user['password']) && password_verify($password, $user['password'])) {
                // Set session data
                $sessionData = [
                    'username' => $user['username'],
                    'isLoggedIn' => true
                ];
                session()->set($sessionData);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid login credentials');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }


    public function create()
    {
        return view('auth/create_user');
    }

    public function store()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role')
        ];

        if ($model->insert($data)) {
            return redirect()->to('/users')->with('success', 'User created successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to create user');
        }
    }
}
