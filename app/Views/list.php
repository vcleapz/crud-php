<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href="/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
    <title>Ci 4 Students</title>
</head>
<body>
<div class="container">
<div class="mt-5">
<h1>Manajemen Mahasiswa</h1>
<a href="<?= base_url('create') ?>" class="btn btn-warning">Tambah Mahasiswa&nbsp;&nbsp;<i class="fa fa-user"></i></a>

<div class="mt-3 mb-5 bg-blue">
<table id="table_id" class="display">
    <thead>
        <tr>
            <th scope="row" width="2">No</th>
            <th scope="row">Nama Depan</th>
            <th scope="row">Nama Belakang</th>
            <th scope="row">Email</th>
            <th scope="row">Nomer Hp</th>
            <th scope="row">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($students_detail as $value) : ?>
        <tr>
            <td><?= $i ?>.</td>
            <td><?= $value['nama_depan'] ?></td>
            <td><?= $value['nama_belakang'] ?></td>
            <td><?= $value['email'] ?></td>
            <td><?= $value['nomor_hp'] ?></td>
            <td><a class="btn btn-warning" href="<?= base_url('edit/'.$value['id'])  ?>">Edit&nbsp;&nbsp;<i class="fa fa-pencil-alt"></i></a> <a class="btn btn-danger" href="delete/<?= $value['id']  ?>">Delete&nbsp;&nbsp;<i class="fa fa-trash"></i></a></td>
        </tr>
       <?php $i++; endforeach; ?>
    </tbody>
</table>
</div>


</div>
</div>
</body>
<script src="/js/jquery-3.4.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
        $('#table_id').DataTable({"autoWidth": true});
} );
</script>
<style type="text/css">
	.pull-right{
		float: right;
		margin-right: 10px;
	}
</style>

