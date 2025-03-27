<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "signup_db";
$con =
(mysqli_connect($server,$username,$password,$dbname));
if(!$con)
{
echo "not connected";
}
// start
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$FIRST_NAME = $_POST['FIRST_NAME'];
$LAST_NAME = $_POST['LAST_NAME'];
$EMAIL_ADDRESS = $_POST['EMAIL_ADDRESS'];
$PASSWORD = $_POST['PASSWORD'];
$CONFIRM_PASSWORD = $_POST['CONFIRM_PASSWORD'];
//submit database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
die("<br>Sorry! we failed to connect : ".mysqli_connect_error());
}else{
// echo "Successfully connected..!";
$sql = "INSERT INTO `signup`
(`FIRST_NAME`,`LAST_NAME`,`EMAIL_ADDRESS`,`PASSWORD`,`CONFIRM_PASSWORD`)VALUES('$FIRST_NAME','$LAST_NAME','$EMAIL_ADDRESS','$PASSWORD','$CONFIRM_PASSWORD')";
$final = mysqli_query($conn,$sql);
if($final){
echo "successfully inserted";
}else{
echo "the details was not inserted succesfully
because of this ERROR : ".mysqli_error($conn);
}
}
}
?>
