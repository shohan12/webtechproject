<?php

$username =(isset ($_post['username']));
$password = (isset ($_post['password']));

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("mydb");

$result = mysql_query("select * from ownersignup where Username='$username' and Password='$password' ")
                      or die("failed to query database".mysql_error());
$row=mysql_fetch_array($result);
    if ($row["username"] == $username && $row["password"] == $password ) {
	echo"login success!!!welcome".$row['Username'];
	
	
}
else{
	echo"failed to login";
}
?>