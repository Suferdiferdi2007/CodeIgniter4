<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f5e9;
        }
        header {
            background-color: #388e3c;
        }
        .btn-primary {
            background-color: #4caf50;
            border-color: #4caf50;
        }
        .sidebar {
            background-color: #2e7d32;
            min-height: 100vh;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4>Menu</h4>
            <a href="/peminjaman">Peminjaman</a>
            <a href="/datauser">Data User</a>
            <a href="/perpus">Data Buku</a>
        </div>

        <!-- Main content -->
        <div class="col-md-10">
            <header class="text-white py-3">
                <div class="container">
                    <h1>Daftar Peminjaman</h1>
                </div>
            </header>

            <div class="container mt-5">
                <a href="/peminjaman/create" class="btn btn-primary mb-3">Tambah Peminjaman</a>
                <table class="table table-striped table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Buku ID</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status Peminjaman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peminjaman as $item): ?>
                        <tr>
                            <td><?= $item['PeminjamanID']; ?></td>
                            <td><?= $item['UserID'];?></td>
                            <td><?= $item['BukuID'];?></td>
                            <td><?= $item['TanggalPeminjaman']; ?></td>
                            <td><?= $item['TanggalPengembalian']; ?></td>
                            <td><?= $item['StatusPeminjaman']; ?></td>
                            <td>
                                <a href="/peminjaman/edit/<?= $item['PeminjamanID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/peminjaman/delete/<?= $item['PeminjamanID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
