<?php
include "connect.php";

if (isset($_POST["name"]) && 
	isset($_POST["email"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$sql = "INSERT INTO subscribers (s_name,s_email)
	VALUES ('{$name}', '{$email}')";

	if (mysqli_query($conn, $sql)) {
	    echo "Successfully Subscribed";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}else{
	echo "Subscription failed";
}
?>