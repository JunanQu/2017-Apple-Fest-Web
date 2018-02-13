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
  <title>Fest Map</title>
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

    <form id="realform" action="festival_map.php" method="post" name="realform" novalidate >
      <?php
          include "includes/form.php";
      ?>
    </form>
  </div>
  </aside>



 <div>
  <img id="map" src="image/map.jpg" alt="map">
  <article class="content">
    <h1 class="map">West End (3 blocks of Cayuga Street, The State Theater Block, and Press Bay Alley)</h1>
    <p>
      On the west end you can find Carnival and Street Food, Exhibitors, Antique Car Shows, Hand Made Crafts and Fine Art. Heading east the walking path of the festival takes you by the large mural project in the Commons of over 200 different art pieces by local organizations and artists as well as the myriad of local businesses one should pop into. The 2nd Annual Sweet Ride Car Show, a new addition in 2013, will take place Saturday, October 4 & Sunday October 5, 10am-4pm both days in the lots behind Press Bay Alley on the corner of Green Street & Albany Street. Festival goers can expect to find DJed music, door prizes, and more. All proceeds donated to the Rotary International End Polio Now Campaign and is sponsored by businesses in and around Press Bay Alley, Life’s So Sweet Chocolates, Brightworks Computer Consulting, Amuse, Boxy Bikes, Ithaca Generator and the Downtown Ithaca Alliance.
    </p>
    <h1 class="map">East End (200 & 300 North Aurora Street)</h1>
    <p>
      The eastern hub is full of fall time fun with large amusement rides and games, Aurora Street Fairway Sound Stage, Farmer’s Market, and Nonprofit educational booth. What is one interesting fact about Ithaca that visitors might learn while attending this festival? Ithaca was named by Bon Appetit Magazine as one of the foodiest towns in America and is home to the famous Moosewood Restaurant. Ithaca has more restaurants per capita than New York City and its unique placement as an urban center within an agricultural region allows for amazing farm to table cuisine. Our farmers market is one of the best in the country and the ice cream sundae was invented here! Apple Harvest festival embodies this spirit in bringing our culinary and agricultural values to the forefront.
    </p>
    <p>
      ©Article by http://christinegeeng.com/test/where.html
    </p>
  </article>
 </div>

 <div id="footer">
   <?php
       include "includes/footer.php";
   ?>
 </div>

 </div>
