<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "test";
$con =
(mysqli_connect($server,$username,$password,$dbname));
if(!$con)
{
echo "not connected";
}
// start
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $EMAIL_ADDRESS = $_POST['EMAIL_ADDRESS'];
    $PASSWORD = $_POST['PASSWORD'];
    //submit database
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = mysqli_connect($server,$username,$password,$dbname);
    if(!$conn){
    die("<br>Sorry! we failed to connect : ".mysqli_connect_error());
    }else{
    // echo "Successfully connected..!";
    $sql = "INSERT INTO `login`
    (`EMAIL_ADDRESS`,`PASSWORD`)VALUES('$EMAIL_ADDRESS','$PASSWORD')";
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
    