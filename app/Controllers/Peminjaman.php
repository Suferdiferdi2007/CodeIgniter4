<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Peminjaman as PeminjamanModel;
use App\Models\Buku;
use App\Models\User;

class Peminjaman extends BaseController
{
    protected $peminjaman;
    public function __construct()
    {
        $this->peminjaman = new PeminjamanModel();

    }
    public function index()
    {
        $data['peminjaman'] = $this->peminjaman
            ->join('user', 'user.UserID = peminjaman.UserID')
            ->join('buku', 'buku.id_buku = peminjaman.BukuID')
            ->findAll();

        return view('peminjaman/index', $data);
    }

    // Tampilkan form tambah peminjaman
    public function create()
    {
        $data['users'] = (new User())->findAll();
        $data['buku'] = (new Buku())->findAll();

        return view('peminjaman/create', $data);
    }

    // Simpan data peminjaman
    public function store()
    {
        $this->peminjaman->save([
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman')
        ]);

        return redirect()->to('/peminjaman');
    }

    // Tampilkan form edit peminjaman
    public function edit($id)
    {
        $data['peminjaman'] = $this->peminjaman->find($id);
        $data['users'] = (new User())->findAll();
        $data['buku'] = (new Buku())->findAll();

        return view('peminjaman/edit', $data);
    }

    // Update data peminjaman
    public function update($id)
    {
        $this->peminjaman->update($id, [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman')
        ]);

        return redirect()->to('/peminjaman');
    }

    // Hapus peminjaman
    public function delete($id)
    {
        $this->peminjaman->delete($id);

        return redirect()->to('/peminjaman');
    }
}

