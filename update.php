<?php 
  include('db_con.php');
  $id=$_REQUEST['id'];
  $sql = "SELECT * from medilist where id='".$id."'";
  $result = mysqli_query($conn, $sql) or die ( mysqli_error());
  $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Medicines</title>
	<style type="text/css">
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

input[type=submit]:hover {
   background: white;
}
input[type = "number"]{
 background-color: white; 
}
input[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 30%;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "text"]:focus{
  width: 40%;
  border-color: #2ecc71;
}
		.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  background-color: #FFFFFF;
  color:#3383FF;
  width: 99%;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  margin-left: 20px;
  background-color: #FFFFFF;
  color:#3383FF;
  width: 97%;
}
a {
  text-decoration: none;
  color:red;
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
	<div class="card1">
	<h1 align="center">MEDICINES OF YOUR SHOP</h1>
    </div>
    <br><br>
<div class="container">
              <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />

    <input type="text" name="m_name"  value="<?php echo $row['m_name']; ?>"><br />

    <input type="text" name="m_type"  value="<?php echo $row['m_type']; ?>"><br />

    <input type="text" name="price"  value="<?php echo $row['price']; ?>"><br/>

     <input type="submit" name="update" value="Update"/>
 </form>
            </div>
 <button style="font-size:20px;" color="white"><a href="dashboard.html">BACK TO DASHBOARD</a></button>
</body>
</html>
