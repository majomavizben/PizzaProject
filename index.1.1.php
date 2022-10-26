<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
h1{background-color:red;
}
a active{color:black;}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bffb292e64.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<h1>Admin felület</h1>
<body>
<form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
      <div class="kozepso_resz">
Felhasználó kezelés <a href = "Users.php">Felhasználó</a></div> </a>
    Rendelés kezelése <a href = "Order_admin.php"> Megrendelések </a></div> </a>

</body>
</html>