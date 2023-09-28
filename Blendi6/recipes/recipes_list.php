<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarHCP.php';?>
<!-- -->
<div class="container">
    <div class="row main">
            <h1>Recipes</h1>
    </div>
<hr>
    <div class="row" align='center'> 
        <div class='col-sm-3'></div>
        <div class='col-sm-6'>
            <table border='2' class='table table-striped table-hover'>
                <?php
                    for ($x=1; $x<=4; $x++){
                        echo "<tr><th>Recipe $x";
                        echo "<br>";
                        echo "This recipe contains xyz"
                            . "<br>";
                        echo "<a>Delete</a> ";
                        echo "&nbsp";
                        echo "<a>     Edit</a></th></tr>";     
                }?>   
            </table>
        </div>
        <div class='col-sm-3'>
        </div>
    </div>
</div>
<!-- -->
<?php include '../view/footer.php';?>




