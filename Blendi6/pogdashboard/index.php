<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarPOG.php';?>


<?php
session_start();
$type = filter_input(INPUT_GET,'type');   
$username = $_SESSION['username'];

    if ($type == 'sub1'){
        include '../recipes/recipe_edit.php';
        exit();
    }

    if ($type == 'sub2'){
        include '../recipes/recipe_edit.php';
        exit();
    }
    
    if ($type == 'sub3'){
        include '../recipes/recipe_edit.php';
        exit();
}

if ($type == 'add'){
        include '../recipes/recipe_add.php';
        exit();
}
    
include '../recipes/recipes_request.php';
exit();
?>

<?php include '../view/footer.php';?>