<?php
include('session.php');
?>


<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="/indexsources/jquery-ui.css">
  <script src="/indexsources/jquery-1.10.2.js"></script>
  <script src="/indexsources/jquery-ui.js"></script>


<meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/cssfiles/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/cssfiles/JS/html5shiv.min.js"></script>
      <script src="/cssfiles/JS/respond.min.js"></script>
    <![endif]-->



<head>
<title>Software Engineering</title>
<link href="/cssfiles/style.css" rel="stylesheet" type="text/css">
</head>


<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""></a></li>
     
            <li><a href=""></a></li>
            
          </ul>
        </div>
      </div>
    </nav>





<div id="profile">

<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

<b id="logout"><a href="logout.php">Log Out</a></b>
</div>


<h1><i>Student info</i></h1>

<?php 

//Started in 4/26/2017 - @ UHD Downtown
//Alfred Albizures 
// 832-414-0264 alfredalbizures@gmail.com


//Testing join operation on database sql query to finish this assignment 
//SQL DataBase log in information to connect to the database

$servername ="localhost";
$username ="uhdjordan";
$password ="uhdchang";
$dbName ="uhdpizzaratzz";

//creates the database connection

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}



//This is a SQL command looking thew the base table and comparing an exact comparison name and the $city users input

$sql = "SELECT * FROM  `students` WHERE  `finame` =  '$login_session' ";

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>

<th>name</th>
<th>lastname</th>
<th>st #</th>
<th>streetname</th>
<th>phone #</th>
<th>student id</th>


</tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc())
{
echo"<tbody>
<tr>
<td>" . $row["finame"] . "</td>
<td>" . $row["laname"] . "</td>
<td>" . $row["address"] . "</td>
<td>" . $row["stnames"] . "</td>
<td>"  . $row["phone"] . "</td>
<td>"  . $row["studentid"] . "</td>

</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}

$conn->close();

?>



<h1><i>Classes and Professors </i></h1>


<?php

$servername ="localhost";
$username ="uhdjordan";
$password ="uhdchang";
$dbName ="uhdpizzaratzz";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}







$sql = "SELECT name, courses,location,time,lname
FROM students
JOIN  `course` ON (`students`.`st_fk`  =  `course`.`core_id` OR `students`.`st_fk2`  =  `course`.`core_id` OR
 `students`.`st_fk3`  =  `course`.`core_id` OR `students`.`st_fk4`  =  `course`.`core_id`)

Join `teacher` ON `teacher`.`id_teach`=`course`.`professor`


AND  `students`.`finame` = '$login_session' ";


$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>

<th>Proffesor name</th>
<th>last name</th>
<th>course</th>
<th>location</th>
<th>time</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>
<td>" . $row["name"] . "</td>
<td>" . $row["lname"] . "</td>
<td>" . $row["courses"] . "</td>
<td>" . $row["location"] . "</td>
<td>" . $row["time"] . "</td>

</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>



<h1><i>Grades and GPA </i></h1>







<?php

$servername ="localhost";
$username ="uhdjordan";
$password ="uhdchang";
$dbName ="uhdpizzaratzz";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}



$sql = "SELECT finame, courses, grades
FROM students
JOIN  `gradez` ON students.id_student =  `gradez`.gr_fk
AND  `students`.`finame` = '$login_session' ";


$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>

<th>student</th>
<th>course</th>
<th>grade</th>

</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>
<td>" . $row["finame"] . "</td>
<td>" . $row["courses"] . "</td>
<td>" . $row["grades"] . "</td>


</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>





    








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https:/cssfiles/JS/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

  <link rel="stylesheet" href="/indexsources/jquery-ui.css">
  <script src="/indexsources/jquery-1.10.2.js"></script>
  <script src="/indexsources/jquery-ui.js"></script>








</body>
</html>