<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="myScript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<div class="bg">
    <div class="w3-row">
            <div class="w3-col s4 w3-center" style="padding-left:5px;">
                    <div class="row"  style="padding-top:10px;">
                        <div class="column">
                            <img src="img/rivi0.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi1.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi2.jpg"style="height:230px; width:150px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="img/rivi3.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi4.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi5.jpg"style="height:230px; width:150px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="img/rivi6.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi7.jpg"style="height:230px; width:150px;">
                        </div>
                        <div class="column">
                            <img src="img/rivi9.jpg"style="height:230px; width:150px;">
                        </div>
                    </div>
            </div>
                <div class="w3-col s6 w3-center">
                        <h1 class="otsikko">Tässä testataan perintä metodin toimintaa kirjan ja kirjan tekijöiden avulla</h1>
                        <div class="container-fluid">
                        <p">Tässä $kirjoittaja muuttujaan tehdään uusi olio luokkaan kirjoittajat, johon voidaan vaihtaa haluamamme
                            kirjoittaja ja kirjan nimi. Kirjoittaja ja kirja luokat periytyvät erillisistä php tiedostoista.</p>
                            <?php
                            include("kirjoittaja.php");

                            $kirjoittaja = new kirjoittajat("Sharp Ends", "Joe Abercrombie");
                            $kirjoittaja->listaa();
                            ?>
                        <form action="/tulostus.php" style="padding-top:25px;">
                        <label for="kirja">Kirja:</label>
                        <input type="text" id="nimi" name="kirja">
                        <label for="kirjoittaja">Kirjoittaja:</label>
                        <input type="text" id="kirjoittaja" name="kirjoittaja">
                        <input type="submit" value="Submit">
                        </form>
                        </div>
                </div>


      
    </div>
</div>
</body>
</html>