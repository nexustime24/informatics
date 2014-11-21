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
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	 <ul class="nav navbar-nav navbar-right">
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
      	<li class="active"><a href="#">Welcome 112232</a></li>
        <li><a href="#">Log Out</a></li>
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
	<table class="table-responsive">
			<tr>
				<td><h4><span class="label label-danger">REVILLA</span></h4></td>
				<td><h4><span class="label label-danger">APRIL BLANCH</span></h4></td>
				<td><h4><span class="label label-danger">ACAPULCO</span></h4></td>
			</tr>
		<tr>
			<td><h5>Last Name</h5></td>
			<td><h5>First Name</h5></td>
			<td><h5>Middle Name</h5></td>
		</tr>
		</table>
		<table class="table-responsive">
			<tr>
				<td><h4><span class="label label-danger">DIPLOMA IN COMPUTER STUDIES MAJOR IN COMPUTER SCIENCE</span></h4></td>
			</tr>
			<tr>
				<td><h5>Course</hr></td>
			</tr>
		</table>
	<div class="reg-header">
		<h1>Report of Grades</h1>
		</div> <!-- /.reg-header -->
		<div class="reg-body">
			<div class="header">	
			<label for="yr_term">Academic Year and Term: </label>
			<select name="yr_term" id="yr_term">			
						<option value="1st Sem-first">1st Semester S.Y. 2013-2014</option>
						<option value="2nd Sem-first">2nd Semester S. Y. 2013-2014</option>
						<option value="1st Sem-second">1st Semester S.Y. 2014-2015</option>
						<option value="2nd Sem-second">2nd Semester S. Y. 2014-2015</option>
			</select>
			 

			</div> <!-- prospectus header -->
        <div class="table-container">
            <table class="table table-condensed table-bordered">
            <tr>
		    	<th>Subject Code</th>
			    <th>Course Description</th>
			    <th>Midterm</th>
			    <th>Final</th>
			    <th>Re-Exam</th>
			    <th>Final Remarks</th>
			    <th>Date Posted</th>
			</tr>
		    <tr>
		    	<td style="text-align:center;">C1001</td>
		    	<td>Computer & Infomation Processing</td>
		    	<td style="text-align:center;">3</td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">C1002</td>
				<td>Program Design</td>
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">C1003</td>
				<td>Mathematics for Computing</td>
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">ST109</td>
				<td>Computer Applications 1</td>
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">CS154</td>
				<td>Data Structure Using C</td>
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">EN113</td>
				<td>English Grammar and Composition</td>	
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">VE413</td>
				<td>Professional Ethics & Values Education</td>
				<td style="text-align:center;">3</td>
				<td></td>
				<td></td>
		    	<td></td>
		    	<td></td>
			</tr>
</table>
<div class="sub_container">
		<label>Total Subjects: 8</label>
		<label>Total Enrolled Units: 23</label>
		<label>Total Credit Earned: 23</label>
		<label>General Weighted Avarage: 1.00</label>
</div>
</div> <!-- /.reg-body -->
</div> <!-- /.reg-container -->
</div>
</div>
<div class="footer">Copyright 2014 | <a href="#">Informatics</a></div> <!--footer -->
</div>
</body>
</html>