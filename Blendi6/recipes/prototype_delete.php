<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
width: 90%; /* original 800px */
min-height: 600px;
font-size: 20px;
}
#header	{
background-color: blue;
height: 100px;
width: 100%;  /* 800 / 800 */
}
#recipe_a	{
background-color: white;
min-height: 100px;
min-width: 100px;
width: 75%; /* 600/800 */
float: right;
text-align: center;
}
#recipe_b	{
background-color: grey;
min-height: 100px;
min-width: 100px;
width: 75%; /* 600/800 */
float: right;
text-align: center;
}
#patients	{
background-color: red;
min-height: 450px;  
width: 25%;  /* 600 / 800 */
float: left;
min-width: 200px;
text-align: center;
}
#maincontent	{
border-width: 1px;
border-color:black;
border-style:solid;
width: 65%;  /*390 / 600 = 65%*/
min-width: 100px;
margin: 5px 0px 0px 0px;
float:left;
}
#subcontent	{
background-color: #FFFFFF;
min-height: 200px;  
width: 32.333333%;  /* 200 / 600 = 33.3333333% */
margin: 5px;
float: right;
min-width: 100px;
}
.clearfix {
   visibility: hidden;
   display: block;
   height: 0;
   clear: both;
}
#footer	{
background-color: #FFCC99;
height: 100px;
width: 100%; /*was 800*/
}

</style>
</head>
<body>
<div id="header">
	<h1>HCP Dashboard</h1>
</div>
<div id="patients">
    <?php
        for ($x=1; $x<=3; $x++){
            echo "<a href='index.php?patient'>Patient $x</a> <input type='radio'>Select</input><br>";
        }?> 
    <input type="submit" value="Recommend Recipe to Patient">
</div>
<div id="recipes">
    <?php
        for ($x=1; $x<=3; $x++){
            if ($x%2==0){
                echo "<div id='recipe_a'>";
                echo "<p>Recipe $x <br>This resipe contains xyz</p>"
                        . "<input type='radio'>Select</input><br>";
                echo "<a href='index.php?delete'>Delete      </a>";
                echo "<a href='index.php?edit'>     Edit</a>";
                echo "</div>";
            } else {
                echo "<div id='recipe_b'>";
                echo "<p>Recipe $x <br>This resipe contains xyz</p>"
                        . "<input type='radio'>Select</input><br>";
                echo "<a href='index.php?delete'>Delete</a>";
                echo "<a href='index.php?edit'>     Edit</a>";
                echo "</div>";
            }
    }?>   
</div>

<div class="clearfix">
</div>
<div id="footer">
	This is the footer
</div>
</body>
</html>




