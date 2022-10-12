<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bffb292e64.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Admin Belépés</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="login-form bg-light border rounded mt-4 p-5">
                    <form method="POST"   class="row g-5 action="
                    <?php 
                    echo htmlspecialchars($_SERVER['PHP_SELF']) 
                    ?>>
                    <div class="col-12 text-center pizzaLogo">Pizza<i class="fas fa-pizza-slice"></i>
                    </div>
                        <div class="col-12">
                            <label>Felhasználónév</label>
                            <input type="text" name="AdminName" class="form-control" placeholder="admin" required>
                        </div>
                        <div class="col-12">
                            <label>Jelszó</label>
                            <input type="password" name="AdminPass" class="form-control" placeholder="admin" required>
                        </div>
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                            <button type="submit"  name="Login" class="btn btn-outline-primary w-100">Bejelentkezés</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>