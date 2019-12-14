<?php
	include('db_con.php');
	$id=$_POST['id'];
	$m_name= $_POST['m_name'];
	$m_type= $_POST['m_type'];
	$price= $_POST['price'];


	$update = "UPDATE `medilist` SET `m_name` = '$m_name', `m_type` = '$m_type', `price` =  `$price`  WHERE `id` = `$id`";
	$result= mysqli_query($conn,$update);
	if ($result) {
		 echo '<script>alert("Updated")</script>';
                echo '<script>window.location="dashboard.php"</script>';
	} else {
		 echo '<script>alert("Updated")</script>';
                echo '<script>window.location="dashboard.php"</script>';
			}
?>