 <style >
      .error {color: #FF0000;}

    
  footer {
  text-align: center;
  padding: 3px;
  background-color: green;
  color: white;
}

  
 
    </style>
    <meta charset="utf-8">
    <title>Profile</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>


    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <nav class="navbar navbar-expand-lg navbar-dark">
     <a href="#" class="navbar-brand">Change Password</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <!-- <ul class="navbar-nav"> -->
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="dashboardView.php" class="nav-link">Back</a> 
                   
                </li>
               <!--  <li class="nav-item">
                    <a href="viewProfileView.php" class="nav-link">View Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="editProfileView.php" class="nav-link">Edit Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="changePasswordView.php" class="nav-link">Change Password</a>
                </li> -->
                 <li class="nav-item">
                    <a href="../Controller/logoutController.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>

    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <section id="banner">
        <div class ="container">
            <div class="row">
                <div class="col-md-10">
                    <h1></h1>
                   
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<p align='middle' </p>
  <!--  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 -->
   <h1 style="/*border:1px; border-style:solid; border-color: gray; padding: 1em;*/  text-align: center; font-size: 20px; background-color:rgb(); "   
<br><br>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <?php  
  session_start();

  if (isset($_SESSION['uname'])) {

    
  echo "";

  

}
else{
    $msg="error";
    header("location:loginView.php");
    // echo "<script>location.href='index.php'</script>";
  }
  



if (isset($_SESSION['uname'])) {

    
  echo "";

  

}
else{
    $msg="error";
    header("location:loginView.php");
    // echo "<script>location.href='index.php'</script>";
  }

 ?>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <legend><h2>Change Password</h2></legend><br>
    
    <form method="post" action="../Controller/changePasswordController.php">
        Current Password: <input type="Password" name="cpassword" >
        <br><br><br>
        <span style="color:blue">New Password:</span>
        <input type="Password" name="npassword" >
        <br><br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="Password" name="rnpassword" >
        <br><br><br>
        <input style="color:blue" type="submit" name="submit" value="Submit">
        <br><br><br>
  
    </form>
     
  </body>
</html>
</script>
</script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>
</body>
</html>          
    </section>
   </div>
</section>

</script>

         
    </section>

<!-- <form style="border:1px; border-style:solid; border-color: gray; padding: 0.5em;  text-align: center; font-size: 15px; background-color:#FFFAFA; " method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->

  <!-- Content here -->
 <!--  <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->




</div>
</body>

</html>
  </body>
</html>