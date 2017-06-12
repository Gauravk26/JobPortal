<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
      <link href="css/bootstrap.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">

   </head>
   
   <body>
   <nav  class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jobism</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.html">Home</a></li>
            <li class="active"><a href="#">Jobseeker</a></li>
            <li><a href="employer.php">Employer</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="signup.html">Sign Up</a></li>
          </ul>
           	<form class="navbar-form navbar-right" method="post" action="login.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="username_login">
          <input type="Password" class="form-control" placeholder="Password" name="password_login">
        </div>
        <button type="submit" class="btn btn-default">Login</button>

      </form>
		</div>
	  </div>
	</nav>

<?php

// Create connection
$conn = mysql_connect("localhost","root","");

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully"."<br>";
$db_selected = mysql_select_db('portal',$conn);
if (!$db_selected){
	die("Unable to select database");
}
// echo "Database connected successfully"."<br>";

$query_select = "select * from employees";
$result_select = mysql_query($query_select, $conn);

while ($statement_select = mysql_fetch_assoc($result_select)) {
    $name_emp= $statement_select["Name"];
    $email_emp  = $statement_select["Email"];
    $curr_desg_emp = $statement_select["Curr_desg"];
    $skill_1_emp = $statement_select["skills_1"];
    $skill_2_emp = $statement_select["skills_2"];
    $skill_3_emp = $statement_select["skills_3"];
    $des_loc_emp = $statement_select["desired_location"];
    $des_ctc_emp = $statement_select["desired_ctc"];

//code for front end

}

?>

</body>

