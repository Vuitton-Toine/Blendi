<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarPOG.php';?>
<?php include 'recipes_ingredients.php';?>
<?php include 'index.php';?>

<?php
$username = $_SESSION['username'];
$appointment = "12/17/17";
$liquidsub = $_POST["liquid_sub"];
$proteinsub = $_POST["protein_sub"];
$vitaminasub = $_POST["vitamina_sub"];
$vitamincsub = $_POST["vitaminc_sub"];
$potassiumsub = $_POST["potassium_sub"];
$starchsub = $_POST["starch_sub"];
$fatsub = $_POST["fat_sub"];
?>
<div class="container">
<p><?php echo "<h2>Thank you for your submission $username!</h2>"?><br>
    <?php echo "<h3>You submitted the following substitions:</h3>"?><br></P>
<p><?php echo "Liquid: $liquidsub"?><br>
<?php echo "Protein: $proteinsub"?><br>
<?php echo "Vitamin A: $vitaminasub"?><br>
<?php echo "Vitamin C: $vitamincsub"?><br>
<?php echo "Potassium: $potassiumsub"?><br>  
<?php echo "Starches: $starchsub"?><br>
<?php echo "Fat: $fatsub"?><br></p>
<?php echo "Your dietician will contact you with any questions or suggestions if necessary!"?><br>
<?php echo "Otherwise your next appointment is $appointment"?><br>
<a href ="../pogdashboard/index.php">Return to Recipe List</a>
<form name='logout' action='../index.php'>
<button id = "button" type="submit" value = "Go" name="logout">Logout</button>
</form>
</div>


<?php include '../view/footer.php';?>
