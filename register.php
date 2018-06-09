<?php
try
{
	$conn =new \PDO("mysql:host='localhost';dbname='placement','root',''");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare("INSERT INTO student(rollno,name,password,email,phone,placement_status)VALUES(:rollno,:name,:password,:email,:phone,:placement_status)");
	$stmt->bindParam(':rollno',$rollno);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':password',$password);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':phone',$phone);
	$stmt->bindParam(':placement',$placement_status);

	$rollno ="123";
	$name="sibi";
	$password="1234";
	$email="abc@gmail.com";
	$phone="1234567890";
	$placement_status="no";

	$stmt->execute();
	
}
catch(PDOException $e)
{
	echo "Error:".$e->getMessage();
}
?>