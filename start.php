<?php
    session_start();
include('db_con.php');

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>alert("Added to Cart")</script>';
                echo '<script>window.location="start.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="start.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dawai.com</title>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	  
<style>
  @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
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
  background: #5BCCD4;
}

input[type=submit]:hover {
   background: #5BCCD4;
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
  width: 50%;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "text"]:focus{
  width: 90%;
  border-color: #2ecc71;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  padding: 20px;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  height: 220px;
  margin: 5px;
  padding: 20px;
  color: #177dac;
  text-align: center;
  font-family: arial;
  border-radius: 4px;
}


#card button:hover {
  opacity: 0.7;
}


#slider {
  overflow: hidden;
}
#slider figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  animation: 10s slider infinite;
}
#slider figure img {
  float: left;
  width: 20%;
  height: 550px;
}

@keyframes slider {
  0% {
    left: 0;
  }
  20% {
    left: 0;
  }
  25% {
    left: -100%;
  }
  45% {
    left: -100%;
  }
  50% {
    left: -200%;
  }
  70% {
    left: -200%;
  }
  75% {
    left: -300%;
  }
  95% {
    left: -300%;
  }
  100% {
    left: -400%;
  }
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="start.php">Home</a>
  <a href="about_us.html">About</a>
  <a href="Cart.php">Your cart</a>
  <a href="login.php">Login</a>
</div>
<br>
<div id="slider">
    <figure>
      <img src="img/6.jpg">
      <img src="img/7.jpg">
      <img src="img/10.jpg">
      <img src="img/9.jpg">
      <img src="img/8.jpg">
    </figure>
  </div>
<br>
<br>
<br>
<form action="" method="POST">
  <input type="text" name="m_name" style="font-size:20px" placeholder="Search a medicine...">
  <input type="SUBMIT" name="search" style="font-size:20px">
</form>
<?php
 if(isset($_POST['search']))
 {
	 $m_name= $_POST['m_name'];
	 
	 $query1="select shop from medilist where m_name='$m_name'";
	 $query_run = mysqli_query($conn,$query1); 
	 
	 while($row = mysqli_fetch_array($query_run))
	 {
		 ?>
		 <form action="" method="POST">
      
		 <h2 align="center"><?php echo $row['shop'];  ?></h2>
		 </form> 
		 <?php
	 }
 }
?>
<br><br>
<div class="container">
        <h1 align="center">ORDER ONLINE</h1>
        <br><br>
        <?php
            $query = "SELECT * FROM medilist ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product" id="card" style="background-color: #EAECEE">
                                <h3 align="center" class="text-info"><?php echo $row["m_name"]; ?></h3>
                                <h4 align="center" class="text-danger"><?php echo $row["price"]; ?> Taka</h4>
                                <input type="number" name="quantity" class="form-control">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["m_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" class="btn btn-success" value="Add to Cart" style="width: 90%">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>


</body>
</html>