<?php 

require 'function.php';

$id = $_GET["id"];

if( hapus($id) > 0){
    echo "<script>
            alert('DATA BERHASIL DI HAPUS');
            document.location.href = 'indeks.php';
        </script>";
}else{
    echo "<script>
            alert('DATA GAGAL DI HAPUS');
            document.location.href = 'indeks.php';
        </script>";
}

?>