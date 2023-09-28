<?php include 'recipes_ingredients.php';?>
<div class="container">

<div class="row main" id="recipes">
<h1>
<?php
$type = filter_input(INPUT_GET,'type'); 

$username = $_SESSION['username'];
echo "<p>Hello $username!</p><br>";
?>
</h1>  
<hr>

<?php
if ($type != 'added'){
echo "<p>Recipe 1 <br></p><p>This recipe contains $recipeone</p>";
echo "<a href='index.php?type=sub1'>Make Substitution</a></p>";

echo "<p>Recipe 2 <br></p><p>This recipe contains $recipetwo</p>";
echo "<a href='index.php?type=sub2'>Make Substitution</a></p>";
}
elseif ($type == 'added'){
echo "<p>Recipe 1 <br></p><p>This recipe contains $recipeone</p>";
echo "<a href='index.php?type=sub1'>Make Substitution</a></p>";

echo "<p>Recipe 2 <br></p><p>This recipe contains $recipetwo</p>";
echo "<a href='index.php?type=sub2'>Make Substitution</a></p>";

$recipethree=$_SESSION['recipe_three'];
echo "<p>Recipe 3 <br></p><p>This recipe contains $recipethree</p>";
echo "<a href='index.php?type=sub3'>Make Substitution</a></p>";
}

echo "<p><a href='index.php?type=add'>Add recipe</a></p>";
?>
</div>

<!--closing container div on line 4 -->
</div>

<?php include '../view/footer.php';?>