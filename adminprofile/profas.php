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
  				<h1 class="page-header text-center">Assign Professor to Class</h1>

<!-- This takes the name of the name and sends the input as a post command to the active file called nook.php that inserts to database  -->

				<form class="form-horizontal" role="form" method="POST" action="profup.php">






 <div class="form-group">
	<label for="street number" class="col-sm-2 control-label">Course</label>
		<div class="col-sm-10">




<?php

$conn = new mysqli('localhost', 'uhdjordan', 'uhdchang', 'uhdpizzaratzz') 
or die ('Cannot connect to db');

    $result = $conn->query("select core_id, courses from course");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='idss'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['core_id'];
                  $name = $row['courses']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>

 </div>
	</div>



 <div class="form-group">
	<label for="street number" class="col-sm-2 control-label">Professor </label>
		<div class="col-sm-10">


<?php

$conn = new mysqli('localhost', 'uhdjordan', 'uhdchang', 'uhdpizzaratzz') 
or die ('Cannot connect to db');

    $result = $conn->query("select id_teach, name from teacher");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='course1'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id_teach'];
                  $name = $row['name']; 
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
						   <input id="submit" name="submit" type="submit" value="Assign" class="btn btn-primary"/>
	                                           
					    </div>
					</div>
				     </form> 
			         </div>
		             </div>
	                 </div>


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