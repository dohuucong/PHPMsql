<?php //setupusers.php
require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_errno) die("Connect to mysql Error");
$query = "CREATE TABLE users (
  forename VARCHAR (32) NOT NULL,
  surname VARCHAR (32) NOT NULL,
  username VARCHAR (32) NOT NULL UNIQUE,
  password VARCHAR (255) NOT NULL
  
)";
$result = $connection->query($query);
if (!$result) die("Execute query Error");

$forename = 'Dang';
$surname  = 'Thi' ;
$username = 'thidk';
$password = '123';
$hash = password_hash($password, PASSWORD_DEFAULT);
add_user($connection, $forename, $surname, $username, $hash);
function add_user($connection, $fn, $sn, $un, $pw)
{
    $stmt = $connection->prepare('INSERT INTO users VALUES(?,?,?)');
    $stmt->binb_param('$$$$', $fn, $sn, $un, $pw);
    $stmt->executa();
    $stmt->close();
}