<?php
session_start();
include("../Controller/SessionController1.php");
require("../Controller/editProfileController.php");
require("../Controller/editProfileC.php");

$user = fetchUser($_SESSION['uname']);
?>



<!DOCTYPE html>
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
     <a href="#" class="navbar-brand">Edit Profile</a>
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

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <legend></legend>

<html>
    <head>
       
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <script type="text/javascript" src="../Javascript/editProfile.js" ></script>
        <title>BHMS</title>
    </head>

    <body>
        <header>
           
        </header>


        <section>
            

            <panel>
                <form name="edit" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <table>
                        <tr>
                            <th>Username</th>
                            <td><?php echo $user['Username'] ?>
                        </th>
                        <tr>
                            <th>Name</th>
                            <td><input class="input" name="fname" id="fname" type="text" value="<?php echo $user['Full_Name'] ?>" onkeyup="change(this)" >&nbsp<span id="fnameErr"><?php echo $fnameErr;?></span></td>
                        </tr>
                            <th>Email</th>
                            <td><input class="input" name="email" id="email" type="text" size="25" value="<?php echo $user['Email'] ?>" onkeyup="change(this)" >&nbsp<span id="emailErr"><?php echo $emailErr;?></span></td>
                        </tr>
                            <th>Phone</th>
                            <td><input class="input" name="phone" id="phone" type="text" value="<?php echo $user['Phone'] ?>" onkeyup="change(this)" >&nbsp<span id="phoneErr"><?php echo $phoneErr;?></span></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input class="input" name="address" id="address" type="text" size="40" value="<?php echo $user['Address'] ?>" onkeyup="change(this)" >&nbsp<span id="addressErr"><?php echo $addressErr;?></span></td>
                        </tr>
                    </table>

                    <input type="submit" value="Update" name="EditUser" class="button" style="align-self:center">
                    <input type="reset" class="button">
                </form>
            </panel>
        </section>

        </script>
<div></div><br><br>
         
    </section>
<footer>
  <?php 
 include 'footerView.php';?>

</footer>
    </body>