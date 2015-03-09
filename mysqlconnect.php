 
<?php
/**********MYSQL Settings****************/
$host="localhost";
$databasename="raw";
$user="shubhi";
$pass="";
/**********MYSQL Settings****************/


$conn=mysqli_connect($host,$user,$pass,$databasename);

if($conn)
{
$db_selected = mysqli_select_db($conn,$databasename);

if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}
?>
