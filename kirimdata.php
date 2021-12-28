<?php
$koneksi        = mysqli_connect("localhost","root","","coba");

$engine1 = json_encode($_REQUEST);
// $durasi = $_POST['jam'];

// $inputJSON = file_get_contents('php://input');
// $input= json_decode( $inputJSON ); //convert JSON into array

// print_r(json_encode($input));
// $arr = json_decode($jsonobj, true);


// mysqli_query($koneksi,"ALTER TABLE hari AUTO_INCREMENT = 1");

// $simpan = mysqli_query($koneksi,"INSERT INTO hari(engine1,durasi) VALUES ('$engine1','$durasi')");
$simpan = mysqli_query($koneksi,"INSERT INTO test(hari) VALUES ('$engine1')");