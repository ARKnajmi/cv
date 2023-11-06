<?php
$host = 'localhost';
$db = 'cv_db';
$user = 'ARKannajmi';
$pwd = '3337220031ARK';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}