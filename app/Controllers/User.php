<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as ModelsUser;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $pengguna;

    public function __construct()
    {
        $this->pengguna = new ModelsUser();
        helper('form', 'url');
    }

    public function index()
    {
        $data['user'] = $this->pengguna->findAll();
        return view('user/user', $data);
    }

    public function signup()
    {
        return view('user/signup');
    }

    public function login()
    {
        return view('user/login');
    }

    public function register()
    {
        helper(['form', 'url']);
        
        $pengguna = new ModelsUser();

        $datauser = [
            'Username' => $this->request->getPost('Username'),
            'Password' => md5($this->request->getPost('Password')),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat')
        ];

        
        if ($pengguna->insert($datauser)) {
            return redirect()->to('/datauser');
        }
    } 

    public function edit()
    {
        $UserID = $this->request->getVar('UserID');
        $data['user'] = $this->pengguna->find($UserID);
        return view('/user/edit', $data);
    }

    public function saveEdit($UserID)
    {
        $this->pengguna->update($UserID, [
            'Username' => $this->request->getVar('Username'),
            'Email' => $this->request->getVar('Email'),
            'Password' => $this->request->getVar('Password'),
            'NamaLengkap' => $this->request->getVar('NamaLengkap'),
            'Alamat' => $this->request->getVar('Alamat'),
        ]);
        return redirect()->to('/datauser');
    }

    public function saveLogin()
    {
        $pengguna = new ModelsUser();
        $username = $this->request->getVar('Username');
        $password = $this->request->getVar('Password');
        $user = $pengguna->where('Username', $this->request->getVar('Username'))->first();
        if ($user) {
            $hashedPassword = $user['Password'];
            echo "Hashed password: $hashedPassword\n"; // Log the hashed password
    
            if (password_verify($password, $hashedPassword)) {
                session()->set([
                    'username' => $user['Username'],
                    'loggedIn' => true,
                ]);
                return redirect()->to('/perpus');
            } else {
                echo "Password tidak cocok!\n"; // Password mismatch
                echo "Input password: $password\n"; // Log the input password
                echo "Hashed password: $hashedPassword\n"; // Log the hashed password again
            }
        } else {
            // Debug: tampilkan pesan jika user tidak ditemukan
            echo "eror";
        }
        
    }

    public function hapus()
    {
        $UserID = $this ->request -> getVar('UserID');
        $this->pengguna->delete($UserID);
        return redirect() -> to('/datauser');
    }
}
