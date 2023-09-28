<form action ="../recipes/recipe_add_confirm.php" method ="post">
<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../recipes/recipes_ingredients.php';?>
<?php
$recipethree = '';
$liquid_add_one = '';
$protein_add_one = '';
$vitamina_add_one = '';
$vitaminc_add_one = '';
$potassium_add_one = '';
$starch_add_one = '';
$fat_add_one = '';
$liquid_add_two = '';
$protein_add_two = '';
$vitamina_add_two = '';
$vitaminc_add_two = '';
$potassium_add_two = '';
$starch_add_two = '';
$fat_add_two = '';
?>
<div class="container">
<p><?php
$username = $_SESSION['username'];
echo "<h2><p>$username -  New Recipe</p></h2><br>";
?>
<p><?php echo "Liquid #1 <br>
<select id='liquid_add_one' name='liquid_add_one'>
<option value='1/2 cup of milk'>$recipeliquid</option> 
<option value='1/4 cup of apple juice'>$recipeliquidtwo</option>  
</select><br></p>"?>

<p><?php echo "Liquid #2 <br>
<select id='liquid_add_two' name='liquid_add_two'>
<option value=''>No addition</option>  
<option value='1/2 cup of milk'>$recipeliquid</option> 
<option value='1/4 cup of apple juice'>$recipeliquidtwo</option>  
</select><br></p>"?>

    
<p><?php echo "Protein #1 <br>
<select id='protein_add_one' name='protein_add_one'>
<option value='3 oz of steak'>$recipeprotein</option> 
<option value='4 oz of fish'>$recipeproteintwo</option>  
</select><br></p>"?>

<p><?php echo "Protein #2 <br>
<select id='protein_add_two' name='protein_add_two'>
<option value=''>No addition</option>  
<option value='3 oz of steak'>$recipeprotein</option> 
<option value='4 oz of fish'>$recipeproteintwo</option>  
</select><br></p>"?>

<p><?php echo "Vitamin A #1 <br>
<select id='vitamina_add_one' name='vitamina_add_one'>
<option value='3 carrots'>$recipevitamina</option> 
<option value='3/2 cup of spinach'>$recipevitaminatwo</option>  
</select><br></p>"?>

<p><?php echo "Vitamin A #2 <br>
<select id='vitamina_add_two' name='vitamina_add_two'>
<option value=''>No addition</option> 
<option value='3 carrots'>$recipevitamina</option> 
<option value='3/2 cup of spinach'>$recipevitaminatwo</option>  
</select><br></p>"?>

<p><?php echo "Vitamin C #1 <br>
<select id='vitaminc_add_one' name='vitaminc_add_one'>
<option value='1/2 cup of oranges'>$recipevitaminc</option> 
<option value='1/2 cup of grapes'>$recipevitaminctwo</option>  
</select><br></p>"?>

<p><?php echo "Vitamin A #2 <br>
<select id='vitaminc_add_two' name='vitaminc_add_two'>
<option value=''>No addition</option> 
<option value='1/2 cup of oranges'>$recipevitaminc</option> 
<option value='1/2 cup of oranges'>$recipevitaminctwo</option>  
</select><br></p>"?>    

<p><?php echo "Potassium #1 <br>
<select id='potassium_add_one' name='potassium_add_one'>
<option value='2 bananas'>$recipepotassium</option> 
<option value='A dozen grapes'>$recipepotassiumtwo</option>  
</select><br></p>"?>

<p><?php echo "Potassium #2 <br>
<select id='potassium_add_two' name='potassium_add_two'>
<option value=''>No addition</option> 
<option value='2 bananas'>$recipepotassium</option> 
<option value='A dozen grapes'>$recipepotassiumtwo</option>  
</select><br></p>"?>

<p><?php echo "Starch #1 <br>
<select id='starch_add_one' name='starch_add_one'>
<option value='1 slice of bread'>$recipestarches</option> 
<option value='1/2 cup of yogurt'>$recipestarchestwo</option>  
</select><br></p>"?>

<p><?php echo "Starch #2 <br>
<select id='starch_add_two' name='starch_add_two'>
<option value=''>No addition</option> 
<option value='1 slice of bread'>$recipestarches</option> 
<option value='1/2 cup of yogurt'>$recipestarchestwo</option>  
</select><br></p>"?>    

<p><?php echo "Fat #1 <br>
<select id='fat_add_one' name='fat_add_one'>
<option value='1/4 stick of butter'>$recipefat</option> 
<option value='1/5 cup of oil'>$recipefattwo</option>  
</select><br></p>"?>

<p><?php echo "Fat #2 <br>
<select id='fat_add_two' name='fat_add_two'>
<option value=''>No addition</option> 
<option value='1/4 stick of butter'>$recipefat</option> 
<option value='1/5 cup of oil'>$recipefattwo</option>  
</select><br></p>"?>
    

<input type="submit" value="Submit Substitution">
</form>
</div>
    
<?php include '../view/footer.php';?>