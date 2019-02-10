<?php
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$sz=$_FILES['fileToUpload']['size'];
move_uploaded_file($s,"tenant/".$n);

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//print_r($_REQUEST);


if(strlen($_REQUEST["FirstName"])>0 && strlen($_REQUEST["LastName"])>0 && strlen($_REQUEST["UserName"])>0 && strlen($_REQUEST["gender"])>0 && strlen($_REQUEST["date"])>0 && strlen($_REQUEST["contact_no"])>0 && strlen($_REQUEST["Address"])>0 && strlen($_REQUEST["NID"])>0 && strlen($_REQUEST["EmailId"])>0 && strlen($_REQUEST["Password"])>0 &&  strlen($_REQUEST["confirm_password"]) && isset($_FILES['fileToUpload'])){
	if(strlen($_REQUEST['contact_no'])==11){
	if ((strpos ($_REQUEST['EmailId'], '@') !== false) && (strpos ($_REQUEST['EmailId'], '.') !==false)){	
		if($_REQUEST['Password'] == $_REQUEST['confirm_password']){

	
	$sql="INSERT INTO rentersignup VALUES (NULL,'".$_REQUEST['FirstName']."','".$_REQUEST['LastName']."','".$_REQUEST['UserName']."','".$_REQUEST['gender']."','".$_REQUEST['date']."','".$_REQUEST['contact_no']."','".$_REQUEST['Address']."','".$_REQUEST['NID']."','".$_REQUEST['EmailId']."','".$_REQUEST['Password']."','".$_REQUEST['confirm_password']."','images/".$n."',now())";
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