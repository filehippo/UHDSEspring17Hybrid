<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "uhdjordan", "uhdchang", "uhdpizzaratzz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




class grade
{

public $name;
public $addr;
public $stn;


function getName(){
return $this->name;
}


function getAddr(){
return $this->addr;
}


function getStn(){
return $this->stn;
}



}



// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['name']);
$addr = mysqli_real_escape_string($link, $_REQUEST['stnum']);
$stn = mysqli_real_escape_string($link, $_REQUEST['id_student']);

$input = new grade();


$input->name = $Name;
$input->addr = $addr;
$input->stn = $stn;


$sql = "INSERT INTO  `uhdpizzaratzz`.`gradez` (`gr_id`, `courses`, `grades`, `gr_fk`) VALUES (NULL, '$input->name', '$input->addr', '$input->stn')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=addgrd.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>