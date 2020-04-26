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
<h1>Tambah Mahasiswa</h1>
<a href="<?= base_url() ?>" class="btn btn-secondary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Back</a>

<?php if (isset($errors)): ?>
<div class="mt-3 mb-2 bg-blue">
<div class="alert alert-danger" role="alert">
   <ul>
    <?php foreach ($errors as $error) : ?>
       <li><?= esc($error) ?></li>
    <?php endforeach ?>
    </ul>
</div>  
<?php endif ?>

<form action="<?= base_url('store') ?>" method="post">
     <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Depan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="nama_depan">
            </div>
         </div>
          <div class="col">
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Belakang</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="nama_belakang">
            </div>
         </div>
      </div>
   
      <div class="form-group">
        <label for="formGroupExampleInput">Alamat</label>
        <textarea class="form-control" id="formGroupExampleInput" placeholder="Yogyakarta" name="alamat"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Email</label>
        <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
      </div>
       <div class="form-group">
        <label for="formGroupExampleInput">Nomor Hp</label>
        <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="+628xxxxx" name="nomor_hp">
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
      <button class="btn btn-secondary" type="reset">Reset</button>
</form>
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
    ul{
        margin-bottom: 0 !important;
    }
</style>

