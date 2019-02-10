<?php
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$sz=$_FILES['fileToUpload']['size'];
move_uploaded_file($s,"images/".$n);

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//print_r($_REQUEST);
if(strlen($_REQUEST["firstname"])>0 && strlen($_REQUEST["lastname"])>0  && strlen($_REQUEST["username"])>0 && strlen($_REQUEST["gender"])>0 && strlen($_REQUEST["date"])>0 && strlen($_REQUEST["nid"])>0 && strlen($_REQUEST["Phone"])>0  && strlen($_REQUEST["EmailId"])>0  && strlen($_REQUEST["Password"])>0 && strlen($_REQUEST["ConfirmPassword"]) && strlen($_REQUEST["address"])>0  && isset($_FILES['fileToUpload']) ){
	
	
	if(strlen($_REQUEST['Phone'])==11){
	if ((strpos ($_REQUEST['EmailId'], '@') !== false) && (strpos ($_REQUEST['EmailId'], '.') !==false)){	
		if($_REQUEST['Password'] == $_REQUEST['ConfirmPassword']){
	$sql="INSERT INTO ownersignup1 VALUES (NULL,'".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$_REQUEST['username']."','".$_REQUEST['gender']."','".$_REQUEST['date']."','".$_REQUEST['nid']."','".$_REQUEST['Phone']."','".$_REQUEST['EmailId']."','".$_REQUEST['Password']."','".$_REQUEST['ConfirmPassword']."','".$_REQUEST['address']."','images/".$n."',now())";
	echo $sql;

	if(mysqli_query($conn, $sql) or die(mysqli_error($conn))){
		echo "New records updated successfully";
	}
	
		}
else{
	echo "password dont match";
}
	}
else{
	echo "email is incorrect";
	}
	}
else{
	echo "phone number not valid";
}
	}
else{
	echo "Invalid parameter !";
}


?>