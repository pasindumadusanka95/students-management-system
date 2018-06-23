<?php
   include("dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($dbconnect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbconnect,$_POST['password']); 
      
      $sql = "SELECT id FROM user WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($dbconnect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
		 if($myusername=="admin"){
		 	    header("location: AdminHpmePage.php");
		 }
		 else
		 {
		 	 header("location: StudentHomePage.php");
		 }
         
     
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "white">
	
      <div align = "center" style="margin-top: 150px">
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
            <div class="w3-container w3-blue">
  <h2>Login</h2>
</div>
				
            <div style = "margin:30px">
               
               <form class="w3-container" action = "" method = "post">
                  <label class="w3-text-blue">UserName  :</label><input class="w3-input" type = "text" name = "username"  required style="width: 300px;margin-left: 5px"/><br /><br />
                  <label class="w3-text-blue">Password  :</label><input class="w3-input" type = "password" name = "password"  required style="width: 300px;margin-left: 5px"/><br/><br />
                  <input type = "submit" class="w3-button w3-blue" value = " Login "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>