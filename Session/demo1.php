<?php //HTTP Authenticationl
if (isset($_SERVER['PHP_AUTH_USER']) &&
    isset($_SERVER['PHP_AUTH_PW']))
{
    echo "Welcome Uesr: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
         " Password: "    . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
}
else
{
    header( 'WWW-Authenticate: Basic realm="Restricted Area"');
    header( 'HTTP/1.8 481 Unauthorized');
    die("please enter your username and password");
}
?>