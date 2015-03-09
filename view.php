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
						<h1><a href="#" id="logo">View</a></h1>
						<span class="byline"><h2>Do you wish to see the recent traffic violations in the city?</h2></span>
					
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
		<div id="view">
              <div class="container" style="background-color:#334c4c; padding:40px; margin:40px; border-radius:5px; width:40; padding-bottom:10px;margin-right:20px">
                <section>
                  <header class="major" >
                  
                    <span class="byline" style="color:white"><h3>Select the violation type you wish to view</h3></span>
                    <form action="#" method="GET">
                    	<select type="select" class="form-control" name="offense" id="select" placeholder="Select violation" required>
                        		<option value="over-speeding" selected>none</option>
  								<option value="over-speeding">over-speeding</option>
  								<option value="drunk driving">drunk driving</option>
  								<option value="Reckless driving">Reckless driving</option>
  								<option value="Running a red light">Running a red light</option>
  								<option value="Using a cell phone">Using a cell phone</option>
						</select>
						<br>
						<br>
						<div>
            				<input type="submit" name="submit" value="View details"/>
            			</div>
					</form>

                	
                  </header>

                
              </section>      
            </div>
            

         </div>
        <div>
         			<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellpadding="5" cellspacing="5">
					<tbody><tr>
					<td>

	

					<?php
						include("mysqlconnect.php");
						if (isset($_GET['submit']))
						{
							$selected_val = $_GET['offense'];  // Storing Selected Value In Variable
						

						$select_query = "SELECT * FROM  images_tbl WHERE offense='$selected_val' ";
						$sql = mysqli_query($conn,$select_query);	

						
						$num_results = mysqli_num_rows($sql); 
						if ($num_results > 0){ 
							
								while($row = mysqli_fetch_array($sql,MYSQL_BOTH)){

								$image = $row['images_path'];
								$reg_no = $row['registration_no'];
								$date = $row['submission_date'];
								echo '<h3 style="color:#2F0B3A; text-align:center">Registration number :</h3>'.$reg_no.'<br>';
								echo '<h3 style="color:#2F0B3A; text-align:center">Date :</h3>'.$date.'<br>';
								echo '<img src="' . $image . '" style="display: block; margin-left: auto; margin-right: auto"/>';
								echo '<br>';
								echo '<br>';
								}
						}

						else{ 
						echo '&nbsp &nbsp &nbsp &nbsp <h2 style="color:#2F0B3A">There are no entries to show in this category</h2>' ;
						} 




						


							}
						
					?>

					</td>
					</tr>
					</tbody
					></table>
		</div>
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








     