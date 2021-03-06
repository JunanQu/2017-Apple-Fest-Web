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
  <title>Plan your visit</title>
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

     <form id="realform" action="/plan-your-visit.php" method="get" name="realform" novalidate>
       <?php
           include "includes/form.php";
       ?>
     </form>
   </div>
   </aside>

 <div class="second-container">

   <div>
     <img id="apple-pie" src="image/apple-pie.png" alt="pie">
   </div>

   <div id="tcat">
     <a target="_blank" href="https://www.tcatbus.com/content/uploads/2017/08/Fall2017_Ride-Guide_small.pdf" download>
       <h1 class="schedule">TCAT Schedule &#38; Service Guide Fall 2017</h1>
       <img id="tcatlogo" src="image/TCAT_logo.png" alt="tcat">
     </a>
   </div>

 <div id="garage">
  <article id="parking">
    <h1 class="schedule">Garage Parking Options</h1>
    <p>
      There are four parking garages in Ithaca. All garages are open 24/7.
    </p>

    <p>
      3 are located in Downtown Ithaca:  </p>
    <ul>
      <li>Green Street Garage</li>
      <li>Seneca Street Garage</li>
      <li> Cayuga Street Garage</li>
    </ul>

    <p>
      1 is located in Collegetown: Dryden Road Garage.
    </p>

    <p>
      All four parking garages are available for by the hour, all day and overnight parking.
      A $5.00 fee will also be in place in the Cayuga Garage.
      The special event parking charge will be collected from 9:30 a.m. - 4:30 p.m. Saturday and Sunday.
      If you currently have a parking permit for those garages, you will still be able to use it.
    </p>

    <a id="green-street-garage" target="_blank" href="https://www.google.com/maps/dir//42.4387551,-76.4966266/@42.4387901,-76.4987156,788m/data=!3m1!1e3">
      <p>
        Locate the Green Street Garage in Google Map
      </p>
    </a>

    <p class="citation">©http://www.ithaca.com/</p>
   </article>
  </div>

  <div id="location">
    <h1 class="schedule">Location</h1>
    904 East Shore Drive, Ithaca, NY 14850
    <br/>
    Phone: (607) 272-1313 |
    <br/>
    Toll Free: (800)-28-ITHACA
  </div>

  <div id="bankdiv">
    <h1 class="schedule">Bank &#38; ATM</h1>
     <article>
       <span id="bank">M&#38;T Bank</span>
       <br/>
       118 N Tioga St
       <br/>
       (marked on map)
     </article>
  </div>

  <div id="mtt">
    <img id="mttbank-logo" src="image/mtt-logo.png" alt="mttbank">
  </div>

  <div class="downtown-pic">
    <img  class="downtown-pic" src="image/downtown-pic.jpg" alt="downtown">
  </div>

   <div id="attractions">
    <article class="content">
      <p id="title-1"><strong>Things to Do in the Commons</strong></p>
      <ul>
        <li>Dine at the many delicious <span><a target="_blank" href="http://www.visitithaca.com/dining">restaurants</a></span></li>
        <li>Go to a show at the <span><a target="_blank" href="http://www.visitithaca.com/attractions/state-theatre-ithaca">State Theatre of Ithaca</a></span></li>
        <li>Discover the many <span><a target="_blank" href="http://www.visitithaca.com/attractions/galleries">galleries and artists in Ithaca</a></span></li>
      </ul>
    </article>
   </div>

 </div>

 <div id="footer">
   <?php
       include "includes/footer.php";
   ?>
 </div>

</div>
</body>
