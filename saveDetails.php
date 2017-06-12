<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>Details</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">

   
  </head>
<?php include('session.php'); ?>
<body>
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
            <li ><a href="#">Home</a></li>
            <li><a href="#about">Jobseeker</a></li>
            <li><a href="#about">Employer</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="active"><a href="signup.html">Welcome <?php echo $login_session; ?></a></li>
            

          </ul>
           <form class="navbar-form navbar-right" method="post" action="logout.php">
                <button type="submit" class="btn btn-default">Logout</button>

                
      </form>
       </div><!--/.nav-collapse -->
      </div>
    </nav>
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
$company_user = $_POST["company_user"];
$curr_loc = $_POST["cur_loc_user"];
$des_loc = $_POST["des_loc_user"];
$curr_ctc = $_POST["cur_ctc"];
$des_ctc = $_POST["des_ctc"];
$curr_desg = $_POST["cur_desg"];
$des_desg = $_POST["des_desg"];
$skill1 = $_POST["skill_1"];
$skill2 = $_POST["skill_2"];
$skill3 = $_POST["skill_3"];

//insert query
$update_sql = "UPDATE employees 
SET curr_company = '$company_user',
curr_ctc = '$curr_ctc',
curr_desg = '$curr_desg',
curr_location = '$curr_loc',
skills_1 = '$skill1',
skills_2 = '$skill2',
skills_3 = '$skill3',
desired_location = '$des_loc',
desired_ctc = '$des_ctc'
WHERE username='$login_session'";

$result_update = mysql_query($update_sql,$conn);
if($result_update){
  header("location: welcome.php");

}

mysql_close();

?>





</body>
</html>
