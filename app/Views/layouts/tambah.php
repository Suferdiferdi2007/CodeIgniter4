<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>Perpustakaan Digital</h1>
            <h4>Tambah Buku</h4>
        </div>
    </header>

    <div class="container">
        <div class="row ">
            <div class="col-md-6">
            <?php if(isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listerror() ?></div>
            <?php endif; ?>
            <form action="/perpus/saveTambah" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id_buku">ID Buku</label>
                    <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= set_value('id_buku')?>" required>
                </div>
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul')?>" required>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis:</label>
                    <input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis')?>" required>
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= set_value('penerbit')?>" required>
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit:</label>
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= set_value('tahun_terbit')?>" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah Buku</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
