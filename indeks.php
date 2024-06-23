
<?php

// 1. koneksi ke dbms
require 'function.php';

// melakukakan query
$orang = query("SELECT * FROM orang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db & mysql</title>
    <style>
        .container{
          
            margin: 20px;
        }
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <!-- Halaman index admin -->
<div class="container">

    <h1>Daftar Mahasiswa</h1>
    
    <a href="./create.php">Tambah data</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Aksi</th>
          <th>Gambar</th>
          <th>ID</th>
          <th>Nama</th>
          <th>Kewarganegaraan</th>
          <th>Jenis kelamin</th>
          <th>Pekerjaan</th>
          <th>Tinggi Badan</th>
          <th>Berat badan</th>
        </tr>

<!-- Gaya templeting -->
 <?php $i=1; ?>
        <?php foreach($orang as $row) : ?>
        <tr>
          <td><?= $i;?></td>
          <td>
            <a href="update.php?id=<?= $row["id"];?>">Edit</a>
            <a href="delete.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin ingin di HAPUS ?');">Hapus</a>
        </td>
        <td>
          <img src="./img/dadang.jpg" alt="">
        </td>
          <td><?= $row["id"];?> </td>
          <td><?= $row["Dadang"];?> </td>
          <td><?= $row["kewargaan"];?> </td>
          <td><?= $row["jeniskelamin"];?> </td>
          <td><?= $row["pekerjaan"];?> </td>
          <td><?= $row["tinggibadan"];?> </td>
          <td><?= $row["beratbadan"];?> </td>
        </tr>
        <?php $i++; ?>
          <?php endforeach; ?>
      </table>

    </div>
</body>
</html>
