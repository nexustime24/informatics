<!DOCTYPE html>
<html>
<head>
	<title>Informatics | Log In</title>

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
        <li><a href="#">Home</a></li>
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
        <li class="active"><a href="#">Log In</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div> <!-- /.menu -->
</div> <!-- /.wrapper -->

<div class="body-container">
<div class="log-container">
  <div class="log-header">
    <h1>Student Log In</h1>
  </div> <!-- log header -->
  <div class="log-body">
	<form class="form-horizontal" role="form">
  <div class="form-group">
   <!-- <label for="inputEmail3" class="col-sm-2 control-label" style="margin-left:40px;">Student Number</label> -->
    <div class="col-sm-10" style="padding-left:80px;">
      <input type="text" class="form-control" id="stud_id" placeholder="Student ID Number" style="width:100%; ">
    </div>
  </div>
  <div class="form-group">
   <!-- <label for="inputPassword3" class="col-sm-2 control-label" style="margin-left:40px;">Password</label> -->
    <div class="col-sm-10" style="padding-left:80px;">
      <input type="password" class="form-control" id="password" placeholder="Password" style="width:100%;">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label style="margin-left:20px;">
          <input type="checkbox" style="margin-left:40px;"> Keep me logged in
        </label>
      </div>
    </div>
  </div>
  <div class="form-group" style="padding-left:60%;">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="margin-left:auto;">Log in</button>
    </div>
  </div>
</form>
</div> <!-- log body-->
</div> <!-- /.log-container -->
<p>Forgot your password? Click <a href="#">here</a>.</p>
</div> <!-- /.body container -->
<div class="footer">Copyright 2014 | Informatics</div> <!--footer -->
</div> <!-- container-->



</body>
</html>