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
  <title>Vendors</title>
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

    <form id="realform" action="/vendors.php" method="get" name="realform" novalidate>
      <?php
          include "includes/form.php";
      ?>
    </form>
  </div>
  </aside>


  <div id="container">
    <div id="craft">
      <h1 class="schedule" id="cvtitle">Craft Vendors:</h1>
      <ul class="cv">
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.kissedbythesunspiceco.com/">  Kissed by the Sun Spice Company</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://laurelobrienjewelry.com/"> Laurel O'Brien Jewelry</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.chopshopstore.com/">The Chop Shop Studio</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.etsy.com/shop/elizabethlassing">Elizabeth Lassing Jewelry</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.lunaseatrading.com/">Luna Sea Trading</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.etsy.com/shop/GoldenHandsDesign">Golden Hand Design Golden Hand Designs</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.wise-gadgets.com/">Wise Guyz Gadgets</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.davesartden.com/">Dave's Art Den</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://store.eriverstone.com/">Riverstone jewelry</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.lightandphoto.com/">Colin D. Young Photography </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://lunadoncella.com/">Helena's Organic Garden </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.weathertopfarm.com/">Weathertop Farm</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.whattheforkfoodblog.com/">What The Fork</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/hrlmscreations/">HRLMScreations</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.callib.com/store/c1/Featured_Products.html">Calli b.</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.aosmetals.com/">AOS Metals</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.crescentmoon.com/">Crescent Moon Studio </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.hookedproductions.com/">Hooked Productions</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.millhillarts.com/upcoming-shows.html">Mill Hill Arts</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/ClayFormed-Artworks-723425071129012/">ClayFormed Artworks</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.elandesignstudio.in/">Elan Design Studio</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.malabar-glass.com/">Malabar Glass </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.sugarhillarabians.com/about-us.html">Sugarhill Farm</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.pickledpunksplush.com/">Pickled Punks Plush</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://joesleatherandlace.com/">Leather and Lace</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.onhandlotions.com/tag/ithaca/">On Hand Lotions</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://second-season.myshopify.com/">Second Season Mittens</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/SunshinesCreativeDesigns/">Sunshine's Creative Designs</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://moonrabbitpress.com/">Moon Rabbit Press</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/Spirited-Servers-Gifts-285523731608373/">Spirited Servers Gifts</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/Two-Twigs-Together-580772188768019/">Two Twigs</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.turquoiseterrapin.com/">Turquoise Terrapin</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.lakebones.com/">Lake Bones</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://earcuffgirl.com/">The Ear Cuff Girl</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.wildharveststudio.com/">Wild Harvest Studio</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.weatheredheather.com/">Weathered Heather Art Glass Jewelry by Heather Bivens </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://marikachew.com/">Marika Chew Watercolor </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.etsy.com/shop/PaperWolfDsgn">Paper Wolf Design</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://bonfirecraft.com/">Bon Fire Craft</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.mastercraft.com/">Mastercraft</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.walnutridgecare.com/design-features/">Walnut Ridge Designs</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.youtube.com/channel/UCfqePjq9kX7YeZIBpILV0Qg">Carly's Corner </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://schweigarts.com/">Schweigart's Sugar Shack</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.621creations.com/">621 Creations</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://katievaz.com/">Katie Vaz Design</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/Athensartsfest/photos/pb.146666658732687.-2207520000.1463059139./1045462672186410/?type=3">Drake Hill Woodworking</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://cmgoodenburyphotography.com/about/">CM Goodenbury Photography</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://puccoonraccoon.com/">Puccoon Raccoon Jewelry</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.yopeanut.com/">Saratoga Peanut Butter Company</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.manta.com/c/mmz2f50/high-point-crafts">https://www.manta.com/c/mmz2f50/high-point-crafts</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.leighhannan.com/">Skelly Chic</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.google.com/search?q=Sundaes+Best+Hot+Fudge+Sauce&ie=utf-8&oe=utf-8">Sundaes Best Hot Fudge Sauce</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/Mediterranean-Basil-Salt-556345441087973/">Mediterranean Basil Salt</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.kingsleystreet.com/">Kingsley Street Artisan Soaps</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.carriegeorgeleather.com/">Carrie George Leather </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.elaangreenfielddesigns.com/">Elaan Greenfield</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.nativecraftsworld.com/">Southwest Expressions</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.festiveface.com/">http://www.festiveface.com/</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.facebook.com/LuLaRoeLoriOreilly/?ref=page_internal">Lularoe Lori O'Reilly</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.buriedtreasuresboston.com/">Barried Treasures</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.indigomoon.us/">Indigo Moon</a></li>
      </ul>
    </div>

    <div id="food">
      <h1 class="schedule" id="foodlist">Food:</h1>
      <ul class="cv">
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.ithaca.com/silo-food-truck-tries-for-a-second-win/article_987397d0-8d97-11e7-b75f-9faed67cdd1c.html">Silo Food Truck</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.google.com/search?q=Let%27s+Roll+Gourmet+Egg+Rolls&ie=utf-8&oe=utf-8">Let's Roll Gourmet Egg Rolls</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.kettlecornshoppe.com/">Kettle Corn Shoppe</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.newdelhidiamonds.com/">New Delhi Diamonds Indian Restaurant</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.simplytrinicooking.com/">Trini Style </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.omnomnomelettes.com/">OmNomNomelettes</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.sangamindianrestaurant.com/">Sangam Indian Cuisine</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://ithacavoice.com/2016/06/ithacas-congo-square-market-music-trade-food/">Ithaca Congo Square Market</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.pdrscatering.com/">PDR Catering </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.onthestreetpitas.com/menu.html">On The Street</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://squareup.com/store/BandBKettleKorn">B&#38;B Kettle Korn</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.ithacathaibasil.com/menu.aspx">Thai Basil</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://gatewaykitchenithaca.com/8895">Gateway Kitchen</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.monksonthecommons.com/">Monks On The Commons</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.vaporking.com/">Silent City Coffee </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.visitithaca.com/dining/tibetan-momo-bar">Tibetan Momo Bar</a> </li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.bellapizza.com/">Bella Pizza</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.visitithaca.com/dining/center-cafe">The Center Cafe</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.agricolehospitality.com/coltivare/">Coltivare</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.playlandamusements.com/">http://www.playlandamusements.com/</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.dosamigostacos.com/">Dos Amigos</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.macarollin.com/">Macarollin</a></li>
      </ul>
    </div>

    <div id="farmers">
      <h1 class="schedule" id="farmertitle">Farmer:</h1>
      <ul class="cv">
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.blackduckcidery.com/?v=7516fd43adaa">Blackduck Cidery</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://blogs.cornell.edu/soho/">Student Society of Horticulture(SoHo) </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.thepiggery.net/">The Piggery</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://ajteeterfarm.com/">A J Teeter Farm </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.evescidery.com/">Eve's Cidery</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.fingerlakesciderhouse.com/">http://www.fingerlakesciderhouse.com/</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://bakersacres.net/">http://bakersacres.net/</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.seveys.com/Schoolyard/index.htm">Schoolyard Sugarbush</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://indiancreekithaca.com/">Indian Creek Farm</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="">https://www.facebook.com/robbiesproduce/</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.littletree-orchards.com/cider-donuts-slushies.html">Littletree Orchards (Apple Cider Donuts) </a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://cremecycles.com/">CreamCycleLittle</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.ryanwilliam.com/">Ryan William Vineyard</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.crookedcarrotithaca.com/">Crooked Carrot</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="http://www.cidery.com/">Bellwether Hard Cider</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://wagnervineyards.com/">Wagner Vineyards</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://laughinggoatfiber.com/">Laughing Goat Fiber</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.thousandislandswinery.com/">Thousand Islands Winery</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.lakelandwinery.com/">Lakeland Winery</a></li>
        <li class="cv"> <a class="vendors" target="_blank" href="https://www.mapleriversyrup.com/">Maple River Syrup Company</a></li>
      </ul>
     </div>
   </div>

   <div id="vendorcitation">
     ©http://www.downtownithaca.com/ithaca-events/35th%20Apple%20Harvest%20Festival%20Presented%20by%20Tompkins
   </div>

   <div id="footer">
     <?php
         include "includes/footer.php";
     ?>
   </div>

</div>
</body>
