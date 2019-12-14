<?php 
	include('db_con.php');
	$show = mysqli_query($conn,"SELECT *  FROM medilist");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Your Medicines</title>
	<style type="text/css">
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
<table class="card" style="font-size:30px">
	<tr style="color: blue">
			<td>MEDICINE NAME</td>
			<td>MEDICINE TYPE</td>
			<td>PRICE</td>
			<td>EDIT</td>
			<td>DELETE</td>
	</tr>
    <?php 
		while($row= mysqli_fetch_array($show))
		{
	?>
    <tr>
        <td><?php echo $row['m_name']; ?></td>
        <td><?php echo $row['m_type']; ?></td>
        <td><?php echo $row['price']; ?></td>
         <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>

    <?php 
		}
	?>
</table>
<div style="color: white">
  <button style="font-size:20px;"><a href="dashboard.php">BACK TO DASHBOARD</a></button>

</div>
 
</body>
</html>
