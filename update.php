
 <?php

require 'function.php';


// Ambil data dari url 
$id = $_GET["id"];
// query data berdasarkan id
$orr = query("SELECT * FROM orang WHERE id = $id")[0];


//   memeriksa variabel submit untuk nanti dijalankan, JADI DI CEK APAKAH TOMBOL SUBMIT SUDAH DI UBAH ATAU BELUM
if( isset($_POST["submit"]) ) {
  

  if(ubahData ($_POST) > 0){// mengecek data apakah berhasil di ubah, dan ketika tombol di klik ambil semua data baru kirim dan ubah
      echo "
      <script>
              alert('DATA BERHASIL DI UBAH');
              document.location.href = 'indeks.php';
          </script>
          ";
  }else {
      echo " <script>
      alert(' DATA GAGAL DI UBAH')
      </script>";
  }
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ubah /edit data</title>
</head>
<body>
  <h1>UPADATE data orang</h1>
  <form action="" method="post">
  <input type="hidden" name="id" value="<?= $orr["id"];?>">
      <ul>
          <li>
              <label for="nama">Nama : 
                  <input type="text" name="Dadang" id="nama" required  value="<?= $orr["Dadang"];?>">
              </label>
              
          </li>
          <li>
              <label for="warganegara">Warganegara :
                  <input type="text" name="kewargaan" id="warganegara" value="<?= $orr["kewargaan"];?>"> </label>
             
          </li>
          <li>
              <label for="jeniskelamin">Jenis kelamin: 
                  <input type="text" name="jeniskelamin" id="jeniskelamin" value="<?= $orr["jeniskelamin"];?>">
              </label>
              
          </li>
          <li>
              <label for="pekerjaan">Pekerjaan : 
                  <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $orr["pekerjaan"];?>">
              </label>
              
          </li>
          <li>
              <label for="tinggibadan">Tinggi badan : 
                  <input type="text" name="tinggibadan" id="tinggibadanb" value="<?= $orr["tinggibadan"];?>">
              </label>
              
          </li>
          <li>
              <label for="beratbadan">Berat badan :
                  <input type="text" name="beratbadan" id="beratbadan" value="<?= $orr["beratbadan"];?>">
              </label>
              
          </li>
          <li>
              <button type="submit" name="submit">
                  UPADATE
              </button>
          </li>
      </ul>
  </form>
</body>
</html>


