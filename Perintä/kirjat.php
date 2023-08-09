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
class Kirjat {
    private $nimi;

    public function __construct($nimi) {
        $this->nimi = $nimi;
    }
    public function listaa() {
        echo "Kirjan nimi: {$this->nimi}. <br>";
    }
   
}
?>
</body>
</html>