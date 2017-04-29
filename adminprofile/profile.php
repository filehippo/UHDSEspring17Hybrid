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
          <a class="navbar-brand" href="/adminprofile/profile.php">Entry Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="addprof.php">add new proffesor</a></li>
     
            <li><a href="/adminprofile/managecomment.php">Manage Comments </a></li>
            
          </ul>
        </div>
      </div>
    </nav>









<div id="profile">

<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

<b id="logout"><a href="/adminprofile/logout.php">Log Out</a></b>
</div>




<?php 




echo $login_session; 




?>






          <h2>Admin Student Management.....</h2>





    


       <?php

//Started in 12/26/2016 - 9:40 am nook cafe 
//Alfred Albizures in collaboration with william albizures
//Completed code on 12/30/2016 - 3:42PM Starbucks wallisville rd
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


$sql = "SELECT * FROM `students` ";





//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

echo "<thead><tr>

<th>name</th>
<th>lname</th>
<th>address</th>
<th>stname</th>
<th>studentid</th>


<th>actions</th></tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

echo"<tr><tbody><tr>

<form action=update.php method=post>

<td><input type=text name=rname value='" . $row["finame"] . "'></td>
<td><input type=text name=address value='" . $row["laname"] . "'></td>
<td><input type=text name=street value='" . $row["address"] . "'></td>
<td><input type=text name=state value='" . $row["stnames"] . "'></td>
<td><input type=text name=zipo value='"  . $row["studentid"] . "'></td>

<td><input type=hidden name=id_student value='" . $row["id_student"] . "'></td>

<td><input type=submit value=Update></td>

</form>

<td><a href =delete.php?id_student=". $row["id_student"] . " >Delete</a></td></tr>";

echo"</tbody>";

		}

        echo'</table>';
        echo'</div>';





       

}else{
	echo"0 results";
}

$conn->close();


?>




<?php
$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);


$sql=mysql_query("SELECT id_base,name FROM base");

if(mysql_num_rows($sql)){


$select= '<select name="select">';


while($rs=mysql_fetch_array($sql)){




      $select.='(<option name=var value="'.$rs['id_base'].'">'.$rs['name'].'</option>)';

      


  }

//echo "<input type=hidden name=var value='" $select.rs['id_base']. "'>";


}


$select.='</select>';


echo $select;





//$top = $_POST['id_base'];
//$var = $_POST['taskOption'];

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