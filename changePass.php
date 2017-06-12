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
            <li><a href="Jobseeker.php">Jobseeker</a></li>
            <li><a href="employer.php">Employer</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="active"><a href="welcome.php">Welcome <?php echo $login_session; ?></a></li>
            

          </ul>
           <form class="navbar-form navbar-right" method="post" action="logout.php">
                <button type="submit" class="btn btn-default">Logout</button>


      </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
    <h3>Professional Details </h3>
     <form method="post" action="updatepass.php">
<div class="row">
<div class="col-md-6">
     <label>Old Password</label>
   <input type="text" class="form-control" placeholder="Old Password" name="oldpass">
</div>

</div>
<div class="row">
<div class="col-md-6">
     <label>New Password</label>
   <input type="text" class="form-control" placeholder="New Password" name="newpass">
</div>
</div>
<div class="row">
<div class="col-md-6">
     <label>Confirm Password</label>
   <input type="text" class="form-control" placeholder="Confirm Password" name="confpass">
</div>
</div>
<div class="container text-center edit-2" >
<button type="submit" class="btn btn-primary align-center">Update Password</button>
</div>
   </form>
   </div>
   
   </body>

   
</html>