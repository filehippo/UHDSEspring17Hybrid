<?php


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "uhdjordan", "uhdchang");
// Selecting Database


$db = mysql_select_db("uhdpizzaratzz", $connection);
session_start();// Starting Session
// Storing Session


$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User


$ses_sql=mysql_query("select username from stlogin where username='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);

$login_session = $row['username'];

$row = mysql_fetch_assoc($ses_sql);


if(!isset($login_session)){

mysql_close($connection); // Closing Connection

header('Location: studentprofile/student.php'); // Redirecting To Home Page

}
?>