<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use CodeIgniter\HTTP\ResponseInterface;

class VBuku extends BaseController
{
    protected $modelbuku;

    public function __construct()
    {
        $this->modelbuku = new buku();
        helper('form', 'url');
    }

    public function index()
    {
        $data['buku'] = $this->modelbuku->findAll();
        return view('main', $data);
    }

    public function tambah()
    {
        return view('layouts/tambah');
    }

    public function saveTambah()
    {
        helper(['form', 'url']);

        $model = new Buku();

        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ];
        // echo "ID Buku sebelum disimpan ke database:" . $data('id_buku');

        if ($model->insert($data)) {
            return redirect()->to('/perpus')->with('status', 'Data berhasil ditambahkan');
        }
        else{   
            return redirect()->back()->withInput()->with('status', 'Data gagal dimasukkan');
        }
    }
    
    public function edit()
    {
        $id_buku = $this -> request -> getVar("id_buku");
        $data['buku'] = $this->modelbuku->find($id_buku);
        return view('layouts/edit', $data);
    }

    public function saveEdit($id_buku)
    {
        $this->modelbuku->update( $id_buku, [
            'judul'  => $this->request->getVar('judul'),
            'penulis'  => $this->request->getVar('penulis'),
            'penerbit'  => $this->request->getVar('penerbit'),
            'tahun_terbit'  => $this->request->getVar('tahun_terbit')
        ]);
        return redirect()->to('/perpus');
    }

    public function hapus()
    {
        $id_buku = $this -> request -> getVar("id_buku");
        $this->modelbuku->delete($id_buku);
        return redirect() -> to('/perpus');
    }
}
