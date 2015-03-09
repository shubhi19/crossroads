 
<?php
include("mysqlconnect.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "pictures/".$imagename;
	$offense = $_POST['violation'];
  $regino = $_POST['registration_no'];
  $email = $_POST['InputEmail'];
  $name = $_POST['InputName'];

if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload="INSERT into images_tbl (images_path,submission_date,offense,registration_no,name,email) VALUES 

('".$target_path."','".date("Y-m-d")."','$offense','$regino','$name','$email')";
	mysqli_query($conn,$query_upload) or die("error in $query_upload ==  ".mysql_error());  
	
}else{

   exit("Error While uploading image on the server");
} 

}

?>

<!doctype html>
<<html>
<head>
  <title>Success!</title>
  <link rel="stylesheet" href="css/skel.css" />
  <link rel="stylesheet" href="css/style.css" /> 
</head>
<body>

          <div id="success">
              <div class="container">
                <section>
                  <header class="major" style="color:#E2A9F3">
                    <h2>Success!</h2>
                    <span class="byline" style="color:#E2A9F3">&hellip; The violation was successfully recorded, thank you for your support!</span>
                  </header>
                
              </section>      
            </div>
          </div>
          <nav id="nav" style ="text-align:center">
              <ul>
                <li><a href="index.php"><h2>Home</h2></a></li>
                <li><a href="register.php"><h2>Register Offense</h2></a></li>
                <li><a href="view.php"><h2>View </h2></a></li>
                <li><a href="practices.php"><h2>Best Practices</h2></a></li>
              </ul>
            </nav>
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