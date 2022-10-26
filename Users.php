<?php
session_start();
?>

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
/*	if(empty($_SESSION["name"])){
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
  }*/
?>
</head>
<body>




<fieldset id="fieldset">

<h1>Felhasználók adatai</h1>
<div class="container">
     
  <table class="table table-hover">
    <thead>
    <legend class="ize">Felhasználói adatok módosítása</legend>
  	<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
    <tr>
        <td><label class="ize" for="login">Felhasználónév</label><br>
  		<input class="ize" type="text" name="username" id="login"><br>
    </td>
        <td>
        <label class="ize" for="login">Cím</label><br>
  		<input class="ize" type="text" name="cim" id="login"><br>
        </td>
        <td>
        <label class="ize" for="login">E-mail</label><br>
  		<input class="ize" type="text" name="email" id="login"><br>
        </td>
      </tr>
      <tr>
        <th>Teljes név</th>
        <th>Cím</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Szeged,Béke utca 5</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Szeged,Semmelweis u.5</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
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
</html>