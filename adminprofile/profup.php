<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "uhdjordan", "uhdchang", "uhdpizzaratzz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['idss']);
$addr = mysqli_real_escape_string($link, $_REQUEST['course1']);



$sql = "UPDATE  `uhdpizzaratzz`.`course` SET  `professor` =  '$addr' WHERE  `course`.`core_id` =$Name";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=profas.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>