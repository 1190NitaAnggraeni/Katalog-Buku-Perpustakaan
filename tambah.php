<?php
require'functions.php';
if( isset($_POST["submit"]) ) {
  



    //cek data berhasil ditambah atau tidak
 if( tambah($_POST) > 0) {
     echo "
     <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
     </script>
     ";
 } else {
     echo "
     <script>
       alert('data gagal ditambahkan');
      document.location.href = 'index.php';
  </script>
     ";
 }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    
<h1>Tambah Data Buku</h1>

<form action="" method="post">
    <ul>
         <li>
            <label for="">Kode :</label>
            <input type="text" name="kode" id="kode" required>
         </li>
         <li>
            <label for="">Judul :</label>
            <input type="text" name="judul" id="judul" required>
         </li>
         <li>
            <label for="">Pengarang :</label>
            <input type="text" name="pengarang" id="pengarang" required>
         </li>
         <li>
            <label for="">Penerbit :</label>
            <input type="text" name="penerbit" id="penerbit" required>
         </li>
         <li>
            <button type="submit" name="submit">Tambah Data</button>
         </li>
    </ul>

</form>

</body>
</html>