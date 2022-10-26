<!DOCTYPE html>
<?php session_start();?>
<?php 
	/*if(empty($_SESSION["name"])){
		session_destroy();
		exit(header("location:login11.php"));
	}*/
  $error ="";
  $msg ="";

  $dbuser = "root";
  $dbpw = "";

  try{
    $conn = new PDO('mysql:host=localhost; dbname=pizzaproject', $dbuser, $dbpw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
    echo "Adatbázis hiba: ".$e->getMessage(); 
    die();
  }catch(Exception $e){
    echo "Hiba: ".$e->getMessage();
    die();
  }

?>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>Felhasználói adatok</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel = "stylesheet" href="style.css">
   <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">*/
<head>
 <header class="head">
       <h1>Ciao&nbsp;<i class="fas fa-pizza-slice"></i> &nbsp;Pizza</h1>
      <nav class="navbar">
           <a href="index.1.php">Rólunk</a>
          <a href="Pizzas.php">Pizzáink</a>
           <a href="Pizza_order_form.php">Kosar</a>
           <a href="registration.php">Felhasználói adatok kezelése</a>
        </nav>
   </header>
    <style>
      .menu {
    float: left;
    width: 20%;
    text-align: center;
    background-color : white; 
    padding : 1vw;
    border : solid 2px;
    height : 250px;
    border-radius : 5px;
  }
  title {
    paddig-top :20px;
  }
  .ize {
    background-color : white; 
    padding-top : 5px;
    margin : 1vh;
    border-radius : 5px;
    font-size : 12px;
  }
  
  #fieldset {
    border : solid 3px black;
    border-radius : 5px;
    background-color : white;
    padding-top : 20px;
  }
  
  .kozepso_resz {
    background-color :white;
    border-radius : 5px;
    margin-top :50px;
  }

  
      </style>
</head>
  
<fieldset id="fieldset">
  	<legend class="ize">Felhasználói adatok módosítása</legend>
    
  	<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
   
      <div class="kozepso_resz">
      <h3>Felhasználói adatok módosítása</h3>
  		<label class="ize" for="login">Felhasználónév</label><br>
  		<input class="ize" type="text" name="username" id="login"><br>
		  <label class="ize" for="pwnew">Új jelszó</label><br>
		  <input class="ize" type="password" name="pwnew" id="pwnew" value=""><br>
  		<label class="ize" for="pwnew2">Új jelszó újra</label><br>
  		<input class="ize" type="password" name="pwnew2" id="pwnew2" value=""><br>
      <?php if(!empty($error)){echo "<p class='error'>".$error."</p>\n";} ?>
      <?php if(!empty($msg)){echo "<p class='msg'>".$msg."</p>\n";} ?>
  		<input class="ize" type="submit" name="profilSave" value="Ment" style="width : 100px; border : solid 2px;">
      <div class="right">
	<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>
		<input type="submit" name="logout" class="logout" value="Kijelentkezés">
	</form>
    
    </div>
	</form>
</fieldset>
</form>
</body>
</html>