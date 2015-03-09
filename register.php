<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>REGISTER- crossroads</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo"><u>REGISTER</u></a></h1>
						<span class="byline"><h2>Witnessed a traffic violation? Register the offense now!</h2></span>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php"><h4>Home</h4></a></li>
								<li><a href="register.php"><h4>Register Offense</h4></a></li>
								<li><a href="view.php"><h4>View </h4></a></li>
								<li><a href="practices.php"><h4>Best Practices</h4></a></li>
								
							</ul>
						</nav>

				</div>
			</div>
		<!--header closes-->


<!--form starts-->
	<div class="container">
    <div class="row">
        <form action="saveimage.php" enctype="multipart/form-data" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Your Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="registration_no">Registration Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="registration_no" id="registration_no" placeholder="Enter Registration Number of the vehicle" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="violation">Violation</label>
                    <div class="input-group">
                        <select type="select" class="form-control" name="violation" id="violation" placeholder="Select violation" required>
                        	
  								<option value="over-speeding">over-speeding</option>
  								<option value="drunk driving">drunk driving</option>
  								<option value="Reckless driving">Reckless driving</option>
  								<option value="Running a red light">Running a red light</option>
  								<option value="Using a cell phone">Using a cell phone</option>
						</select>	
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Your Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Description">Describe the Violation</label>
                    <div class="input-group">
                        <textarea name="Description" id="Description" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="picture">Upload an image</label>


                    	<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
						<tbody><tr>
						<td>
						<input name="uploadedimage" type="file" required>
						</td>
	 
						</tr>
	 
						</tbody></table>

				</div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
       
    </div>
</div>
<!-- Registration form - END -->
<!-- Footer -->
			<div id="footer">
				<div class="container" style="background-color:#383838; width:100%">

					<!-- Copyright -->
						<div class="copyright">
							Developed and Designed by : Shubhi Shrivastava<br>
							Email : shubhishrivastava95@gmail.com<br>
							Github : shubhi19
							<br>
							<br>
						</div>

				</div>
			</div>

	</body>
</html>
