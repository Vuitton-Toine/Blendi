<form action ="../recipes/recipe_confirm.php" method ="post">
<?php include '../common/configurations.php';?>
<?php include 'recipes_ingredients.php';?>
<div class="container">
    <div class="row main">
        <h1>Recipe Substitution</h1>
    </div>
<hr>

<p><?php
$username = $_SESSION['username'];
if ($type == 'sub1'){ ;
echo "<h2><p>$username -  Recipe One</p></h2><br>";
?>
<p><?php echo $recipeliquid ?>;<br>
<select id='liquid_sub' name='liquid_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of cream'>1/8 cup of cream</option>  
</select><br></p>

<p><?php echo $recipeprotein ?>;<br>
<select id='protein_sub' name='protein_sub'>
<option value='No substitution'>No substitution</option> 
<option value='6 oz of chicken'>6 oz of chicken</option>  
</select><br></p>

<p><?php echo $recipevitamina ?>;<br>
<select id='vitamina_sub' name='vitamina_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/4 cup of sweet potatoes'>1/4 cup of sweet potatoes</option>  
</select><br></p>

<p><?php echo $recipevitaminc ?>;<br>
<select id='vitaminc_sub' name='vitaminc_sub'>
<option value='No substitution'>No substitution</option> 
<option value='3/4 cup of apples'>3/4 cup of apples</option>  
</select><br></p>

<p><?php echo $recipepotassium ?>;<br>
<select id='potassium_sub' name='potassium_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1 kumquat'>1 kumquat</option>  
</select><br></p>

<p><?php echo $recipestarches ?>;<br>
<select id='starch_sub' name='starch_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/2 cup of pasta'>1/2 cup of pasta</option>  
</select><br></p>

<p><?php echo $recipefat ?>;<br>
<select id='fat_sub' name='fat_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of margarine'>1/8 cup of margarine</option>  
</select><br></p>
<input type="submit" value="Submit Substitution">
</form>

<?php }

if ($type == "sub2"){ 
echo "<h2><p>$username -  Recipe Two</p></h2><br>"?>
<p><?php echo $recipeliquidtwo ?>;<br>
<select id='liquid_sub' name='liquid_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of cream'>1/8 cup of cream</option> 
</select><br></p>

<p><?php echo $recipeproteintwo ?>;<br>
<select id='protein_sub' name='protein_sub'>
<option value='No substitution'>No substitution</option> 
<option value='6 oz of chicken'>6 oz of chicken</option>  
</select><br></p>

<p><?php echo $recipevitaminatwo ?>;<br>
<select id='vitamina_sub' name='vitamina_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/4 cup of sweet potatoes'>1/4 cup of sweet potatoes</option> 
</select><br></p>

<p><?php echo $recipevitaminctwo ?>;<br>
<select id='vitaminc_sub' name='vitaminc_sub'>
<option value='No substitution'>No substitution</option> 
<option value='3/4 cup of apples'>3/4 cup of apples</option> 
</select><br></p>

<p><?php echo $recipepotassiumtwo ?>;<br>
<select id='potassium_sub' name='potassium_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1 kumquat'>1 kumquat</option>   
</select><br></p>

<p><?php echo $recipestarchestwo ?>;<br>
<select id='starch_sub' name='starch_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/2 cup of pasta'>1/2 cup of pasta</option> 
</select><br></p>

<p><?php echo $recipefattwo ?>;<br>
<select id='fat_sub' name='fat_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of margarine'>1/8 cup of margarine</option>  
</select><br></p>
<input type="submit" value="Submit Substitution">
    <?php } "</p>";

if ($type == "sub3"){ 
echo "<h2><p>$username -  Recipe Three</p></h2><br>"?>
<p><?php echo $recipeliquidtwo ?>;<br>
<select id='liquid_sub' name='liquid_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of cream'>1/8 cup of cream</option> 
</select><br></p>

<p><?php echo $recipeproteintwo ?>;<br>
<select id='protein_sub' name='protein_sub'>
<option value='No substitution'>No substitution</option> 
<option value='6 oz of chicken'>6 oz of chicken</option>  
</select><br></p>

<p><?php echo $recipevitaminatwo ?>;<br>
<select id='vitamina_sub' name='vitamina_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/4 cup of sweet potatoes'>1/4 cup of sweet potatoes</option> 
</select><br></p>

<p><?php echo $recipevitaminctwo ?>;<br>
<select id='vitaminc_sub' name='vitaminc_sub'>
<option value='No substitution'>No substitution</option> 
<option value='3/4 cup of apples'>3/4 cup of apples</option> 
</select><br></p>

<p><?php echo $recipepotassiumtwo ?>;<br>
<select id='potassium_sub' name='potassium_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1 kumquat'>1 kumquat</option>   
</select><br></p>

<p><?php echo $recipestarchestwo ?>;<br>
<select id='starch_sub' name='starch_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/2 cup of pasta'>1/2 cup of pasta</option> 
</select><br></p>

<p><?php echo $recipefattwo ?>;<br>
<select id='fat_sub' name='fat_sub'>
<option value='No substitution'>No substitution</option> 
<option value='1/8 cup of margarine'>1/8 cup of margarine</option>  
</select><br></p>
<input type="submit" value="Submit Substitution">
    <?php } ?></p>

<form name='logout' action='../index.php'>
<button id = "button" type="submit" value = "Go" name="logout">Logout</button>
</form>


</div>
<?php include '../view/footer.php';?>
