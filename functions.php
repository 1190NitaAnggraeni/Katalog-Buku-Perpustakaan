<?php
//koneksi
$conn = mysqli_connect("localhost", "root", "", "perpusbaru");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $conn;

      //ambil data dari dalam form
      $kode = htmlspecialchars ($data["kode"]);
      $judul = htmlspecialchars ($data["judul"]);
      $pengarang = htmlspecialchars ($data["pengarang"]);
      $penerbit = htmlspecialchars ($data["penerbit"]);

      //query insert data
    $query = "INSERT INTO buku
    VALUES
    ('', '$kode', '$judul', '$pengarang', '$penerbit')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>