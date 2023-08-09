<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="myscript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    
    <style>
        body{ font: 14px sans-serif; background-color: black; color: white;
            }
    .wrapper{ width: 350px; padding: 20px; }
   
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <!--header, Jumbotron, navbar-->

<!--collapsible navbar,-->
<nav class="navbar navbar-expand-md navbar-dark bg-black pt-3">
  <!--pow logo-->
  <img src="img/nav logo.png" alt="logo" style="width: 60px;">
  <!--welcome text-->
  <span class="navbar-text" style="color: yellow; text-shadow: 1px 1px red; font-size: x-large; margin-left: 10px; margin-right: 50px; font-family: cursive; font-weight: bold; font-style: oblique;">
    Wanted list sarjakuville 
  </span>
 <!--hamburger button-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

    
      
      <!--navbar links-->
      <li class="nav-item active">
      <li class="nav-item">
        <a class="nav-link" href="landing.php" style="color: white; margin-right: 30px;">Sarjistietokanta</a>
      </li>
       
    </ul>
  </div>
</nav>
  <br><br><br>

  <!--crest pulled left-->
  <div class="container pull-left" style="width: 320px; margin-left: 75px; margin-bottom: 30px;">
    <img class="img-fluid" src="img/1200px-Oulunsalo.vaakuna.svg.jpg" style="height: 420px;" width="300px">
</div>

<!--jumbotron store name etc.-->
<div class="jumbotron jumbotron-fluid" style="background-color: black;">
    <div class="container">
        <h1 class="display-4" style="font-family: cursive; color: blue; text-shadow: 2px 2px white">Sarjakuvahöttöä</h1>
        <p class="lead" style="font-family: cursive; color: white;">Sarjakuvia</p>
      </div>
</div>


<!--carousel-->
<div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
    <!--Indicators-->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
      </ul>
    <!--carousel images-->
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="Carousel img/2.jpg" alt="2" width="1000" height="500">
            </div>
          <div class="carousel-item">
                <img src="Carousel img/3.jpg" alt="3" width="1000" height="500">
            </div>
          <div class="carousel-item">
                <img src="Carousel img/4.jpg" alt="4" width="1000" height="500">
            </div>
          <div class="carousel-item">
                <img src="Carousel img/5.jpg" alt="5" width="1000" height="500">
            </div>
            <div class="carousel-item">
                <img src="Carousel img/6.jpg" alt="6" width="1000" height="500">
            </div>
            <div class="carousel-item">
              <img src="Carousel img/7.jpg" alt="7" width="1000" height="500">
          </div>
        
    </div>
      </div>
    </div>
  <br><br><br><br>
  
  <!--body, cards?-->

  <!--info-->
  <div class="container-fluid ml-4">
    <p style=" font-weight: bold;">Tähän voisi tulla tekstiä, että mitä sarjiksia omistan ja arvosanat niille tai jotain muuta höttöä</p>
    <br>
    <br>
    <p style="font-size: x-large; font-weight: bold;">Vaikkapa kuvia ja jotain muuta höttöä, kortteihin voi kans lisätä hyviä sarjiksia ja arvosanat</p>
  </div>
  <br><br>

  <!--products in cards-->

  <div class="row ml-5">
    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/astro.jpg" alt="Astro city: Life in a big city">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">Astro City</h5>
        <p class="card-text" style="color: black;">Aivan loistava sarjakuva, tarinoiden välillä jonkin verran vaihtelua, jotkut kirjat parempia, jotkut huonompia. Huonommat kirjat loppupäässä lukuunottamatta viimeistä kirjaa joka on erinomainen</p><br><br>
          <p style="color: green; font-weight: bold; font-size: large;"> Arvosana: 4 </p>
          <br>
      </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/the-boys-omnibus-vol-1-tpb.jpg" alt="The Boys Omnibus 1">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">The Boys</h5>
        <p class="card-text" style="color: black;">Todellä hyvä väkivaltainen ja härski sarjakuva. Hughien sooloseikkalut skotlannissa tylsä vaihe, paranee sen jälkeen uudelleen.</p>
        <br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana: 4</p>
      </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/invincible-compendium-volume-1.jpg" alt="Invincible Compendium 1">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">Invincible</h5>
        <p class="card-text" style="color: black;">Erittäin hyvä ja pitkä sarjakuva. Viitataan paljon populäärikulttuuriin. Menevä tarina ja ei oikeastaan tylsä juuri missään vaiheessa.</p></p>
        <br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana: 4,5</p>
      </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/ultimates.jpg" alt="Ultimates Omnibus">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">Ultimates</h5>
        <p class="card-text" style="color: black;">Hyvä tarina, ei tarvitse tietää sankareiden historiasta mitään, mikä on plussaa.</p></p><br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana: 4</p>
      </div>
    </div>
  </div>

  <div class="row ml-5">
    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
        <img class="card-img-top" src="card img/batman court of owls.jpg" alt="Batman Vol. 1 The Court Of Owls (The New 52)">
        <div class="card-body">
          <h5 class="card-title" style="color: black;">Transmetropolitan</h5>
          <p class="card-text" style="color: black;">Erinomaista cyberpunk scifiä poliittisilla mausteilla</p><br><br>
            <p style="color: green; font-weight: bold; font-size: large;">Arvosana 5</p>
        </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/authority omnibus.jpg" alt="The Authority Omnibus">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">The Authority</h5>
        <p class="card-text" style="color: black;">Ellisin osa erinomainen, Millarin osa huonompi</p></p><br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana 3,5</p>
      </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px">
      <img class="card-img-top" src="card img/dredd case files.jpg" alt="Judge Dredd: The Complete Case Files 35">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">ertertret</h5>
        <p class="card-text" style="color: black;">placeholder</p><br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana</p>
      </div>
    </div>

    <div class="card" style="width: 25rem; margin-right: 40px; margin-bottom: 20px;">
      <img class="card-img-top" src="card img/fear agent.jpg" alt="Fear Agent: Final Edition 1">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">fgdfgdfg</h5>
        <p class="card-text" style="color: black;">placeholder</p><br><br>
          <p style="color: green; font-weight: bold; font-size: large;">Arvosana</p>
      </div>
    </div>
  </div>

<!--footer, something here?-->
<footer>
  <div class="footer">
  <div class="row ml-4">
    <div class="col-6">
      <div style="padding-left: 10px;"><br><p>Yhteystiedot:<br>
        Oulunsalon Sarjakuvakauppa<br>
        c/o Oulunsalon Kapteeni<br>
        Käyntiosoite: Karhuojantie 2 90460 Oulunsalo<br>
        e-mail: oulunsalon@sarjakuvakauppa.fi<br>
        puh. 040 4626550</p>
      </div>
    </div>
    <div class="col-6">
      <div class="row mt-5">
        <a href="https://www.facebook.com" target="_blank"><img class="thumbnail" src="footer img/Facebook-logo-watercolor-social-media-icon-png.png" alt="facebook" width="70px" height="70px" style="margin-left: 10px;"></a>
        <a href="https://www.twitter.com" target="_blank"><img class="thumbnail" src="footer img/twitter-logo.png" alt="twitter" width="70px" height="70px" style="margin-left: 10px;"></a>
        <a href="https://www.instagram.com" target="_blank"><img class="thumbnail" src="footer img/instagram.png" alt="instagram" width="70px" height="70px" style="margin-left: 10px;"></a>
      </div>
    </div>
  </div>
</div>

</footer>
</body>
</html>