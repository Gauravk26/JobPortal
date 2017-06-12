<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username_login']) || empty($_POST['password_login'])) {
$error = "Username or Password is invalid";
header("location: index.html");
}
else
{
// Define $username and $password
$username=$_POST['username_login'];
$password=$_POST['password_login'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("portal", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from login where password='$password' AND username='$username'";
$result = mysql_query($query, $connection);
$rows = mysql_num_rows($result);

while ($statement = mysql_fetch_assoc($result)) {
    $typeof= $statement["Type"];
}
echo $typeof;
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
	if($typeof==1){
		header("location: welcome.php");
	}else{
		header("locaion: welcome1.php");
	} // Redirecting To Other Page
}else {
$error = "Username or Password is invalid";
header("location: index.html");
}
mysql_close($connection); // Closing Connection
}
}
?>