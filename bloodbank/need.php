<?php

include('./connect.php');

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $blood = $_POST['blood'];
   $bunit = $_POST['bunit'];
   $dname = $_POST['dname'];
   $city = $_POST['city'];
   $address = $_POST['address'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $date = $_POST['date'];
   $reason = $_POST['reason'];

   $query = mysqli_query($conn, "INSERT INTO `need_blood`(name,gender,blood,bunit,dname,city,address,contact,email,date,reason) 
 VALUES ('$name','$gender','$blood','$bunit','$dname','$city','$address','$contact','$email','$date','$reason')") or die('query failed');

   if ($query) {
      $message[] = 'Your request sent successfully!. Admin will contact you soon...';
   } else {
      $message[] = 'Something wents wrong';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("./partials/header.php") ?>
   <title>Need Blood</title>

</head>

<body>
   <header class="header fixed-top">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <a href="index.php" class="logo">Blood<span>Bank</span></a>
            <nav class="nav">
               <a href="index.php">Home</a>
               <a href="donate.php">Donate Blood</a>
               <a href="index.php#details">Contact Us</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
         </div>
      </div>
   </header>

   <section class="details" id="details">

      <h1 class="heading">Need Blood to save life</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>Patient Full Name :</span>
         <input type="text" name="name" placeholder="enter patient name" class="box" required>

         <span>Gender :</span><br>
         <select name="gender" class="box" style="color:#666">
            <option value="">enter your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
         </select>
         <br>

         <span>Required Blood Group :</span><br>
         <select name="blood" class="box" style="color:#666">
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

         <span>Unit of Blood :</span>
         <input type="number" name="bunit" placeholder="enter unit of blood" class="box" required>

         <span>Doctor Name :</span>
         <input type="text" name="dname" placeholder="enter Doctor Name" class="box" required>

         <span>Your City :</span>
         <select name="city" class="box" style="color:#666">
            <option value="">Select Your City</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nashik">Nashik</option>
            <option value="Shambhaji Nagar">Shambhaji Nagar</option>
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

         <span>Hospital Name & Address :</span>
         <input type="text" name="address" placeholder="enter hospital address" class="box" required>

         <span>Your Contacrt :</span>
         <input type="number" name="contact" placeholder="enter your contact" class="box" required>

         <span>Your Email ID :</span>
         <input type="email" name="email" placeholder="enter your email" class="box" required>

         <span>when Required :</span>
         <input type="date" name="date" placeholder="" class="box" style="color:#666" required>

         <span>Reason For Blood :</span>
         <input type="text" name="reason" placeholder="enter the reason for blood" class="box" required>

         <input type="submit" value="Register Now" name="submit" class="link-btn">
      </form>

   </section>

   <?php include("./partials/footer.php") ?>
</body>

</html>