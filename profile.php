<?php
include('session.php');
?>
<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>

<head>
<title>WoodForest DB</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>


<body>





<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>


<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="" method="post">
        <fieldset>
          <h2>Search.....</h2>
          <hr class="colorgraph">
          <div class="form-group">

<div class="ui-widget">
<form name="form1" method = "post" action="profile.php">

            <input id="skills" input name="skills" type="text" label for="skills" class="form-control input-lg">
          </div>
          
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Buscar" class="btn btn-lg btn-success btn-block">
            </div>
</form>
</div>


            
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>




      <p>Please input Territory # from 0-51 or type in street name</p>


       <?php

//Started in 12/26/2016 - 9:40 am nook cafe 
//Alfred Albizures in collaboration with william albizures
//Completed code on 12/30/2016 - 3:42PM Starbucks wallisville rd
// 832-414-0264 alfredalbizures@gmail.com

//SQL DataBase log in information from the Cpanel in Godaddy

$servername = "localhost";
$username ="woodforest2";
$password ="Coffee2017";
$dbName ="woodcong";


//create connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}




//The input of the search bar gets placed in this line html
//then placed in the city interval or string


$array1 = array('1','2');

$city = $_POST['skills'];

$array2 = array($city);

$array3 = array('maps/gogo1.html','maps/gogo2.html');

$key = $city-1;


if(array_intersect($array1, $array2))

{

echo "<iframe height='320' scrolling='no' title='Responsive Google Map' src='$array3[$key]' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>";  
}

//This decides if it is a number to execute a the following SQL query 
//if its a number then execute the first or else the second command 

if(is_numeric($city))
{
$sql = "SELECT * FROM  `woodterr` WHERE  terr  =  $city";

}
else
{

$sql = "SELECT * FROM  `woodterr` WHERE  `streetname` =  '$city' ";

}


//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

	echo "<thead><tr><th>Lname</th><th>Fname</th><th>ST#</th><th>st name</th><th>city</th><th>st</th><th>zp</th><th>ph</th><th>N</th><th>#</th></tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

		echo"<tbody><tr><td>" . $row["last"] . "</td><td>" . $row["first"] . "</td><td>" . $row["streetnum"] . "</td><td>" . $row["streetname"] . "</td><td>"  . $row["city"] . "</td><td>" . $row["state"] . "</td><td>" . $row["zip"] . "</td><td>" . $row["phone"] ."</td><td>" . $row["notes"] ."</td><td>" . $row["terr"] . "</td></tr>";

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>








</body>
</html>