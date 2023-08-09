<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("kirjat.php");

class kirjoittajat extends kirjat {
    private $kirjoittaja;

    public function __construct($nimi, $kirjoittaja) {
        parent::__construct($nimi);
        $this->kirjoittaja = $kirjoittaja;
    }

    public function listaa() {
        parent::listaa();
        echo "Kirjoittaja: {$this->kirjoittaja}. <br>";
    }
}
?>
</body>
</html>