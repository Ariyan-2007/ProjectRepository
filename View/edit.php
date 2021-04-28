<!DOCTYPE html>
<html lang="en">

  <title>EDIT MANAGERS</title>
     <script src="../JS/jsvalidation.js" type="text/javascript"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div style="background-color:black ">

        <?php 
session_start();

if (isset($_SESSION['username'])) {

    
  echo "<br><a href='Logout.php'></a><br>";

}
else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>
</div>



  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
       .background
   {
      background-image: url("../Pictures/background.webp");
       background-repeat: repeat;
   background-position: cover;

   }

   .my-color
   {
    background: #000;
   }

  </style>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav my-color">
              <li class="active"><a style="font-size:20px; " href= "Logged_in_dashboard.php">Dashboard</a></li>
              <li><br><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
        <li><a style="font-size:20px; " href= "View_Properties.php">View All Properties</a></li>
        <li><a style="font-size:20px; "  href= "users.php">View Managers</a></li>
        <li><a style="font-size:20px; " href= "insert.php">Hire Manager</a></li>
        <li><a style="font-size:20px; " href= "Edit_Profile.php">Edit Profile</a></li>
         <li><a style="font-size:20px; " href= "Users_list.php">Users List</a></li>
              <li><a style="font-size:20px; " href= "Change_Password.php">Change Password</a></li>
              <li><a style="font-size:20px; " href= "Logout.php">Logout</a></li>
      </ul>
    </div>

  </div>
</nav>

 

<div class="container-fluid my-color">
  <div class="row content my-color">
    <div class="col-sm-3 sidenav hidden-xs my-color">
      <ul class="nav nav-pills nav-stacked my-color">
        <li class="active"><br><br><a style="font-size:20px; " href= "Logged_in_dashboard.php">Dashboard</a></li>
        <li><br><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
        <li><a style="font-size:20px; " href= "View_Properties.php">View All Properties</a></li>
        <li><a style="font-size:20px; "  href= "users.php">View Managers</a></li>
        <li><a style="font-size:20px; " href= "insert.php">Hire Manager</a></li>
        <li><a style="font-size:20px; " href= "Edit_Profile.php">Edit profile</a></li>
        <li><a style="font-size:20px; " href= "Users_list.php">Users List</a></li>
              <li><a style="font-size:20px; "  href= "Change_Password.php">Change Password</a></li>
              <li><a style="font-size:20px; " href= "Logout.php">Logout</a></li>
      </ul><br>
    </div>
    <br>



    
    <div class="col-sm-9">
      <div class="well my-color">
        <a class="navbar-brand my-color "> <img src="../Pictures/logo.PNG" alt="logo" style="width:100px"></a>
        <p style="font-weight: bold; color: green; font-size: 60px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</p><br>
      




<?php 

require_once 'connect.php';


?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || 
			empty($_POST['address']) || empty($_POST['contact']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$lastname 	= $_POST['lastname'];
			$address 	= $_POST['address'];
			$contact  	= $_POST['contact'];
			$sql = "UPDATE users SET firstname='{$firstname}', lastname = '{$lastname}',
						address = '{$address}', contact = '{$contact}' 
						WHERE user_id=" . $_POST['userid'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3 style="color:white"><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Manager</h3> 
			<form name="myform" action="" method="POST" onsubmit="return validateform()">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
				<label  style="color: white; font-size:20px;" for="firstname">Firstname</label>
				<input type="text" id="name"  name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control" onkeyup="checkName()" onblur="checkName()">
        <span id="nameErr" style="color:red"></span><br>

				<label style="color: white; font-size:20px;"  for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="lname" value="<?php echo $row['lastname']; ?>" class="form-control" onkeyup="checkLName()" onblur="checkLName()">
        <span id="lnameErr" style="color:red"></span><br>


				<label style="color: white; font-size:20px;"  for="address">Address</label>
				<textarea rows="4" id="address"  name="address" class="form-control"  onkeyup="checkAdd()" onblur="checkAdd()"><?php echo $row['address']; ?></textarea><span id="addErr" style="color:red"></span><br><br>
				<label style="color: white; font-size:20px;"  for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact"  value="<?php echo $row['contact']; ?>" class="form-control" onkeyup="checkContact()" onblur="checkContact()">
        <span id="contactErr" style="color:red"></span><br>
				<br>


				<input style="font-size:20px; "  type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<br>

 <div style="color:white; text-align:center ">

<?php 

 require_once 'footer.php';
 ?>
</div>
</div>
</div>
</div>
</div>
</body>
