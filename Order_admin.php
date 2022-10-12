<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <title>Pizza ordering administration</title>
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

  $error ="";
  $msg ="";

  $dbuser = "root";
  $dbpw = "";

  try{
    $conn = new PDO('mysql:host=localhost; dbname=Advertisements', $dbuser, $dbpw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
    echo "Adatbázis hiba: ".$e->getMessage(); 
    die();
  }catch(Exception $e){
    echo "Hiba: ".$e->getMessage();
    die();
  }
  ?>
<head>
<body>

<?php
$servername = "localhost";
$username = "viki";
$password = "20241910";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<h1>Advertisements list</h1>
<fieldset id="fieldset">
<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
      <div class="kozepso_resz">
  		<label for="user" >Felhasználó</label><br>
      <label for="UserId",>"Azonosító:"<input type="text" name="id" id="id"> <br>
    <label for="Advertisement"> "Szolgáltatás:"<input type="text" name="name" id="name"> <br>
<?

</body>
<html>