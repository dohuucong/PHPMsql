<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno) die("Fatal Error");
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die("Fatal Error");
$rows = $result->num_rows;
for($j = 0 ; $j <$rows ; ++$j)
{
    $rows = $result->fetch_array(MYSQLI_ASSOC);
    echo' Author: '   . $row['author']   .'<br>' ;
    echo' Title: '    . $row['title']    .'<br>' ;
    echo' Category: ' . $row['category'] .'<br>' ;
    echo' Year: '     . $row['year']     .'<br>' ;
    echo' ISBN: '     . $row['isbn']     .'<br><br>' ;

}
$result->close();
$conn->close();