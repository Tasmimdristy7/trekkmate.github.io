


<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
<div class="container-fluid">
	<div class="textcenter">
		<h1>Welcome Back</h1>
	</div>
	<form action="signInScript.php" method="POST">
		<div class="input-group col-3 card1">
		   <div class="input-group-prepend">
			<span class="input-group-text border-right-0">
						
				<img src="photos/contact.png" class="iconE" style="opacity: 25%;">
			</span>
		  </div>
		  <input type="text" name="uemail" class="form-control border-left-0" placeholder="Email" aria-label="Email"
		  aria-describedby="basic-addon1">
		</div>
		<div class="input-group col-3 card2">
		  <div class="input-group-prepend ">
			<span class="input-group-text border-right-0">
				<img src="photos/lock.png" class="iconE" style="opacity: 25%;">
			</span>
		  </div>
		  <input type="password" name="pass" class="form-control border-left-0" placeholder="password" aria-label="password"
		  aria-describedby="basic-addon1">
		</div>
		<div class="form-check">
		<label class="form-check-label">
			<input type="checkbox" class="form-check-input rememberinput" value=""> <h class="remember" >Remember me</h>
		</label>
		</div>
		<br>
		<button type="submit" class="btn button" name="signBtn"><p>SIGN IN</p> </button>

	</form>
		
	</div>
</body>
</html>			
					
				
	