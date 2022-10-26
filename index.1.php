<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Ciao Pizza főoldal</title>
</head>
<body>
    <!----------------------Header--------------------------------------->
    <header class="head">
        <h1>Ciao&nbsp;<i class="fas fa-pizza-slice"></i> &nbsp;Pizza</h1>
        <nav class="navbar">
            <a href="#about">Rólunk</a>
            <a href="Pizzas.php">Pizzáink</a>
            <a href="#kosar">Kosar</a>
            <a href="login11.php">Bejelentkezés/regisztráció</a>
            <form method="post" action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?>>
		<input type="submit" name="logout" class="logout" value="Kijelentkezés">
	</form>
        </nav>
    </header>
    <!---------------------Rólunk----------------------------------------->
    <section class="about" id="about">
        <div class="about-content">
            <div class="inner-content">
                <h4>Rólunk</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet saepe maiores iusto incidunt obcaecati voluptates impedit voluptatum beatae nemo libero esse quam facilis ipsum, enim nisi reiciendis ducimus fuga! Labore voluptatum, ut voluptatibus qui nemo porro eaque rerum impedit ea magnam veritatis distinctio repellat similique perspiciatis molestiae enim cupiditate officia! Expedita iure ratione, aliquid vitae nisi fugit, est nostrum atque modi aperiam rem molestiae assumenda placeat, autem enim reprehenderit inventore dicta deserunt! Quidem ipsam eius qui fugiat! Totam nulla, libero placeat dicta veniam nesciunt. Laboriosam ducimus quis, magnam at adipisci iste alias enim id sint error voluptate neque iure eveniet ipsum molestias commodi corrupti beatae cum odio recusandae itaque! Debitis incidunt ab at qui quis similique totam tempora perferendis earum voluptas, reprehenderit odit fuga! Esse deleniti harum odit eos blanditiis maiores, dignissimos culpa corporis optio facere voluptatem id amet, ea libero aperiam sint doloribus perspiciatis eligendi aliquam commodi saepe error.</p>
            </div>
            <div class="inner-content-img">
                <img src="louis-hansel-G5cpmu-0OV8-unsplash.jpg" alt="img">
            </div>
        </div>
    </section>

    </body>
<script>
    let searchbtn = document.querySelector('#search');
    let searchfrm = document.querySelector('.head .search-bar');

    searchbtn.onclick = () => {
        searchfrm.classList.toggle('active');
        menu.classList.remove('active');
    }

    let menu = document.querySelector('.head .navbar');
    document.querySelector('#bars').onclick = () => {
        menu.classList.toggle('active');
        searchfrm.classList.remove('active');

    }
    window.onscroll = () => {
        menu.classList.remove('active');
        searchfrm.classList.remove('active');
    }
</script>

</html>