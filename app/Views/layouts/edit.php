<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="/perpus/saveEdit/<?= $buku['id_buku'] ?>"  method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul', $buku['judul']) ?>" required> 
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis', $buku['penulis']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= set_value('penerbit', $buku['penerbit']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= set_value('tahun_terbit', $buku['tahun_terbit']) ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>