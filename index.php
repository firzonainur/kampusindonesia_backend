<?php
	session_start();
	if( !isset($_SESSION['username'])=='' AND isset($_SESSION['password'])==''){
		header("location : login.php");
	}
	
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
		<title>Kampus Indoensia</title>
    </head>
    <body>
        
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index.php" class="nav__logo">Kampus Indonesia</a>
                </div>

            </nav>
        </header>

        <main class="l-main">
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Kampus <span class="home__title-color">Indonesia</span><br> 
					 </h1>
                    <a href="login.php" class="button">Login</a>
                </div>

				<div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-facebook' ></i></a> 
                </div>

            </section>
		</main>
            
        
    </body>
</html>