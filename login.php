<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
		

      
		<title>Kampus Indoensia</title>
    </head>
    <body>
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index.php" >Kampus Indonesia</a>
                </div>

            </nav>
        </header>
		<body>
			<div class="wrapper">
				<h1>Login</h1>	
				<?php 
					if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "Login gagal! username dan password salah!";
					}else if($_GET['pesan'] == "logout"){
						echo "Anda telah berhasil logout";
					}else if($_GET['pesan'] == "belum_login"){
						echo "Anda harus login untuk mengakses halaman admin";
					}
				}
				?>
				<br/>
				<br/>
				<form action="koneksi/cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" placeholder="Masukkan username" required="required">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" placeholder="Masukkan password" required="required">
			</div>			
			<div>
				<input class="btn btn-primary" type="submit" value="Login" class="tombol">
			</div>
		</form>
			</div>
		</body>
    </body>
	
	

</html>
