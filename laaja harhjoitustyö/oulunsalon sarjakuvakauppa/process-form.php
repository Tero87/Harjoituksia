
<?php
require_once "config.php";

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$kpl=1;
$Kirjan_nimiErr="";
$Kirjan_nimi="";
$omistaja_id=$_SESSION["id"];


if (empty(trim($_POST["Kirjan_nimi"])))
    {
        $Kirjan_nimiErr ="kirjoita kirjan nimi";  
    }
        else
            {
                $Kirjan_nimi = trim($_POST["Kirjan_nimi"]);
            
                try 
                {
                
                    $sql = "INSERT INTO wantedlist (Kirjan_nimi, omistaja_id) VALUES ('$Kirjan_nimi', '$omistaja_id')";
                
                    $pdo->exec($sql);
                    echo "New record created successfully";
                } 
                    catch(PDOException $e) 
                    {
                        echo $sql . "<br>" . $e->getMessage();
                    }

                    $conn = null;
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Wanted list</title>
    <style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
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
    <a href="welcome.php" style= "color: yellow; text-shadow: 1px 1px red; font-size: x-large; margin-left: 55px; margin-bottom: 40px; font-family: cursive; font-weight: bold; font-style: oblique;">Back</a>
    <br>
    <br>
    <div class="container pull-left" style="width: 320px; margin-left: 55px; margin-bottom: 30px;">
    <img class="img-fluid" src="img/12.jpg" style="height: 420px;" width="300px">
</div>
    <div class="container">
  <h2>Wanted list!</h2>
  <p>Lisää sarjakuva jonka haluat lisätä wanted listalle.</p>
    <form class="form-inline" action="" method="post">
        <p>
            <label for="inputName">Tekijä ja kirjan nimi:</label>
            <input style="color: magenta; background-color:#39FF14;" type="text" name="Kirjan_nimi" value="<?php echo $Kirjan_nimi; ?>">
            <span class="error"><?php echo $Kirjan_nimiErr; ?></span>
        </p>
        <input style= "background-color:#FFFF00; color: pink;" type="submit" value="Send">
        <input style= "background-color:#FFFF00; color: cyan;" type="reset" value="Reset">
    </form>
    <?php
echo "<table style='border: solid 2px #39ff14;'>";
echo "<tr><th style='color: #E0E722;'>Wanted list kirjat</th>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:200px;border:solid 2px #39ff14;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
try {
    $stmt = $pdo->prepare("SELECT Kirjan_nimi FROM wantedlist");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
      ?>
  
    <td><a href="edit.php?id=<?php echo $data['id']; ?>" style='width:200px;border:solid 2px #39ff14;'>Edit</a><br></td>
    <td><a href="delete-process.php?id=<?php echo $data['id']; ?>" style='width:200px;border:solid 2px #39ff14;'>Delete</a></td>
  
<?php
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  echo "</table>";
  ?>
  </div>
      
</body>
</html>