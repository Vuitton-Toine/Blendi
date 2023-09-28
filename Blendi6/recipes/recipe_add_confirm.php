<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarPOG.php';?>
<?php include '../recipes/recipes_ingredients.php';?>
<?php include 'index.php';?>


<?php
$username = $_SESSION['username'];
$appointment = "12/17/17";
$liquid_add_one = $_POST["liquid_add_one"];
$protein_add_one = $_POST["protein_add_one"];
$vitamina_add_one = $_POST["vitamina_add_one"];
$vitaminc_add_one = $_POST["vitaminc_add_one"];
$potassium_add_one = $_POST["potassium_add_one"];
$starch_add_one = $_POST["starch_add_one"];
$fat_add_one = $_POST["fat_add_one"];
$liquid_add_two = $_POST["liquid_add_two"];
$protein_add_two = $_POST["protein_add_two"];
$vitamina_add_two = $_POST["vitamina_add_two"];
$vitaminc_add_two = $_POST["vitaminc_add_two"];
$potassium_add_two = $_POST["potassium_add_two"];
$starch_add_two = $_POST["starch_add_two"];
$fat_add_two = $_POST["fat_add_two"];
?>
<div class="container">
<p><?php echo "<h2>Thank you for your new recipe $username!</h2>"?><br>
    <?php echo "<h3>You submitted the following recipe:</h3>"?><br></p>
 <?php
 $recipethree = $liquid_add_one . ', ' . $liquid_add_two . ', ' . $protein_add_one . ', ' . $protein_add_two . ', ' .
        $vitamina_add_one . ', ' . $vitamina_add_two . ', ' . $vitaminc_add_one . ', ' . $vitaminc_add_two . ', ' .
        $potassium_add_one . ', ' . $potassium_add_two . ', ' . $starch_add_one . ', ' . $starch_add_two . ', ' .
        $fat_add_one . ', ' . $fat_add_two;
   echo "<p>$recipethree</p>";
$_SESSION['recipe_three']=$recipethree;
?>
<?php echo "A reminder that your next appointment is $appointment"?><br>
<a href ="../pogdashboard/index.php?type=added">Return to Recipe List</a>
           


<form name='logout' action='../index.php'>
<button id = "button" type="submit" value = "Go" name="logout">Logout</button>
</form>
</div>

<?php include '../view/footer.php';?>