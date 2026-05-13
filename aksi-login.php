<?php

$email = $_POST['Username'];
$password = $_POST['Password'];

include "./config.php";

$query = "SELECT * FROM users WHERE email='".$_POST['Username']."'";

$result = $conn->query($query);


$row = $result->fetch_assoc();


if ($result->num_rows == 0) {
}

if ($result->num_rows == 0) {
  
  header("location:login.php");
  exit(); 
} else {
  if ($_POST['name'] == $row['plain_code']) {
    // echo "Anda berhasil login";
    header("location:daftarkandidatsemua.php");
  } else {
    // echo "Password anda salah";
    header("location:gagal_login.php");
  }
}

?>