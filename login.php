<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/_login.css">
    <title>Login - Kampus Indonesia</title>
  </head>
  <body>
    <div class="wrapper">
  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-md-5 mt-4">
  					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
						<strong>Login failed!</strong> 
						<p id="alert-message"></p>
					</div>
          			<div class="card">
            			<div class="card-body">
            				<h2 class="card-title mb-4">Login Information</h2>
            				<form method="POST" action="src/auth/_login.php">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Email address</label>
							    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
							    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" name="password" class="form-control" id="password">
							  </div>
							 <!--  <div class="form-group form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
							    <label class="form-check-label" for="exampleCheck1">Check me out</label>
							  </div> -->
							  <button class="btn btn-outline-primary btn-block mt-4" id="btn-login">Login</button>
							</form>
            			</div>
            		</div>
            	</div>
  			</div>
  		</div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script>

		const btnLogin = document.getElementById('btn-login');
    	document.getElementById('btn-login').addEventListener('click', function(e) {
    		const email = document.getElementById('email').value;
    		const psswd = document.getElementById('password').value;

    		if(email.length === 0){
    			document.querySelector('.alert').style.display = "block";
	    		document.getElementById('alert-message').innerHTML = "Email can not be empty!";
	    		e.preventDefault();
    		} else {
    			if (psswd.length === 0) {
    				document.querySelector('.alert').style.display = "block";
    			    document.getElementById('alert-message').innerHTML = "Password can not be empty!";
    			    e.preventDefault();
    			    
    			}
    		}
    	});
    </script>
  </body>


</html>