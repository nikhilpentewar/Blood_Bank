<?php
$conn = mysqli_connect('localhost', 'root', '', 'bloodbank') or die('connection failed');
if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $messages = $_POST['messages'];

   $insert = mysqli_query($conn, "INSERT INTO `message`(name, email, number, message)
   VALUES('$name','$email','$number','$messages')") or die('query failed');

   if ($insert) {
      $message[] = 'Message sent successfully!';
   } else {
      $message[] = 'Something wents wrong';
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("./partials/header.php") ?>
   <title>Blood Bank Management System</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- nav -->

   <?php include("./partials/nav.php") ?>

   <!-- home section -->

   <section class="home" id="home">
      <div class="container">
         <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
               <h3>Don’t be “A negative”, be “O positive”</h3>
               <p>The blood you donate gives someone another chance at life. One day that someone may be a close
                  relative, a friend, a loved one—or even you.</p>
               <a href="donate.php" class="link-btn">Donate Blood</a>
            </div>
         </div>
      </div>
   </section>

   <!-- about section -->

   <section class="about" id="about">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6 image">
               <img src="images/contact.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
               <span>about us</span>
               <h3>About Blood Bank</h3>
               <p>Blood banking is the process that takes place in the laboratory to ensure that donated blood, or blood
                  products, are safe before they are used in blood transfusions and other medical procedures. Blood
                  banking includes typing the blood for transfusion and testing for infectious diseases.The term "blood
                  bank" typically refers to a division of a hospital where the storage of blood product occurs and where
                  proper testing is performed (to reduce the risk of transfusion related adverse events). However, it
                  sometimes refers to a collection center, and indeed some hospitals also perform collection.</p>
            </div>
         </div>
      </div>
   </section>

   <!-- services section -->

   <?php include("./partials/services.php") ?>

   <!-- contact section -->

   <section class="details" id="details">
      <h1 class="heading">Contact Us</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>Your Name :</span>
         <input type="text" name="name" placeholder="enter your name" class="box" required>
         <span>Your Email :</span>
         <input type="email" name="email" placeholder="enter your email" class="box" required>
         <span>Your Number :</span>
         <input type="number" name="number" placeholder="enter your number" class="box" required>
         <span>Message :</span>
         <input type="text" name="messages" placeholder="message" class="box" required>
         <input type="submit" value="contact us" name="submit" class="link-btn">
      </form>
   </section>

   <!-- footer section -->

   <?php include("./partials/footer.php") ?>

</body>

</html>