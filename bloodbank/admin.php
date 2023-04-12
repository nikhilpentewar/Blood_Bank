<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("./partials/header.php") ?>
   <title>Admin login</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <?php include("./partials/nav.php") ?>

   <section class="details" id="details">
      <h1 class="heading">Admin Login</h1>

      <form method="POST">
         <span>Userame :</span>
         <input type="text" name="adminname" placeholder="Username" class="box" required>
         <span>Passward :</span>
         <input type="password" name="adminpassword" placeholder="Password" class="box" required>
         <input type="submit" value="Sign In" src="./index.php" name="signin" class="link-btn">
      </form>

   </section>

   <?php
   if (isset($_POST['signin'])) {
      $query = "SELECT * FROM `admin_login` WHERE `admin_name`='$_POST[adminname]' AND `admin_password`='$_POST[adminpassword]'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) == 1) {
         session_start();
         $_SESSION['AdminloginId'] = $_POST['adminname'];
         header("location: admin panel.php");
      } else {
         echo "<script>alert('Incorrect Password or Username')</script>";
      }
   }
   ?>

   <section class="footer">
      <div class="credit"> copyright &copy;
         by <span>Blood Bank</span>
      </div>
   </section>
   <script src="js/script.js"></script>

</body>

</html>