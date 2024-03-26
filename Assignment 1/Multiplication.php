<!DOCTYPE html>
   <html>
       <header>
         <body bgcolor="skyblue"></body>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Result</title>
       </header>
       <body style="text-align: center;">
          <h1 style="font-size: 70px;color: orangered;">welcome to simple program</h1>
          <img src="./brav.jpg" alt="brav.image" width="150" height="100"><br>
          <?php
             if($_SERVER["REQUEST_METHOD"]=="POST") {
                 $fname = $_POST['fname'];
                 $lname = $_POST['lname'];
                 $num1 = $_POST['num1'];
                 $num2 = $_POST['num2'];
                 $mult = $num1 * $num2;
                 $fullname =$fname." ".$lname;
                 echo "<h1> Hello $fullname </h1>";
                 echo "<marquee><p><h1> <i>Your answer from Multiplication of two numbers is equal to : $mult </marquee></h1></p></i>";
              }
          ?>
       </body>
   </html>