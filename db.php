<?php
session_start();

$host = getenv('DB_HOST') ?: 'service-db-container';
$user = getenv('MYSQL_USER') ?: 'myuser';
$password = getenv('MYSQL_PASSWORD') ?: 'mypassword';
$database = getenv('MYSQL_DATABASE') ?: 'mydatabase';

$conn = mysqli_connect(
  $host,
  $user,
  $password,
  $database
) or die(mysqli_error($conn));

?>