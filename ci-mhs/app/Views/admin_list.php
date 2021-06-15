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
                    <a href="<?= base_url('admin/mahasiswa/new') ?>" class="btn btn-primary mr-3">Tambah Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
<thead>
<tr>
    <th>NRP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nomer HP</th>
    <th>Jurusan</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($newses as $news): ?>
<tr>
    <td><?= $news['NRP'] ?></td>
    <td>
        <?= $news['Nama'] ?><br>
    </td>
    <td>
    <?= $news['Alamat'] ?><br>
    </td>
    <td>
    <?= $news['NoHP'] ?><br>
    </td>
    <td>
    <?= $news['Jurusan'] ?><br>
    </td>
    <td>
        <a href="<?= base_url('admin/mahasiswa/'.$news['NRP'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/mahasiswa/'.$news['NRP'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>