<!DOCTYPE html>
<?php
    session_start();
    $error = "";
    $msg = "";
    $dbuser ="root";
    $dbpw = "";
     try{
        $conn = new PDO('mysql:host=localhost; dbname=pizzaproject', $dbuser, $user);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        echo "Adatbázis hiba: ".$e->getMessage(); die();
    }
    catch (Exception $e){
        echo "Hiba: ".$e->getMessage(); die();
    }
?>
<html lang="hu" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>   Bejelentkezés és Regisztráció</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #ad3708, #bd6c47);
}
::selection{
  background: #c4330f;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: gray;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #0e0509;
}
.form-inner form .field input::placeholder{
  color: rgb(196, 123, 123);
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #ad5f5f;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #130a0e;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background color: grey;
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: rgb(168, 127, 127);
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
#error {
  color : red;
}
      </style>
   </head>
   <body>
       <?php
        if (isset($_POST["login"])) {
            $username = trim($_POST["username"]);
            $password = trim($_POST["user_pw"]);
            if(!empty($username) && !empty($user_pw)){
                try{
                    $sql = "SELECT id,username,user_pw FROM users WHERE username=:username";
                    $queryLogin = $conn->prepare($sql);
                    $queryLogin->bindParam(":username",$username,PDO::PARAM_STR);
                    $queryLogin->execute();	
                    if($queryLogin->rowCount()==1){
                        $row = $queryLogin->fetch(PDO::FETCH_ASSOC);
                        if(password_verify($user_pw,$row["user_pw"])){
                            $_SESSION["name"] = $username;
                            exit(header("location:index.1.php"));

                        }else{
                            throw new Exception("Hibás jelszó");
                        }
                    }else{
                        throw new Exception("Hibás azonosító");
                    }
                }catch(PDOException $e){
                    $error = "Bejelentkezési adatlekérdezési hiba: ".$e->getMessage();
                }
                catch (Exception $e){
                    $error = "Bejelentkezési hiba: ".$e->getMessage();
                }
                
            }else{
                $error = "Adja meg a bejelentkezési adatait";
            }
        }

        if(isset($_POST["registration"])){
            $username = trim($_POST["username"]);
            $user_pw = trim($_POST["user_pw"]);
            echo $username;
            echo $user_pw;
            $username = trim($_POST["username"]);
            if(!empty($username) && !empty($user_pw) && !empty($username)){
                try{
                    $sql = "INSERT INTO users (username, user_pw) VALUES (:username, :user_pw)";
                    $queryNewUser = $conn->prepare($sql);
                    $hashpasw = password_hash($user_pw,PASSWORD_DEFAULT);
                    $queryNewUser->bindParam(":username",$userName,PDO::PARAM_STR);
                    $queryNewUser->bindParam(":fullname",$fullname,PDO::PARAM_STR);
                     $queryNewUser->bindParam(":pw",$telefon,PDO::PARAM_STR);
                    $queryNewUser->bindParam(":cim",$cim,PDO::PARAM_STR);
                    $queryNewUser->execute();	
                    $msg .= "Regisztráció sikerült, jelentkezzen be!";

                }catch(PDOException $e){
                    $error = "Regisztráció mentési hiba: ".$e->getMessage();
                }catch(Exception $e){
                    $error = "Regisztrációs hiba: ".$e->getMessage();
                }
            }else{
                $error .= "Hibás felhasználói adatok";
            }
        }
        ?>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Bejelentkezés
            </div>
            <div class="title signup">
               Regisztráció
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Bejelentkezés</label>
               <label for="signup" class="slide signup">Regisztráció</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form name="login" class="login" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>> 
                <div class="field">
                    <input type="text" name="username" placeholder="Felhasználónév" required>
                 </div>
                
               
             
                  <div id="field">
                     <input type="user_pw" name="user_pw" placeholder="Jelszó" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="login" value="Bejelentkezés">
                  </div>
                  <div class="signup-link">
                     Még nem tagunk? <a href="">Regisztráció</a>
                  </div>
                  <div class="pass-link">
                   <!-- <?php
                        if (!empty($error)){			
                            echo "<p class='error'>".$error."</p>\n";
                        }
                    ?>-->
                  </div>

               </form>
               <form name="signup" class="signup" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>>
               <div class="field">
                    <input type="text" name="username" placeholder="Felhasználónév" required>
                 </div>
                 <div class="field">
                  <input type="text" name="fullname" placeholder="Teljes név" required>
               </div>
               <div class="field">
                <input type="text" name="cim" placeholder="Cím" required>
             </div>
             <div class="field">
              <input type="text" name="telefon" placeholder="Mobilszám" required>
           </div>
                  <div class="field">
                     <input type="user_pw" name="user_pw" placeholder="Jelszó" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="login" value="Regisztráció">
                  </div>  

                    <?php
                        if (!empty($msg)){				
                           
                        }
                    ?>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>