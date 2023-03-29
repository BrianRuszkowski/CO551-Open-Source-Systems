<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	$link = mysqli_connect("localhost", "root", "", "test");
	
	$result = mysqli_query($link, $sql);

	$sql = "SELECT * from test";
	
	$result = mysqli_query($link, $sql);
    
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>