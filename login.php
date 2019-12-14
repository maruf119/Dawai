<?php
   include("db_con.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $user = mysqli_real_escape_string($conn,$_POST['user']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      $sql = "SELECT id FROM log_in WHERE user = '$user' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {

         header("location: dashboard.php");
      }else {
         echo '<script>alert("You have given a wrong username or passowrd")</script>';
                echo '<script>window.location="login.php"</script>';
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
input[type = "text"], input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 70%;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "text"]:focus {
  width: 80%;
  border-color: #2ecc71;
}
input[type = "password"]:focus {
  width: 80%;
  border-color: #2ecc71;
}

input[type = "submit"]{
  border:0;
  width: 60%;
  background: #3498db;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: white;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  background-color: #FFFFFF;
  color:#3383FF;
  width: 99%;
}
.container {
  border-radius: 10px;
  background-color: #EAECEE;
  padding: 30px;
  padding-top: 50px;
  margin-left: 400px;
  width: 40%;
  height:350px;
}

      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
     <div class="card1">
   <h1 align="center">DASHBOARD LOGIN</h1>
    </div>
               <br>
                <br>
                <br>
                <br>
                <div class="container">
               <form method = "post" >
                <input type = "text" name = "user" style="font-size:16px" placeholder="Enter Your User Name" required="" />  <br>
                <input type = "password" name = "password" style="font-size:16px" placeholder="Enter Your Password"  required="" /> <br>
                  <input type = "submit" value = " Submit" style="font-size:16px"/><br />
               </form>
            </div>
					
        

   </body>
</html>