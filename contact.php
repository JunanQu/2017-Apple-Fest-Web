<?php
$submit = $_REQUEST["submitButton"];
$FirstName = $_REQUEST["FirstName"];
$LastName = $_REQUEST["LastName"];
$feedback = $_REQUEST["feedback"];
$day = $_REQUEST["day"];
$rate = $_REQUEST["rate"];
$Email = $_REQUEST["email"];
$willingness = $_REQUEST["willingness"];
$HIDDEN_ERROR_CLASS = "hiddenError";


if (isset($submit)) {

  if (!empty($FirstName)) {
    $fnameValid = true;
  } else {
    $fnameValid = false;
  }

  if (!empty($LastName)) {
    $lnameValid = true;
  } else {
    $lnameValid = false;
  }

  if (!empty($feedback)) {
    $feedbackValid = true;
  } else {
    $feedbackValid = false;
  }

  if ($willingness === "none"){
    $day = null;
  }

  if (empty($Email)) {
    $emailIsValid = true;
  } if ( (filter_var($Email, FILTER_VALIDATE_EMAIL)) ) {
    $emailIsValid = true;
  }

  $formValid = $fnameValid && $lnameValid && $feedbackValid && $emailIsValid;


  if ($formValid) {
    session_start();
    $_SESSION["fname"] = $FirstName;
    $_SESSION["lname"] = $LastName;
    $_SESSION["FeedBack"] = $feedback;
    $_SESSION["Email"] = $Email;
    $_SESSION["Day1"] = $day;
    $_SESSION["Rate"] = $rate;
    $_SESSION["Willingness"] = $willingness;
    header("Location: action.php");
    return;
  }

} else {
    $emailIsValid = true;
    $fnameValid = true;
    $lnameValid = true;
    $feedbackValid = true;
  }

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
  <title>Contact Us</title>
</head>

<body>

  <?php
     include "includes/navigation.php";
   ?>

<div class="container" >
  <aside id="sidebar">
      <div>
        <p>
          <a href="https://hort.cals.cornell.edu/about/facilities/cornell-orchards">
        <img id="ads" src="image/orchards-logo.jpg" alt="cornell-orchards">
      </a>
    </p>
      </div>

      <div id="tags">
        <h3>Tags</h3>
        <ul>
          <li>Apples</li>
          <li>Apple Cider</li>
          <li>Vendors</li>
          <li>Local</li>
          <li>Crafters</li>
        </ul>
      </div>

      <div>
        <img class="ads" src="image/ads1.jpg" alt="ads1">
        <img class="ads" id="ads2" src="image/downtownithaca.jpeg" alt="ads2">
      </div>

  <div id="form">

    <form id="realform" action="/contact.php" method="get" name="realform" novalidate>
      <?php
          include "includes/form.php";
      ?>
    </form>
  </div>
  </aside>

  <div>
    <article id="contact">
    <h1 id="contact-name">Ithaca/Tompkins County Convention &#38; Visitors Bureau</h1>
        <p> <span id="contact-division">A division of the<strong>Tompkins County Chamber of Commerce</strong></span></p>
        <p id="address"><a id="google-map-address" href="https://www.google.com/maps/place/Ithaca-Tompkins+County+Convention/@42.465829,-76.4967806,15z/data=!4m5!3m4!1s0x0000000000000000:0xec3551e0ceda7feb!8m2!3d42.4643232!4d-76.500029">
         East Shore Visitors Center:</a>
        <br/>
        904 East Shore Drive, Ithaca, NY 14850</p>
        <p id="phone">Phone: (607) 272-1313 |
        <br/> Toll Free: (800)-28-ITHACA</p>
        <img id="visit-logo" src="image/Visit-ithaca-logo.png" alt="visit-logo">
        <br/>
      <div id="survey">
          <form id="form-1">
          Last name: <input type="text" name="LastName">
          <br/>
          First name: <input type="text" name="FirstName" id="firstname">

          <br/>
          Are you going to this festival?
          <br/>
          <select  name="willingness">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>

          <br/>
          Please rate this website
          <br/>
            <select name="rate">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <br/>
          Any improvements you'd like to recommend?
          <input type="text" name="feedback"></input>
          <input type="submit" value="Submit">
          </form>
        </div>
        ©Info from http://www.visitithaca.com/
    </article>


 </div>
</div>
