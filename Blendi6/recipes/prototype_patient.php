
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
#patien_info	{
background-color: white;
min-height: 100px;
min-width: 100px;
width: 75%; /* 600/800 */
text-align: center;
margin: auto;
}
p, a, h3, h4 {
    text-align: center;
}
img {
    display: block;
    margin: auto;
    width: 30%;
}
#recipe_a	{
background-color: white;
min-height: 100px;
min-width: 100px;
width: 75%; /* 600/800 */
text-align: center;
}
#recipe_b	{
background-color: grey;
min-height: 100px;
min-width: 100px;
width: 75%; /* 600/800 */
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
	<h1>Patient Name</h1>
</div>
<div id="patients">
    <h3>Last recipes</h3>
    <h4>Recipe Name</h4>
    <p>Recipe Description</p><br>
    <p> I substituted carrots for sweet potato</p>
    <input style="height: 100px;" ><br>
    <input type= "summit" value="Comment"> 
    
</div>
<div id="patient_info">
    <img alt="patient" src="http://localhost/MVC_Files/images/project_headshot.jpg" height="200">  
    <p> Height: </p> 
    <p> Weight: </p>
    <p> Age: </p>
    <p> B-day: </p>
    <br>
    <p> Restrictions include: xyz</p>
    <a href='index.php?restriction'>Add Restrictions</a>
    
    
</div>

<div class="clearfix">
</div>
<div id="footer">
	This is the footer
</div>
</body>
</html>





