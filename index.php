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
  <!-- <script type="text/javascript" src="scripts/clientValidation.js"></script> -->
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Welcome</title>
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

    <form id="realform" action="/index.php" method="get" name="realform" novalidate>
      <?php
          include "includes/form.php";
      ?>
    </form>
  </div>
  </aside>

 <div>
  <h1 id="date">September 30 - October 1</h1>
 </div>

 <div>
  <img id="image_one" src="image/image1.jpg" alt="image1">
 </div>

 <article class="content">
    <h1> Apple Harvest Fest This Weekend!</h1>
    <h2 id="author1"> By <em>Ithaca Times</em> </h2>
    <p>
      Ithaca's biggest autumn event is only a few days away. The Annual Downtown Ithaca Apple Harvest Festival presented by Tompkins Trust Company will take place this weekend, September 30 and Sunday.
    </p>

    <p>
      The community celebration, featuring fresh local food, handmade crafts, games, giveaways, and live performances, will be held on and around the Ithaca Commons pedestrian mall, 202 East State Street, Ithaca.
    </p>

    <p>
      More than 20 local farmers will be selling apples, cider, maple products, and other delectable seasonal produce and baked goods. Look for old favorites as well as new offerings. Littletree Orchards will return with their famous apple cider doughnuts and Laughing Goat Fiber Farm will once again bring its adorable goats to pet and their fiber to feel. Some of the new farmers include Robbie's Produce with its fresh and juicy apples and concord grapes and other freshly picked items and Raw Gold Honey with their all-natural honey varieties.
    </p>

    <p>
      If you're looking for a nice hot meal or snack, more than 20 food vendors will be serving up delicious dishes to suit every palate. Festival newcomers include Trini Style, who will set your taste buds ablaze with its Caribbean style curry and stew chicken and OmNomNomelettes will satisfy your breakfast inspired needs. Classic festival staples such as fried dough, blooming onions and pumpkin funnel cake will make their return.
    </p>

    <p>
      In addition to the farmers and foods, at least six dozen craft vendors from all over the community and the nation will converge in downtown Ithaca to display a cornucopia of handmade items.
    </p>

    <p>
      There will be a full lineup of acts set to take the stage throughout Saturday and Sunday at the Bernie Milton Pavilion on The Commons. This year's performance groups will be lead off with festival newcomer Punk Hands who will perform from 10 to 10:45 a.m. on Saturday. Festival rookies include the Wailin' Brass Band, Riley Owens, a Cornell University student, and the Indie Rock band Alter, which is comprised of former members from popular Ithaca group Second Dam, who will also perform on Saturday. Sunday's featured acts include Ithaca College's premier a capella groups Ithacapella, Premium Blend, and Voicestream, which will take the stage from 10 to 10:45 a.m., and local favorite NEO Project performing from 5:15 to 6:15 p.m.
    </p>

    <p>
      On the West State Street block there will be family-friendly performances from Farmer Tom, Hula Hut Polynesian Dance and the Strong Woman Show throughout the weekend.
    </p>

    <p>
      Concurrent with the Apple Harvest Festival, the Gnome and Fairy Fest will be held on Saturday from 10 a.m. to 5 p.m. at Press Bay Alley, 118 West Green Street, Ithaca. In addition, the First People's Festival, an annual celebration of indigenous culture coordinated by the Multicultural Resource Center, will be taking place at Dewitt Park, 315 North Cayuga St., Ithaca. The event will feature a traditional opening at 10 a.m., followed by live music, performances, arts and crafts, food vendors, children's activities, and a smoke dance competition.
    </p>

    <div id="footer">
      <?php
          include "includes/footer.php";
      ?>
    </div>

</article>

</div>
</body>
