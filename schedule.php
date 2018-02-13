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
  <title>Schedule</title>
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

    <form id="realform" action="/schedule.php" method="get" name="realform" novalidate>
      <?php
          include "includes/form.php";
      ?>
    </form>
  </div>
  </aside>


 <div>
  <h1  id="berlin">BERNIE MILTON PAVILION</h1>
  <div id="schedule-1">
    <h1 class="schedule" id="sat-schedule">Saturday </h1>
    <ul class="event-list">
      <li class="event-list">10-10:45AM    <a class="show" target="_blank" href="http://www.icvoicestream.com/">IC Voicestream</a></li>
      <li class="event-list">11-11:45AM    <a class="show" target="_blank" href="https://www.facebook.com/events/1489681984440234/">Danza Romani</a></li>
      <li class="event-list">12-12:45PM    <a class="show" target="_blank" href="https://vitaminl.org/">Vitamin L</a></li>
      <li class="event-list">1:00-1:45PM   <a class="show" target="_blank" href="https://www.facebook.com/veedabee123/">Vee Da Bee</a></li>
      <li class="event-list">2:00-2:45PM   <a class="show" target="_blank" href="https://sunnyweather.bandcamp.com/">Sunny Weather</a></li>
      <li class="event-list">3:00-3:45PM   <a class="show" target="_blank" href="http://www.theonlyeems.com/">Eems</a></li>
      <li class="event-list">4:00-4:45PM   <a class="show" target="_blank" href="http://itsapartoflife.wixsite.com/dapperdan">Dapper Dan</a></li>
      <li class="event-list">5:00-6:00pm   <a class="show" target="_blank" href="https://papamuse.bandcamp.com/">Papa Muse</a></li>
    </ul>
  </div>

  <div id="schedule-2">
    <h1 class="schedule" id="sun-schedule">Sunday</h1>
    <ul>
      <li class="event-list">5:00-6:00pm     <a class="show" target="_blank" href="https://papamuse.bandcamp.com/">Papa Muse</a></li>
      <li class="event-list">11-11:45AM    <a class="show" target="_blank" href="https://www.facebook.com/sixteenfeathersband">Sixteen Feathers</a></li>
      <li class="event-list">12-12:45PM    <a class="show" target="_blank" href="http://www.csma-ithaca.org/index.html">Mirage Belly Dancers</a></li>
      <li class="event-list">1-1:45PM      <a class="show" target="_blank" href="http://thefeministsociety.tumblr.com/">Strong Woman Show</a></li>
      <li class="event-list">2-2:50PM      <a class="show" target="_blank" href="http://dianaleigh.com/">Diana Leigh Quintet</a></li>
      <li class="event-list">3:00-3:40PM   <a class="show" target="_blank" href="http://www.sciencecabaret.org/">Science Cabaret Presents: A Bite of Science</a></li>
      <li class="event-list">4:00-4:45PM   <a class="show" target="_blank" href="https://www.ithaca.edu/music/ensembles/vocaljazz/">Ithaca COllege Jazz Vocal Ensemble</a></li>
      <li class="event-list">5:15-6:15PM   <a class="show" target="_blank" href="https://www.facebook.com/NeoProjectBand/">NEO Project</a></li>
    </ul>
  </div>

</div>

<div id="west-div">
   <h1 id="west">West State Street Performance Area</h1>
   <ul>
     <li class="event-list">SATURDAY   1-145PM          <a class="show" target="_blank" href="https://fuse.ithaca.edu/gallery/1012/">ICircus</a></li>
     <li class="event-list">SATURDAY   3-3:45PM         <a class="show" target="_blank" href="http://ithacafestival.org/2017-performances/june-chandani-belly-dance-troupe-ithacas">June with Chandani Belly Dance Troupe</a></li>
     <li class="event-list">SUNDAY     2:00-2:45pm      <a class="show" target="_blank" href="http://ithacafestival.org/2017-performances/zajal-sugarplum-fairy-friends-storydance">Zajal the Sugarplum Fairy and Friends for StoryDance</a></li>
     <li class="event-list">SUNDAY     3:00-3:45pm      <a class="show" target="_blank" href="http://thefeministsociety.tumblr.com/">Strong Woman Show</a></li>
   </ul>
</div>

<div id="footer">
  <?php
      include "includes/footer.php";
  ?>
</div>

</div>
