<?php


//Alfred Albizures in collaboration with william albizures
// 832-414-0264 alfredalbizures@gmail.com

//SQL DataBase log in information from the Cpanel in Godaddy

$servername = "localhost";
$username ="uhdjordan";
$password ="uhdchang";
$dbName ="uhdpizzaratzz";


//create connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


mysqli_select_db($conn,'uhdpizzaratzz');


$sql = "DELETE FROM students WHERE id_student='$_GET[id_student]'";


echo"Successfully deleted";

if (mysqli_query($conn,$sql))



header("refresh:2; url=profile.php");
else
    echo"NOT DELETED";



?>








