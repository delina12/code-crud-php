<!-- logika php  -->
 <!-- apakah tombol submit sudah pernah dipencet atau belum -->
  <?php

  require "function.php";
//   koneksi ke dbms
// $conn = mysqli_connect("localhost","root","","belajarphp02");// koneksi ini diperlukan jika tidak membuat function, tapi jika bikin function di function.php gak usah karena sudah ada ikut aja sama yang di atas

//   memeriksa variabel submit untuk nanti dijalankan
if( isset($_POST["submit"]) ) {
    // Ambil data dari form
    // $id = $_POST["id"];
   
    // cek keberhasilan/kegagalan aksi sebagai feedback ke user
    // if( mysqli_affected_rows($conn) > 0) {
    //     echo "DATA TELAH BERHASIL DITAMBAHKAN";
    // } else {
    //     echo "UPS...GAGAL, SILAHKAN HUBUNGI ADMIN";
    //     echo  mysqli_error($conn);
    // }

    if( tambah($_POST) > 0){
        echo "<script>
                alert('DATA BERHASIL DI TAMBAHKAN');
                document.location.href = 'indeks.php';
            </script>";
    }else {
        echo " <script>
        alert(' DATA GAGAL DI INPUTKAN')
        </script>";
    }
    }
   
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah data orang</h1>
    <form action="" method="POST">
        <ul>
            <!-- <li>
                <label for="id">Id : 
                    <input type="text" name="id" id="id">
                </label>
                
            </li> -->
            <li>
                <label for="nama">Nama : 
                    <input type="text" name="nama" id="nama" required>
                </label>
                
            </li>
            <li>
                <label for="warganegara">Warganegara :
                    <input type="text" name="kewargaan" id="warganegara"> </label>
               
            </li>
            <li>
                <label for="jeniskelamin">Jenis kelamin: 
                    <input type="text" name="jeniskelamin" id="jeniskelamin">
                </label>
                
            </li>
            <li>
                <label for="pekerjaan">Pekerjaan : 
                    <input type="text" name="pekerjaan" id="pekerjaan">
                </label>
                
            </li>
            <li>
                <label for="tinggibadan">Tinggi badan : 
                    <input type="text" name="tinggibadan" id="tinggibadanb">
                </label>
                
            </li>
            <li>
                <label for="beratbadan">Berat badan :
                    <input type="text" name="beratbadan" id="beratbadan">
                </label>
                
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambahkan!
                </button>
            </li>
        </ul>
    </form>
</body>
</html>


