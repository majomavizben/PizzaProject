<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Administartion of the users</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
        text-align: center;
    }

    </style>
</head>
<?php 
	if(empty($_SESSION["name"])){
		session_destroy();
		exit(header("location:admin.php"));
	}
  $error ="";
  $msg ="";

  $dbuser = "root";
  $dbpw = "";

  try{
    $conn = new PDO('mysql:host=localhost; dbname=Users', $dbuser, $dbpw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
    echo "Adatbázis hiba: ".$e->getMessage(); 
    die();
  }catch(Exception $e){
    echo "Hiba: ".$e->getMessage();
    die();
  }
?>
</head>
<body>




<fieldset id="fieldset">
<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
      <div class="kozepso_resz">
  		<label class="ize" for="login">Felhasználónév</label><br>
    <label for="id"> "azonosító:"<input type="text" name="id" id="id"> <br>
    <label for="name"> "Név:"<input type="text" name="name" id="name"> <br>



</body>
</html>