<?php

include('./connect.php');

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $blood = $_POST['blood'];
   $bodyw = $_POST['bodyw'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $city = $_POST['city'];
   $address = $_POST['address'];
   $ndoner = $_POST['ndoner'];

   $query = mysqli_query($conn, "INSERT INTO `doner_reg`(name,gender,blood,bodyw,email,number,city,address,ndoner) 
 VALUES ('$name','$gender','$blood','$bodyw','$email','$number','$city','$address','$ndoner')") or die('query failed');

   if ($query) {
      $message[] = 'Your request sent successfully!.';
   } else {
      $message[] = 'Something wents wrong';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("./partials/header.php") ?>
   <title>Join as a Doner</title>
</head>

<body>
   <header class="header fixed-top">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <a href="index.php" class="logo">Blood<span>Bank</span></a>
            <nav class="nav">
               <a href="index.php">Home</a>
               <a href="need.php">Need Blood</a>
               <a href="index.php#details">Contact Us</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
         </div>
      </div>
   </header>
   <section class="details" id="details">
      <h1 class="heading">Join as a Doner</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>Your Full Name :</span>
         <input type="text" name="name" placeholder="enter your name" class="box" required>

         <span>Gender :</span><br>
         <select name="gender" class="box" style="color:#666" required>
            <option value="">enter your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
         </select>
         <br>
         <span>Blood Group :</span><br>
         <select class="box" name="blood" style="color:#666" required>
            <option value="">Select blood Group</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A1+">A1+</option>
            <option value="A2+">A2+</option>
            <option value="A1B+">A1B+</option>
            <option value="A2B+">A2B+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>
            <option value="A1-">A1-</option>
            <option value="A2-">A2-</option>
            <option value="A2B-">A2B-</option>
            <option value="A1B-">A1B-</option>
            <option value="A2B">Bombay O+</option>
            <option value="A2B">Bombay O-</option>
         </select>

         <span>Body Weight :</span>
         <input type="number" name="bodyw" placeholder="body Weight" class="box" required>

         <span>Your Email :</span>
         <input type="email" name="email" placeholder="enter your email" class="box" required>

         <span>Your Contacrt :</span>
         <input type="number" name="number" placeholder="enter your contact" class="box" required>

         <span>Your City :</span>
         <select name="city" class="box" style="color:#666" required>
            <option value="">Select Your City</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nashik">Nashik</option>
            <option value="Shambhaji Nagar">Chatrapati Shambhaji Nagar</option>
            <option value="Solapur">Solapur</option>
            <option value="Amravati">Amravati</option>
            <option value="Nanded">Nanded</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Latur">Latur</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Jalna">Jalna</option>
            <option value="Beed">Beed</option>
            <option value="Parli Vaijanath">Parli Vaijanath</option>
            <option value="Barshi">Barshi</option>
            <option value="Udgir">Udgir</option>
            <option value="Dharashiv">Dharashiv</option>
            <option value="Hingoli">Hingoli</option>
            <option value="Ahmednagar">Ahmednagar</option>
         </select>

         <span>Your Address :</span>
         <input type="text" name="address" placeholder="enter your address" class="box" required>

         <span>New Doner :</span><br>
         <select name="ndoner" class="box" style="color:#666">
            <option value="">select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
         </select>
         <label><input type="checkbox" checked> I have read the eligibility criteria and confirm that i am eligible to
            donate blood.</label><br>
         <label><input type="checkbox" checked> I agree to the Term and Conditions and consent to have my contact and
            donor information published to the potential blood recipients.</label><br>

         <input type="submit" value="Register Now" name="submit" class="link-btn">
      </form>
   </section>

   <?php include("./partials/footer.php") ?>

</body>

</html>