<?php
	// include database connectivity file

	include_once('config.php');

	if (isset($_POST['username'])) {
		
	    $fullname = $con->real_escape_string($_POST['fullname']);
	    $username = $con->real_escape_string($_POST['username']);
	    $email 	  = $con->real_escape_string($_POST['email']);
	    $password = $con->real_escape_string(md5($_POST['password']));

	    $query  = "INSERT INTO students (fullname,username,email,password) 
	    	      VALUES('$fullname','$username','$email','$password')";
	    $result = $con->query($query);

            if ($result) {
	         echo json_encode(array('error'=>'0', 'message'=>'Registration successfully Login'));
	    }else{
	        echo json_encode(array('error'=>'1', 'message'=>'Registration Failed try again'));
	    }
	}

?>