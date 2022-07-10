<?php
if(isset($_POST['nama']) && isset($_POST['camera']) && isset($_POST['uid']) && isset($_POST['pass']) && isset($_POST['tgl']))
{
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $camera = $_POST['camera'];
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];
    $tgl = $_POST['tgl'];

    $sql = mysqli_query($dbconnect, "INSERT INTO tb_user VALUES ('$nama', '$camera', '$uid', '$pass', '$tgl')");

    if($sql)
    {
        mysqli_query($dbconnect, "DELETE * FROM tb_entry");
    }
    header("location: tambah_data/view_tambahdata");
}
?>