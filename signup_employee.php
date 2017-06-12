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
    
    if (!$db_selected) {
      die("Unable to select database");
    }
    echo "Database connected successfully"."<br>";

    //retriving the data that should be added to database
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION['login_user']=$username;

    //insert query
    $insert_sql = "INSERT INTO employees (name, username, email, password) VALUES('$name', '$username','$email','$password')";
    echo $insert_sql;
    $insert_sql_login = "INSERT INTO login (username, password, type) VALUES('$username','$password', 2)";
    $result = mysql_query($insert_sql,$conn);
    $result_login = mysql_query($insert_sql_login,$conn);
    if(!$result){
        echo "<br>"."Could not insert data into employees";
    }
    mysql_close();
    include('session.php');

  ?>

 
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
                        <li><a href="#about">Jobseeker</a></li>
                        <li><a href="#about">Employer</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="active"><a href="welcome.php">Welcome <?php echo $login_session; ?></a></li>
                    </ul>

                <form class="navbar-form navbar-right" method="post" action="logout.php">
                <button type="submit" class="btn btn-default">Logout</button>
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

$query_select = "select * from employees where username='$login_session'";
$result_select = mysql_query($query_select, $connection);

while ($statement_select = mysql_fetch_assoc($result_select)) {
    $name_emp= $statement_select["Name"];
    $username_emp = $statement_select["Username"];
    $email_emp  = $statement_select["Email"];
    $curr_comp_emp = $statement_select["Curr_company"];
    $curr_ctc_emp = $statement_select["Curr_ctc"];
    $curr_desg_emp = $statement_select["Curr_desg"];
    $curr_loc_emp = $statement_select["Curr_location"];
    // $profile_pic = $statement_select["profile_pic"];
    // $resume = $statement_select["profile_pic"];
    $skill_1_emp = $statement_select["skills_1"];
    $skill_2_emp = $statement_select["skills_2"];
    $skill_3_emp = $statement_select["skills_2"];
    $des_loc_emp = $statement_select["desired_location"];
    $des_ctc_emp = $statement_select["desired_ctc"];

}

?>
<div class="container edit-2">
    <div class ="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Name</h3>
                </div>
                <div class="panel-body">
                    <?php echo $name_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Username</h3>
                </div>
                <div class="panel-body">
                    <?php echo $username_emp; ?>
                </div>
            </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Current Designation</h3>
                </div>
                <div class="panel-body">
                    <?php echo $curr_desg_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Email Address</h3>
                </div>
                <div class="panel-body">
                    <?php echo $email_emp; ?>
                </div>
            </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Current CTC</h3>
                </div>
                <div class="panel-body">
                    <?php echo $curr_ctc_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Desired CTC</h3>
                </div>
                <div class="panel-body">
                    <?php echo $des_ctc_emp; ?>
                </div>
            </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Current Location</h3>
                </div>
                <div class="panel-body">
                    <?php echo $curr_loc_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Desired Location</h3>
                </div>
                <div class="panel-body">
                    <?php echo $des_loc_emp; ?>
                </div>
            </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Primary Skill 1</h3>
                </div>
                <div class="panel-body">
                    <?php echo $skill_1_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Primary Skill 2</h3>
                </div>
                <div class="panel-body">
                    <?php echo $skill_2_emp; ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Primary Skill 3</h3>
                </div>
                <div class="panel-body">
                    <?php echo $skill_3_emp; ?>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container text-center">
    <form method="post" action="editDetails.php">
        <button type="submit" class="btn btn-default">Edit Details</button>
    </form>
</div>
<div class="container text-center edit-2">
    <form method="post" action="changePass.php">
        <button type="submit" class="btn btn-default">Change Password</button>
    </form>
</div>

</body>


    </body>
</html>
