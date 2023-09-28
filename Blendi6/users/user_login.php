<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>




<!--Navigation Bar below -->
<?php include '../view/navbarlogin.php';?>

<!-- Carousel Experiment Below --> 
<?php include '../view/carousel.php';?>


<div id="login"></div>

<!-- Container for the login input --> 
<div class="container">
    <div class="row">
        <div class="main-login main-center">
            <?php include '../view/modal.php';?>
        </div>
    <br>
        
    
        <!--This echo's the alerts onto the page if there's any erroneous data --> 
        <!--                 
        <div id="message" class="bg-danger">
        <?php //echo $message;?>
        </div>  
        -->
     
<!--closes container --> 
</div>
 <?php include '../view/footer.php'?>
 