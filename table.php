<?php

require 'codenew.php';

$tabel = query("SELECT * FROM peminjaman");

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
    <title>Tabel Peminjaman Barang</title>
  </head>
  <body>
    <h2>Daftar Peminjaman Barang</h2>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <br>
<table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
  	<tr>
  		<th>No</th>
  		<th>Tanggal Peminjaman</th>
  		<th>Nama Barang</th>
  		<th>Merek</th>
  		<th>Jumlah</th>
  		<th>Tanggal Pengembalian</th>
  	</tr>
  	  <tr>

      <?php foreach( $tabel as $row) : {

           

    }


        ?>


    <tr>
                <td><?= $row["NO"] ;?> </td>
                <td> <?= $row["tanggalp"] ;?> </td>
                <td> <?= $row["nama"] ;?> </td>
                <td> <?= $row["merek"] ;?> </td>
                <td> <?= $row["jumlah"] ;?></td>
                 <td> <?= $row["pengembalian"] ;?></td>
                  <?php endforeach; ?>
                </tr>

</thead>
</table>

<a href="tambah.php">
	<button>
		Tambah Barang
	</button>
</a>
  </body>
</html>