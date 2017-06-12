<html>
<body>

<?php
// Create connection
$conn = mysql_connect("localhost","root","");

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"."<br>";

$db_selected = mysql_select_db('portal',$conn);
if (!$db_selected){
	die("Unable to select database");
}
echo "Database connected successfully"."<br>";

//retriving the data that should be added to database
$company = $_POST["company"];
$username = $_POST["username_emp"];
$email = $_POST["email_emp"];
$password = $_POST["password_emp"];

//insert query
$insert_sql = "INSERT INTO employers (CompanyName, Username, Email, Password) VALUES('".$company."', '".$username."','".$email."','".$password."')";
$insert_sql_login = "INSERT INTO login (username, password, type) VALUES('$username','$password', 1)";
$result = mysql_query($insert_sql,$conn);
$result_login = mysql_query($insert_sql_login,$conn);

mysql_close();

?>

</body>
</html>
