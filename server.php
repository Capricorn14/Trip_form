<?php
session_start();

$username   = "";
$email      = "";
$rollno     = "";
$phoneno    = "";
$branch     = "";
$errors     = array();
$sem        = 
$db = mysqli_connect('localhost', 'root', '', 'registration form');

if(isset($_POST['submit'])) {
  $username =  $_POST['username'];
  $branch =  $_POST['branch'];
  $sem =  $_POST['Sem'];
  $rollno =  $_POST['rollno'];	
  $phoneno =  $_POST['phoneno'];
  $email =  $_POST['email'];

  $rollno = $_POST ["rollno"];  
	if (!preg_match ("/^[0-9]*$/", $rollno) ){  
   	    $ErrMsg = "Only numeric value is allowed.";  
    	    echo $ErrMsg;  
	}   

  $phoneno = $_POST ["phoneno"];  
	if (!preg_match ("/^[0-9]*$/", $phoneno) ){  
	    $ErrMsg = "Only numeric value is allowed.";  
	    echo $ErrMsg;  
	} 


	$query = "INSERT INTO register (username, branch, Sem, rollno, phoneno, email) VALUES ('$username', '$branch',  '$sem', '$rollno', '$phoneno', '$email')";
	$query_run = mysqli_query($db, $query);

	if($query_run)
	{
		$_SESSION['status'] = "Registered Successfully";
		header("location: index.php");
	}
	
}