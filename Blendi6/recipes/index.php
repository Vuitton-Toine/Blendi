<?php
session_start();
$type = filter_input(INPUT_GET,'type');   
if(isset($_POST['username'])) { 
$_SESSION['username'] = $_POST['username'];
}

if ($type == 'sub1'){
include 'recipe_edit.php';
}

if ($type == 'sub2'){
include 'recipe_edit.php';
}
