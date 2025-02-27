<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

	session_start();
	include 'includes/conn.php';

	if(isset($_POST['register'])){
        $fullname=$_POST['fullname'];
        $aadhar=$_POST['aadhar'];
        $dob=$_POST['dob'];
        $voter_id=$_POST['voters_id'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$filename);	
		}
	

		$sql = "INSERT INTO voters (fullname, dob, aadhar,voters_id,password,photo) VALUES ('$fullname', '$dob', '$aadhar', '$voter_id', '$password','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: login_form.php');

?>