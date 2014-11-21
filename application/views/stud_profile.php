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
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="
glyphicon glyphicon-circle-arrow-down"></a>
          <ul class="dropdown-menu">
            <li><a href="#">Student Information</a></li>
             <li><a href="#">Class Schedule</a></li>
            <li><a href="#">View your Grades</a></li>
            <li><a href="#">Academic Evaluation</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Welcome 112232</a></li>
        <li><a href="#">[ Log Out ]</a></li>
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
	<div class="reg-header">
		<h1>Student Information</h1>
		</div> <!-- /.reg-header -->
    
		<div class="reg-body">
      <div class="si_container">
			<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
        <div class="form-group">
        	<img src="<?php echo base_url(); ?>images/student.png" alt="Profile Picture" class="img-rounded"  >
          <div class="avatar-container"> 
              <input type="file" name="avatar" class="avatar" style="margin-top:0px; margin-left:auto;"accept="image/*" /></div> <!--End of Avatar Container -->
            </div> <!-- form-group-->
		 <div class="form-group">
            <label for="sid" class="col-sm-2 control-label"> Student Index No.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="sid" id="sid" placeholder="1112232" disabled>
        </div>
        </div> <!-- form-group -->
        <div class="form-group">
            <label for="fullname" class="col-sm-2 control-label" >Student Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="REVILLA, APRIL BLANCH" disabled>
        </div>
        </div> <!-- form-group -->
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label"> Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="address" id="address" placeholder="MOLAVE, ZAMBOANGA DEL SUR" disabled>
        </div>
        </div> <!-- form-group -->
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label" >Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="revilla.aprilblanch@yahoo.com"disabled >
        </div>
        </div> <!-- form-group -->
          <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label" >Mobile No.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="09082338214" disabled>
        </div>
        </div> <!-- form-group -->
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label" >Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username" id="username" placeholder="aprilblanchute" disabled>
        </div>
         </div> <!-- form-group -->
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label" >Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="password" id="password" placeholder="aprilblanch" disabled>
        </div>
         </div> <!-- form-group -->
        <div class="form-group">
            <label for="confirm_pass" class="col-sm-2 control-label" >Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="aprilblanch"disabled>
        </div>
        </div> <!-- form-group -->
        <button type="button" class="btn btn-danger">Edit</button>
        <button type="button" class="btn btn-success">Save</button>
      </div> <!-- student information container -->
</div> <!-- /.reg-body -->
</div>  <!-- /.reg-container -->
<div class="footer">Copyright 2014 | <a href="#">Informatics</a></div> <!--footer -->
</div>  <!-- container -->

</body>
</html>