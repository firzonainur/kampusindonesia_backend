<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		echo '<script language="javascript">alert("YOU HAVE NOT LOG IN!");window.location.href = "../login.php";</script>';
	}
?>

<!doctype html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/_admin.css">
	    <link rel="stylesheet" href="assets/summernote/summernote-bs4.min.css">
	    <title>Kampus Indonesia - University Networking</title>
  	</head>
  	<body>
	    <div class="wrapper">
	    	<nav class="navbar navbar-expand-lg navbar-light">
		          <a class="navbar-brand" href="dashboard.php">KampusIndonesia</a>
		          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		          </button>
		    </nav>

		    <div class="sidenav">
			  	<a href="dashboard.php?menu=dashboard">Dashboard</a>
			  	<a href="dashboard.php?menu=addarticle">Add Article</a>
			  	<a href="dashboard.php?menu=articles">Articles</a>
			  	<a href="src/auth/_logout.php">Logout</a>
			</div>
			<div class="main">
			  	<?php
			  	if(!isset($_GET['menu'])){
			  		echo "Halaman home!";
			  	} else {
			  		if($_GET['menu']=='dashboard'){
			  			echo "Halaman home!";
			  		} else if($_GET['menu']=='addarticle'){
			  			include 'add_artikel.php';
			  		}else if($_GET['menu']=='articles'){
			  			include 'artikel.php';
			  		} else{
			  			echo "Page not found!";
			  		}
			  	}
			  	?>
			  	
			</div>
	    </div>

    

	  	<script src="assets/jquery/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

		<script src="assets/summernote/summernote-bs4.min.js"></script>

		<script>
		    $(document).ready(function() {
		        $('#summernote').summernote({
		          minHeight: 400,
		        });

		        $('select[name=category_name]').change(function(){
		          var category = $(this).val().join(",");

		          $('input[name=category_id]').attr('value', category);
		        });

		        $('select[name=tag_name]').change(function(){
		          var tag = $(this).val().join(",");

		          $('input[name=tag_id]').attr('value', tag);

		        });
		    });

		</script>
  	</body>
</html>
