<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "book_db";
$con =
(mysqli_connect($server,$username,$password,$dbname));
if(!$con)
{
echo "not connected";
}
// start
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $PLACENAME = $_POST['PLACENAME'];
    $NUMBEROFGUESTS = $_POST['NUMBEROFGUESTS'];
    $CONTACT_NO = $_POST['CONTACT_NO'];
    $ARRIVALS = $_POST['ARRIVALS'];
    $LEAVING = $_POST['LEAVING'];
    //submit database
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book_db";
    $conn = mysqli_connect($server,$username,$password,$dbname);
    if(!$conn){
    die("<br>Sorry! we failed to connect : ".mysqli_connect_error());
    }else{
    // echo "Successfully connected..!";
    $sql = "INSERT INTO `book`
    (`PLACENAME`,`NUMBEROFGUESTS`,`CONTACT_NO`,`ARRIVALS`,`LEAVING`)VALUES('$PLACENAME','$NUMBEROFGUESTS','$CONTACT_NO','$ARRIVALS','$LEAVING')";
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
 Connection.php:-(CONNECTION OF CONTACT TABLEWITH DATABASE)
<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "tms";
$con =
(mysqli_connect($server,$username,$password,$dbname));
if(!$con)
{
echo "not connected";
}
// start
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$SUBJECT = $_POST['SUBJECT'];
$MESSAGE = $_POST['MESSAGE'];
//submit database
$server = "localhost"
$username = "root";
$password = "";
$dbname = "tms";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("<br>Sorry! we failed to connect : ".mysqli_connect_error());
    }else{
    // echo "Successfully connected..!";
    $sql = "INSERT INTO `contact`
    (`NAME`,`EMAIL`,`SUBJECT`,`MESSAGE`)VALUES('$NAME',
    '$EMAIL','$SUBJECT','$MESSAGE')";
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