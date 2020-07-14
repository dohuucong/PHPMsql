<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno) die("Fatal Error");
if (isset($_POST['delete']) && isset($_POST['isbn'])){...}
if (isset($_POST['author']) && isset($_POST['title']) &&
    isset($_POST['category']) && isset($_POST['year']) &&
    isset($_POST['isbn'])){...}
echo <<<_END
<from action = "cvvc.php" method = "post"><prs>
Author <input type="text" name="author">
Title <input type="text" name="title">
Category <input type="text" name="category">
Year <input type="text" name="year">
ISBN <input type="text" name="isbn">

</prs></from>
_END;

$
