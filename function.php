<?php
$conn = mysqli_connect("localhost", "root", "", "gki");

if (isset($_FILES["webcam"]["tmp_name"])) {
  $tmpName = $_FILES["webcam"]["tmp_name"];
  $imageName = date("Y.m.d") . " - " . date("h.i.sa") . '.jpg';
  move_uploaded_file($tmpName, 'img/' . $imageName);

  $date = date("Y/m/d") . " & " . date("h:i:sa");
  $query = "INSERT INTO tb_image VALUES('', '$date', '$imageName')";
  mysqli_query($conn, $query);
}
