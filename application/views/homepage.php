<!DOCTYPE html>
<html>
<head>
	<title>Informatics</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

</head>
<body>

<div class="container">
<div class="wrapper">
	<div class="logo"><!--<img src="images/logo.jpg" width="8%" height="15%">-->
    <p>INFORMATICS COMPUTER INSTITUTE</p>
    <h1>STUDENT PORTAL</h1>
</div> <!-- /.logo -->

<div class="menu">
    <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('main/login'); ?>">Log In</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div> <!-- /.menu -->
</div> <!-- /.wrapper -->
<div class="body-container">
<div class="reg-container">
	<ul class="nav nav-tabs nav-justified">
      <li><a href="<?php echo site_url('main/stud_profile'); ?>">Student Information</a></li>
       <li><a href="<?php echo site_url('main/schedule'); ?>">Class Schedule</a></li>
</ul>
  <div class="img-container">
    
     <a href="#"><img class="img-thumbnail" src="images/student_information.png"></a>
      <a href="#"><img class="img-thumbnail" src="images/registration.png"></a>
  </div>
   <ul class="nav nav-tabs nav-justified">
     <li><a href="<?php echo site_url('main/grade'); ?>">View your Grades</a></li>
      <li><a href="<?php echo site_url('main/prospectus'); ?>">Academic Evaluation</a></li>
    </ul>
  <div class="img-container">

     <a href="#"><img class="img-thumbnail" src="images/grades.png"></a>
    <a href="#"><img class="img-thumbnail" src="images/eval.png"></a>
      
</div>
<p>Forgot your password? Click <a href="#">here</a>.</p>
<p>Got questions? Click <a href="#">here</a>.</p>
</div> <!-- /.reg-body -->
</div> <!-- /.reg-container -->


<div class="footer">Copyright 2014 | <a href="#">Informatics</a></div> <!--footer -->
</div>

</body>
</html>