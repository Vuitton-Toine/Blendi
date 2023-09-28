<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarHCP.php';?>
<?php include '../model/patients_db.php';?>

<div class="container">
    <div class="row main">
        <h1>Edit Patient</h1>
    </div>
<hr>    
<?php
    if (isset($_GET['leo'])){
        $table= getPatientInfo('leo');
        echo "$table";
        include '../view/footer.php';
        exit();
    }

    if (isset($_GET['mark'])){
       $table= getPatientInfo('mark');
        echo $table;
        include '../view/footer.php';
        exit();
    }

    if (isset($_GET['sara'])){
        $table= getPatientInfo('mark');
        echo $table;
        include '../view/footer.php';
        exit();
    }
    else{
    header('Location: patients_list.php');
    exit();
    }
?>