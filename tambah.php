<?php

require 'codenew.php';

if(isset($_POST["submit"]) ) {

        
    if ( tambah($_POST) > 0 ){
        echo "

        <script>
            alert ('data berhasil ditambahkan');
            document.location.href = 'table.php';
            </script>
        ";

    } else{
        echo "

        <script>
            alert ('data gagal ditambahkan');
            document.location.href = 'table.php';
            </script>
        ";
    }
    
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="" href="style.css">
    <title>Tambah Data</title>
  </head>
  <body>
    <h2>Tambah Data Barang</h2>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    <form class="row g-3" action="" method="post">
  <div class="col-md-6">
    <label  class="form-label">Tanggal Peminjaman</label>
    <input type="date" class="form-control" name="tanggalp">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama">
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Merek Barang</label>
    <input type="text" class="form-control" name="merek">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Jumlah Barang</label>
    <input type="number" class="form-control" name="jumlah">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Tanggal Pengembalian</label>
    <input type="date" class="form-control" name="pengembalian">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
      

    </form>
  </body>
</html>