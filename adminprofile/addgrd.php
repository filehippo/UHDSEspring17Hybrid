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
<title>Okay Munchy DB</title>
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
           
            <li><a href="profile.php">admin profile </a></li>
            
          </ul>
        </div>
      </div>
    </nav>









<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="/adminprofile/logout.php">Log Out</a></b>
</div>





<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Add student grade</h1>

<!-- This takes the name of the name and sends the input as a post command to the active file called nook.php that inserts to database  -->

				<form class="form-horizontal" role="form" method="POST" action="addgrades.php">

<!-- The Text Box to add Name  -->

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Course</label>
						<div class="col-sm-10">
					     <input type="text" class="form-control" id="name" name="name" placeholder="Course Name" >
					   </div>
					</div>

<!-- The Text Box to add Street number -->

                                        <div class="form-group">
						<label for="street number" class="col-sm-2 control-label">Grade</label>
						   <div class="col-sm-10">
						      <input type="text" class="form-control" id="stnum" name="stnum" placeholder="Grade is 0-4 numeric" >
					           </div>
					        </div>


<!-- The Text Box to add locations aka restaurants  -->




                <div class="form-group">
	<label for="street number" class="col-sm-2 control-label">student </label>
		<div class="col-sm-10">




<?php

$conn = new mysqli('localhost', 'uhdjordan', 'uhdchang', 'uhdpizzaratzz') 
or die ('Cannot connect to db');

    $result = $conn->query("select id_student, finame from students");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='id_student'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id_student'];
                  $name = $row['finame']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>



 </div>
	</div>

					         
<!-- The Insert button to add send info over to the nook.php file -->

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						   <input id="submit" name="submit" type="submit" value="Insert" class="btn btn-primary"/>
	                                           
					    </div>
					</div>
				     </form> 
			         </div>
		             </div>
	                 </div>


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


$sql = "SELECT gr_id,finame,courses,grades FROM students

JOIN `gradez` ON students.id_student = `gradez`.gr_fk ";



//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

echo "<thead><tr>

<th>name</th>
<th>course</th>
<th>grade</th>


</tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

echo"<tr><tbody><tr>



<form action=updategradez.php method=post>

<td><input type=text name=rname value='" . $row["finame"] . "'></td>
<td><input type=text name=course value='" . $row["courses"] . "'></td>
<td><input type=text name=grades value='" . $row["grades"] . "'></td>

<td><input type=hidden name=gr_id value='" . $row["gr_id"] . "'></td>

<td><input type=submit value=Update></td>

</form>

<td><a href =deletegradez.php?gr_id=". $row["gr_id"] . " >Delete</a></td></tr>";

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