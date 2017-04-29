<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "uhdjordan", "uhdchang", "uhdpizzaratzz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['name']);
$addr = mysqli_real_escape_string($link, $_REQUEST['stnum']);
$stn = mysqli_real_escape_string($link, $_REQUEST['stname']);
$st = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$cat = mysqli_real_escape_string($link, $_REQUEST['catt']);
$class =1;



$sql = "INSERT INTO  `uhdpizzaratzz`.`students` (`id_student`, `finame`, `laname`, `address`, `stnames`, `studentid`,`phone`,`st_fk`, `st_fk2`, `st_fk3`, `st_fk4`) VALUES (NULL, '$Name', '$addr', '$stn', '$st', '$zip', '$cat', '$class', '$class', '$class', '$class')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=addstu.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>