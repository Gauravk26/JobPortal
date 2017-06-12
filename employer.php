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
            <li ><a href="jobseeker.php">Jobseeker</a></li>
            <li class="active"><a href="#">Employer</a></li>
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

$query_select_job = "select * from employers";
$result_select_job = mysql_query($query_select_job, $conn);

while ($statement_select_job = mysql_fetch_assoc($result_select_job)) {
    $company_job= $statement_select_job["CompanyName"];
    $email_job  = $statement_select_job["Email"];
    $username_job = $statement_select_job["Username"];
    $skill_1_emp = $statement_select_job["Skill_1"];
    $skill_2_emp = $statement_select_job["Skill_2"];
    $skill_3_emp = $statement_select_job["Skill_3"];
    $loc_job = $statement_select_job["Location"];
    $off_ctc_job = $statement_select_job["Offered_ctc"];
    $off_desg = $statement_select_job["Designation"];

 echo '<div class="container edit-5">';
 echo  '<div class="panel panel-default">';
 echo  '<div class="panel-heading"> 
<div class ="row">
   <div class = "col-md-6"><b>'.$company_job.'</b>-<i>'.$off_desg.'</i></div>

<div class= "col-md-3 col-md-offset-3 text-center">
 <a href="mailto:'.$email_job.'" class="btn btn-info" role="button">APPLY</a>

</div>



</div>

 </div>';
 echo  '<div class="panel-body">
   <div class = "row">
   <div class ="col-md-4">
 <b>Prefered Skills</b>: '.$skill_1_emp.','.$skill_2_emp.','.$skill_3_emp.'
</div>

<div class ="col-md-4">
 <b>Location</b>: '.$loc_job.'
</div>

<div class ="col-md-4">
 <b>Ctc offered</b>: '.$off_ctc_job.'
</div>

</div>
 </div>';
 echo  '</div>';
 echo   '</div>';


}

?>

</body>

