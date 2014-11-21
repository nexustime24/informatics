<!DOCTYPE html>
<html>
<head>
	<title>Informatics | Application Form</title>

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
        </li>      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
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
  <div class="reg-header">
    <h1 style="font-size:20px;">Class Schedule</h1>
    </div> <!-- /.reg-header -->
    <div class="reg-body">
      <div class="prospectus_header">       
        <label for="yr_term">Academic Year and Term: </label>
        <select name="yr_term" id="yr_term">      
            <option value="1st Sem-first">1st Semester S.Y. 2013-2014</option>
            <option value="2nd Sem-first">2nd Semester S. Y. 2013-2014</option>
            <option value="1st Sem-second">1st Semester S.Y. 2014-2015</option>
            <option value="2nd Sem-second">2nd Semester S. Y. 2014-2015</option>
          </select>
          <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>

      </div> <!-- prospectus header -->
        <div class="table-container">
            <table class="table table-condensed table-bordered">
            <tr>
          <th>Subject Code</th>
          <th>Course Description</th>
          <th>Units</th>
          <th>Section</th>
          <th>Schedule</th>
          <th>Faculty Teacher</th>
      </tr>
        <tr>
          <td style="text-align:center;">C1001</td>
          <td>Computer & Infomation Processing</td>
          <td style="text-align:center;">3</td>
          <td>BSIT4A</td>
          <td>MWF 10-11am</td>
          <td>Juan Luna</td>
      </tr>
      <tr>
        <td style="text-align:center;">C1002</td>
        <td>Program Design</td>
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>Andres Bonifacio</td>
      </tr>
      <tr>
        <td style="text-align:center;">C1003</td>
        <td>Mathematics for Computing</td>
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>Jose Rizal</td>
      </tr>
      <tr>
        <td style="text-align:center;">ST109</td>
        <td>Computer Applications 1</td>
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>Emilio Aguinaldo</td>
      </tr>
      <tr>
        <td style="text-align:center;">CS154</td>
        <td>Data Structure Using C</td>
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>John Dela Cruz</td>
      </tr>
      <tr>
        <td style="text-align:center;">EN113</td>
        <td>English Grammar and Composition</td>  
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>Paul Uy</td>
      </tr>
      <tr>
        <td style="text-align:center;">VE413</td>
        <td>Professional Ethics & Values Education</td>
        <td style="text-align:center;">3</td>
        <td>BSIT4A</td>
        <td>MWF 10-11am</td>
          <td>Teo Dee</td>
      </tr>
</table>
</div> <!-- table container -->
</div> <!-- /.reg-body -->
</div> <!-- /.reg-container -->
</div> <!-- /.con -->
<div class="footer">Copyright 2014 | <a href="#">Informatics</a></div> <!--footer -->
</div> <!-- container-->



</body>
</html>