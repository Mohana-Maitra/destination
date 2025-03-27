<?php
$conn = "";
try {
$servername = "localhost";
$dbname = "administration";
$username = "root";
$password = "";
$conn = new PDO( "mysql:host=$servername; dbname=administration", $username, $password
);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>
 Validate.php:- <?php
include_once('C:\xampp\htdocs\MYWEB2\admin\connect. php');
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
$stmt = $conn->prepare("SELECT * FROMadminlogin");
$stmt->execute();
$users = $stmt->fetchAll();
foreach($users as $user) {
    if(($user['username'] == $username) &&($user['password'] == $password)) {
        header("location: adminpage.php");
        }
        else {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
        }
    }
}
?>