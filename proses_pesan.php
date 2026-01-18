<?php
$conn = mysqli_connect("localhost", "root", "", "lalisa_clinic");

if(!$conn){
    http_response_code(500);
    exit;
}

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO pesan (nama, email, pesan)
          VALUES ('$nama', '$email', '$pesan')";

if(mysqli_query($conn, $query)){
    echo "success";
}
?>