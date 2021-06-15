<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/mahasiswa') ?>">Database Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('admin/news/new') ?>" class="btn btn-primary mr-3">New Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                
<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="NRP">NRP</label>
        <input type="text" name="NRP" class="form-control" placeholder="NRP" required>
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" placeholder="Nama" required>
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="text" name="Alamat" class="form-control" placeholder="Alamat" required>
    </div>
    <div class="form-group">
        <label for="NoHP">NoHP</label>
        <input type="text" name="NoHP" class="form-control" placeholder="NoHP" required>
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="text" name="Jurusan" class="form-control" placeholder="Jurusan" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Add</button>
        
    </div>
</form>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>