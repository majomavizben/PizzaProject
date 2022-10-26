
<!DOCTYPE html>
<html lang="en">
<title>Administartion of the users</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      *{
        background-color: grey;
      }
        body{
        text-align: center;
    }
fieldset{
  background-color:red;
}
div{
  background-color:red;
}
label{
  background-color:red;
}
input{
  background-color:white;
}
h1{background-color:red;}

    </style>
</head>
<?php 

/*  $error ="";
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
  }*/
  ?>

<head>
<body>

<?php
/*$servername = "localhost";
$username = "viki";
$password = "20241910";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
*/
?>
<h1> Megrendelések</h1>
<fieldset id="fieldset">

<div class="container">
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Megrendelő</th>
        <th>Cím</th>
        <th>Megrendelt pizza</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Szeged,Béke utca 5</td>
        <td>Gombás pizza</td>
      </tr>
      <tr>
        <td>Szabó Marika</td>
        <td>Szeged,Semmelweis u.5</td>
        <td>Margatita pizza</td>
      </tr>
      <tr>
        <td>Benkő Júlia</td>
        <td>Szeged,HAJÓS U 28</td>
        <td>Négysajtos pizza</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
<html>
</body>
<html>