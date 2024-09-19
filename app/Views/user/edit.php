<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("asset/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("asset/AdminLTE-3.2.0/dist/css/adminlte.min.css")?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div >
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <?php if (isset($validation)): ?>
              <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <div class="card card-primary">
              <form action="/user/saveEdit<?= $user['UserID'] ?>" method="post">
                <?= csrf_field() ?>
                <div class="card-body">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" name="Username" value="<?= set_value('Username', $user['Username']) ?>">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" name="Email" value="<?= set_value('Email', $user['Email']) ?>">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="Password" value="<?= set_value('Password', $user['Password']) ?>">
                  </div>
                  <div class="form-group">
                    <label for="NamaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" value="<?= set_value('NamaLengkap', $user['NamaLengkap']) ?>">
                  </div>
                  <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= set_value('Alamat', $user['Alamat']) ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="asset/AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
