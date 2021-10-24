<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","kelompok6");


function query($query) {
    global $conn ;
    $result = mysqli_query($conn, $query);
    $rows = [] ;
    while( $row = mysqli_fetch_assoc($result)) {

            $rows[] = $row;
    }    

    return $rows;
}
function tambah($data) {
	global $conn;
	$tanggalp = htmlspecialchars($data["tanggalp"]);
	$nama = htmlspecialchars($data["nama"]);
	$merek = htmlspecialchars($data["merek"]);
	$jumlah = 	htmlspecialchars			($data["jumlah"]);  // tanpa special karakter
	$pengembalian = 		htmlspecialchars	($data["pengembalian"]);   // tanpa special karakter
	$query = "INSERT INTO peminjaman
		VALUES
		('','$tanggalp','$nama', '$merek','$jumlah','$pengembalian')

		 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}



function cari($keyword) {

        $query = "SELECT  * FROM peminjaman
            WHERE

           	ID LIKE '%$keyword%' OR
            name LIKE '%$keyword%' OR
            EndDate LIKE '%$keyword%' 

    ";

    return query($query);
}
function registrasi($data) {

	global $conn;

	$user = strtolower(stripslashes($data["username"]));
	$auth = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
// cek username sudah ada atau blm
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$user'");

  if (mysqli_fetch_assoc($result)) {
  	echo "<script>
  				alert('username sudah terdaftar')
  	</script>";
  	return false;
  }

	// cek konfirmasi password

	if($auth !== $password2) {
		echo "<script>
			alert('konfirmasi password tidak sesuai');

		</script>";

		return false;
	}

	// encripytion password nya
		$auth = password_hash($auth, PASSWORD_DEFAULT);

		// tambahkan user baru ke database

			mysqli_query($conn, "INSERT INTO user VALUES('','$user','$auth')");
			return mysqli_affected_rows($conn);
}


?>