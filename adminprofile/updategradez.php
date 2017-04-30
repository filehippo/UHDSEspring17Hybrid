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

//targeted database 

mysqli_select_db($conn,'uhdpizzaratzz');


echo"Updated Successfully";


$sql="UPDATE  `uhdpizzaratzz`.`gradez` SET `courses`='$_POST[course]', `grades` ='$_POST[grades]' WHERE `gr_id`='$_POST[gr_id]'";




if (mysqli_query($conn,$sql))
header("refresh:1; url=addgrd.php");
else
    echo"NOT Updated bra";




?>