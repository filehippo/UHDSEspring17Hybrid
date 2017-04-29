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


$sql="UPDATE students SET `finame`='$_POST[rname]', `laname` ='$_POST[address]',`address`='$_POST[street]',`stnames`='$_POST[state]',`studentid`='$_POST[zipo]' WHERE `id_student`='$_POST[id_student]'";



if (mysqli_query($conn,$sql))
header("refresh:1; url=profile.php");
else
    echo"NOT Updated bra";




?>