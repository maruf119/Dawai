<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.column {
  float: left;
  width: 400%;
  padding: 0 10px;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: Left;
  background-color: #FFFFFF;
  color:#3383FF;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 5px;
  background-color: #FFFFFF;
  color:#3383FF;
  width: 99%;
}
input[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 90%;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 110%;
  border-color: #2ecc71;
}

input[type = "submit"]{
  border:0;
  width: 90%;
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

button {
width: 160%;
  background-color: dodgerblue;
  color: white;
  padding: 20px;
  margin: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;

}

input[type=submit]:hover {
  background-color: #3383FF;
}

div {
  border-radius: 5px;
  
  width: 40%;
  padding: 50px;
  margin: 8px ;
  float: left;
}
a {
  text-decoration: none;
  color: white;
} 
</style>
</head>
<body>
<div class="card1">
	<h1 align="center">ADD INFORMATION</h1>
    </div>
<br> <br> <br>
<div>

  <form action="medicine_insert.php" method="post" >
    
    <input type="text" id="m_name" name ="m_name" style="font-size:20px" placeholder="Medicine Name">
	
	
    <input type="text" id="m_type" name="m_type" style="font-size:20px" placeholder="Medicine Type">
	

    <input type="text" id="price" name="price" style="font-size:20px" placeholder="Price"> 
	
	<input type="text" id="shop" name="shop" style="font-size:20px" placeholder="Your Shop Name"> 

    <input type="text" id="location" name="location" style="font-size:20px" placeholder="Shop Location">

  
    <input type="SUBMIT" style="font-size:20px">  
	
	</form>  
	</div>                 
	
</body>
</html>               	