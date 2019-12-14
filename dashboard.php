<?php
   include('db_con.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 50%;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 90%;
  border-color: #2ecc71;
}
input[type = "submit"]{
  border:0;
  width: 20%;
  background: #3498db;
  display: block;
  margin: 20px auto;
  text-align: center;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #74EFF7;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  margin-left: 25%;
  background-color: #FFFFFF;
  color:#3383FF;
  width: 50%;
  border-radius: 10px;
}

.flip-box {
float: left;
  width: 24%;
  background-color: transparent;
  height: 200px;
  border: 5px solid #EAECEE;
  perspective: 1000px;
   border-radius: 5px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: white;
  color:dodgerblue ;
  border-radius: 5px;
}

.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateX(180deg);
  border-radius: 5px;
}
.container {
  border-radius: 5px;
  background-color: #EAECEE;
  padding: 20px;
  height:210px;
}
a {
  text-decoration: none;
  color: white;
} 
button {
width: 100%;
  background-color: dodgerblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
</style>
</head>
<body>
<br>
<form action="" method="POST">
  <input type="text" name="m_name" style="font-size:20px" placeholder="Search a medicine...">
  <input type="submit" name="search" style="font-size:20px">
</form>

<?php
 if(isset($_POST['search']))
 {
   $m_name= $_POST['m_name'];
   
   $query1="select m_name,price from medilist where m_name='$m_name'";
   $query_run = mysqli_query($conn,$query1); 
   
   while($row = mysqli_fetch_array($query_run))
   {
     ?>
     <table class="card" style="font-size:30px">
       <tr style="color:black">
         <td>Medicine Name</td>
         <td>Price</td>
       </tr>
       <tr>
         <td><?php echo $row['m_name'];  ?></td>
         <td><?php echo $row['price'];  ?></td>
       </tr>
     </table>
     <?php
   }
 }
?>

<br>
<div class="container">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
		<br> <br> <br> <br>
		<h2>ADD A MEDICINE</h2>
    </div>
    <div class="flip-box-back">
	<br> <br> <br> <br>
      
	  <h2><a href="medicines.php">ADD A MEDICINE</a></h2>
    </div>
	
  </div>
</div>
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
		<br> <br> <br> <br>
      <h2>SHOW ALL MEDICINES</h2>
    </div>
    <div class="flip-box-back">
		<br> <br> <br> <br>
      <h2><a href="show_all.php"> SHOW ALL MEDICINES</a></h2>
    </div>
	
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
		<br> <br> <br> <br>
      <h2>UPDATE A MEDICINE</h2>
    </div>
    <div class="flip-box-back">
		<br> <br> <br> <br>
      <h2 >UPDATE A MEDICINE</h2>
    </div>
	
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
		<br> <br> <br> <br>
      <h2>BILL</h2>
    </div>
    <div class="flip-box-back">
		<br> <br> <br> <br>
      <h2><a href="payment.html">BILL</a></h2>
	  
    </div>
	
  </div>
</div>
</div>
<br>
<br>
<br>
<button style="font-size:20px"><a href="start.php">BACK TO HOMEPAGE</a></button>
<button style="font-size:20px"><a href="logout.php">SIGN OUT</a></button>
</body>
</html>
