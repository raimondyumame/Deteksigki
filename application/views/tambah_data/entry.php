<?php
    include 'koneksi.php';
    $sql = mysqli_query($dbconnect, "SELECT * FROM tb_entry");
    $result = mysqli_fetch_assoc($sql);
    echo $result['uid'];
?>