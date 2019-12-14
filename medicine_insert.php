<?php
include('db_con.php');

$m_name= $_POST['m_name'];
$m_type= $_POST['m_type'];
$price= $_POST['price'];
$shop= $_POST['shop'];
$location= $_POST['location'];

$sql = "INSERT INTO medilist
VALUES (NULL,'$m_name', '$m_type', '$price', '$shop', '$location')";

if (mysqli_query($conn, $sql)) {
    header("location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div> <a href="medicines.php">ADD ANOTHER</a>
</div>
<div> <a href="dashboard.html">BACK TO DASHBOARD</a>
</div>
