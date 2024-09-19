<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
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
            </div>

            <!-- Main content -->
            <div class="col-md-10">
                <header class="text-white py-3">
                    <div class="container">
                        <h1>Perpustakaan Digital</h1>
                    </div>
                </header>

                <div class="container">
                    <a href="/perpus/tambah" class="btn btn-primary mb-3 mt-5">Tambah Data Buku</a>
                    <table class="table table-bordered table-striped">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>Nomor</th>
                                <th>Id Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($buku as $perpus): ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $perpus['id_buku'] ?></td>
                                    <td><?= $perpus['judul'] ?></td>
                                    <td><?= $perpus['penulis'] ?></td>
                                    <td><?= $perpus['penerbit'] ?></td>
                                    <td><?= $perpus['tahun_terbit'] ?></td>
                                    <td>
                                        <form action="perpus/edit" method="post" style="display: inline;">
                                            <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                            <button type="submit" class="btn btn-warning">Edit</button>
                                        </form>
                                        <form action="perpus/hapus" method="post" style="display: inline;">
                                            <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
