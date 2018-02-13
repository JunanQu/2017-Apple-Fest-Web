<?php
  session_start();
  $FirstName = $_SESSION['fname'];
  unset($_SESSION["fname"]);
  $LastName = $_SESSION['lname'];
  unset($_SESSION["lname"]);
  $feedback = $_SESSION["FeedBack"];
  unset($_SESSION["FeedBack"]);
  $Email = $_SESSION["Email"];
  unset($_SESSION["Email"]);
  $Day = $_SESSION["Day1"];
  unset($_SESSION["Day1"]);
  $Rate = $_SESSION["Rate"];
  unset($_SESSION["Rate"]);
  $submit = $_REQUEST["submitButton"];
  $Willingness = $_SESSION["Willingness"];

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
  <script type="text/javascript" src="scripts/site2.js"></script>
  <script type="text/javascript" src="scripts/clientValidation.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Thank you!</title>
</head>

<body>


<?php
   include "includes/navigation.php";
 ?>

<div id="action-container" class="container">



  <h1>
    <?php if (!empty($FirstName && $LastName)) {
        echo "Hello, ";
        echo (htmlspecialchars($FirstName));
        echo " ";
        echo (htmlspecialchars($LastName));
      }?>
  </h1>

  <?php if (null === $FirstName) {
  echo "Thank you for visiting our website!";
  $Willingness = "123";
  } else {
  echo "";
  }?>

  <p>
   <?php if (ISSET($Day)) {
     echo "Thank you for visiting us on " . (htmlspecialchars($Day));
     echo ".";
   } if ($Willingness === "none") {
     echo "I am sorry to hear you cannot attend. ";
   }

   ?>
   <?php  if (ISSET($Rate)) {

   echo "You have rated ";
   echo (htmlspecialchars($Rate));
   echo " for this website.";
 }?>
 </p>
  <p><?php
    if (!empty($feedback)) {
    echo "We value your thought : ";
    echo (htmlspecialchars($feedback));
    echo "!";
  }  ?>
  </p>
  <p>  <?php
       if (strlen($Email)){
         echo "And more information will be sent to ";
         echo ($Email );
         echo "!";
       }
       ?>

     </p>

  <div id="footer-action">
  <?php
      include "includes/footer.php";
  ?>
  </div>

</div>
</body>
</html>
