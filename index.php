<?php


$koneksi = mysqli_connect("localhost","root","","api");
$sql = "SELECT * FROM api";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();
// $json = json_encode($data);
header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);