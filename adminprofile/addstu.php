<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Student</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>

  <body>

<!-- This is the Navigation Tab that allows the user to return to Admin Profile  -->

<div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="profile.php">Admin Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

<!-- End of the Navigation Tab Bar Code  -->


<!-- This the HTML form code that allows the admin to put in the values of a new restaurant they want to add  -->

  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Add new Student</h1>

<!-- This takes the name of the name and sends the input as a post command to the active file called nook.php that inserts to database  -->

				<form class="form-horizontal" role="form" method="POST" action="addstudents.php">

<!-- The Text Box to add Name  -->

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">first name</label>
						<div class="col-sm-10">
					     <input type="text" class="form-control" id="name" name="name" placeholder="first name" >
					   </div>
					</div>

<!-- The Text Box to add Street number -->

                                        <div class="form-group">
						<label for="street number" class="col-sm-2 control-label">last name</label>
						   <div class="col-sm-10">
						      <input type="text" class="form-control" id="stnum" name="stnum" placeholder="last name" >
					           </div>
					        </div>
<!-- The Text Box to add Street name --> 

                                        <div class="form-group">
						<label for="stname" class="col-sm-2 control-label">address #</label>
						    <div class="col-sm-10">
							<input type="text" class="form-control" id="stname" name="stname" placeholder="address #" >	
						   </div>
					       </div>

<!-- The Text Box to add State -->
                                        <div class="form-group">
					      <label for="state" class="col-sm-2 control-label">street name</label>
						  <div class="col-sm-10">
						    <input type="text" class="form-control" id="state" name="state" placeholder="street name" >
					      </div>
					   </div>


<!-- The Text Box to add Zipcode -->
                                        <div class="form-group">
						<label for="zip" class="col-sm-2 control-label">student id</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="zip" name="zip" placeholder="student id" >
					    </div>
					</div>


<!-- The Text Box to add categories-->
                                        <div class="form-group">
						<label for="catt" class="col-sm-2 control-label">phone #</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="catt" name="catt" placeholder="phone #" >
					    </div>
					</div>








<!-- The Insert button to add send info over to the addstudents.php file -->

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						   <input id="submit" name="submit" type="submit" value="Insert" class="btn btn-primary"/>
	                                           <a href="profile.php" class="btn btn-default">Cancel</a>
					    </div>
					</div>
				     </form> 
			         </div>
		             </div>
	                 </div>

<!-- This END of the HTML form code that allows the admin to put in the values of a new restaurant they want to add  -->

    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>


  </body>
</html>
