<?php 
$conn = mysqli_connect("localhost", "root", "", "belajarphp02");

function query($query){// sebuah query yang bisa dilakukan oleh semua
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($dataPost){//create / insert
    global $conn;
    $Dadang = $dataPost["nama"];
    $kewargaan = $dataPost["kewargaan"];
    $jeniskelamin = $dataPost["jeniskelamin"];
    $pekerjaan = $dataPost["pekerjaan"];
    $tinggibadan = $dataPost["tinggibadan"];
    $beratbadan = $dataPost["beratbadan"];

    // ini queri insert datanya
    $query = "INSERT INTO orang VALUES('','$Dadang','$kewargaan','$jeniskelamin','$pekerjaan','$tinggibadan','$beratbadan')";

    mysqli_query ($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) { // delete
    global $conn;
    $query = "DELETE FROM orang WHERE id = $id";
    mysqli_query ($conn, $query);
    // mysqli_query($conn, "DELETE FROM orang WHERE id = $id");
    return mysqli_affected_rows($conn);
   
}
function ubahData ($data){// edit / update
    global $conn;

    $id = $data["id"];
    $Dadang = htmlspecialchars($data["Dadang"]);
    $kewargaan = htmlspecialchars( $data["kewargaan"]);
    $jeniskelamin = htmlspecialchars( $data["jeniskelamin"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $tinggibadan = htmlspecialchars($data["tinggibadan"]);
    $beratbadan = htmlspecialchars( $data["beratbadan"]);

    // ini queri insert datanya
    $query = "UPDATE orang SET 
    Dadang = '$Dadang',
    kewargaan = '$kewargaan',
    jeniskelamin = '$jeniskelamin', 
    pekerjaan = '$pekerjaan', 
    tinggibadan = '$tinggibadan', 
    beratbadan = '$beratbadan' WHERE id = $id";

    mysqli_query ($conn, $query);

    return mysqli_affected_rows($conn);
}
?>