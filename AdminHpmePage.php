<?php
   include('session.php');
?>
<!DOCTYPE html>	
<html lang="en">
<title>
</title>

<head>
	<style type="text/css">
	
	
	.ma{
		position:absolute;left:60px;top:20px;
	}
	.hdr{ width: 180px; height: 90px; float:left; text-align:center;}

	a.two:link {color:#009999 ;text-decoration:none;font-size:18px;font-family:sans-serif}
	a.two:visited {color:#00FFFF ;text-decoration:none}
	a.two:hover {color:blue;background-color:white;border-radius:5px; }
	

	
	.po{position:absolute;top:125px;left:40px;}
	
	
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
	<a class="two" href="insertdepartment.php">Departments </a>
	</div>
	<div class="hdr">
	<a class="two" href="insertstudent.php">Students </a>
	</div>
	<div class="hdr">
	<a class="two" href="insertlecture.php">Lecturers</a>
	</div>
	<div class="hdr">
	<a class="two" href="insertmodule.php">Modules </a>
	</div>
	<div class="hdr">
	<a class="two" href="std_performence.php">Student Performence </a>
	</div>
	<div class="hdr">
	<a class="two" href="insertsemester.php">Semesters</a>
	</div>
	<div class="hdr">
	<a class="two" href="insertdiploma.php">Diploma</a>
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
	
<div class="search">
<table>
	<tr><h1 style="color: white;font-size: 16px">Welcome <?php echo $login_session; ?></h1>
		 <h2 style="color: white;font-size: 16px"><a href = "logout.php">Sign Out</a></h2>
	</tr>
	<tr>
		  
		<td><img src="img/search1.png" width=30px height=30px></td><td><input type="text" size="23" value="Search here"/></td>
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