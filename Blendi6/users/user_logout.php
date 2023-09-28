<?php
session_start();

$_SESSION = array();

$name = session_name();
$expire = strtotime('-1 year');
setcookie($name, null, $expire);

session_destroy();

header('Location: ../users/index.php');

exit();
?> 