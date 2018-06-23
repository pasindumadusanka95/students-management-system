<!DOCTYPE html>	
<html lang="en">
<title>
</title>

<head>
	 <title>Home Page</title>
      <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
	
	
	.ma{
		position:absolute;left:60px;top:20px;
	}
	.hdr{ width: 350px; height: 90px; float:left; text-align:center;}

	a.two:link {color:#009999 ;text-decoration:none;font-size:18px;font-family:sans-serif}
	a.two:visited {color:#00FFFF ;text-decoration:none}
	a.two:hover {color:blue;background-color:white;border-radius:5px; }
	

	
	.po{position:absolute;top:125px;left:90px;}
	
	
				body{
	background-attachment:fixed;
	background-image:url("img/k.jpg");
	background-repeat:no-repeat;
	background-size:100% 220%;
     }			
	
	.slide{position:absolute;left:200px;top:200px;}
	.search{position:absolute;right:10px;top:10px;}
	
	
h2.sansserif{
		font-family:sans-serif;
		color:white;
		
	    }
	
	
	
	</style>
	
	<script type="text/javascript">

var image1=new Image();
image1.src="img/eight.jpg";
var image2=new Image();
image2.src="img/work1.jpg";
var image3=new Image();
image3.src="img/home.png";
var image4=new Image();
image4.src="img/five.jpg";
var image5=new Image();
image5.src="img/hero15.jpg";
</script>
	
	
	
	
	
	
	
	
	
	
</head>

<body>

	
	
	
	<nav>
	<div class="po">
	
	<div class="hdr">
	<a class="two" href="">News</a>
	</div>
	<div class="hdr">
	<a class="two" href="">About Us </a>
	</div>
	<div class="hdr">
	<a class="two" href="">Contact us</a>
	</div>
	
	
	</div>
	</nav>
	
	
	
	
	
	
	<div class="slide">
<table border="2">
<img src="1 (2).jpg" name="slide" width="900" height"600" >
</table>
</div>
<script type="text/javascript">

var step=1;
function slideit ()
 {
document.images.slide.src=eval("image"+step+".src");
if(step<5)
step++;
else
step=1;
setTimeout("slideit()",5000);
}
slideit();
</script>
	
<div class="search" style="margin-top: 20px">
<table>
	<tr>
		 <h2 style="color: black;font-size: 20px"><button class="w3-button w3-green" onclick="window.location.href='Login.php'">Login</button><a></a><button style="margin-left: 20px" class="w3-button w3-green"  onclick="window.location.href='signup.php'">Sign up</button></h2>
		 
	</tr>
	
</table>

</div>	
	
<div class="ma">
	<table>
		<tr><td><a  href="#"><img src="img/logo.jpg" width=80px height=90px></a></td>
			<td><h2 class="sansserif" style="margin-left: 40px;">PMS Computer Diploma Institute </h2></td>
			</tr>
	</table>
	</div>
	

	
	
</body>	
</html>