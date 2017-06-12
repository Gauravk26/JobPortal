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
            <li><a href="jobseeker.php">Jobseeker</a></li>
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
     <form method="post" action="saveDetails.php">
<div class="row">
<div class="col-md-6">
     <label>Company Name</label>
   <input type="text" class="form-control" placeholder="Company" name="company_user">
</div>

</div>
<div class="row">
<div class="col-md-6">
     <label>Current Location</label>
   <input type="text" class="form-control" placeholder="Current Location" name="cur_loc_user">
</div>
<div class="col-md-6">
     <label>Desired Location</label>
   <input type="text" class="form-control" placeholder="Desired Location" name="des_loc_user">
</div>
</div>
<div class="row">
<div class="col-md-6">
     <label>Current Ctc</label>
   <input type="text" class="form-control" placeholder="Current Ctc" name="cur_ctc">
</div>
<div class="col-md-6">
     <label>Expected CtC</label>
   <input type="text" class="form-control" placeholder="Expected Ctc" name="des_ctc">
</div>
</div>
<div class="row">
<div class="col-md-6">
     <label>Current Designation</label>
   <input type="text" class="form-control" placeholder="Designation" name="cur_desg">
</div>
<div class="col-md-6">
     <label>Desired Designation</label>
   <input type="text" class="form-control" placeholder="Desired Designation" name="des_desg">
</div>
</div>
<div class="row">
<div class="col-md-4">
     <label>Skill 1</label>
   <input type="text" class="form-control" placeholder="Skill" name="skill_1">
</div>
<div class="col-md-4">
     <label>Skill 2</label>
   <input type="text" class="form-control" placeholder="Skill" name="skill_2">
</div>
<div class="col-md-4">
     <label>Skill 3</label>
   <input type="text" class="form-control" placeholder="Skill" name="skill_3">
</div>
</div>
<div class="container text-center edit-2" >
<button type="submit" class="btn btn-primary align-center">Save Details</button>
</div>
   </form>
   </div>
   
   </body>

   
</html>