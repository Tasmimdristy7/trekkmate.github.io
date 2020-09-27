<?php
   include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="signup.css"> 
  </head>
  <body>
</head>
<style>

</style>
<body>  
  <div class="container-fluid">
    <img class="imagebackground" src="photos/account.PNG"  >
    </div>
    <div class="textcenter3">
      <h1>Welcome Back</h1>
    </div>

    <div class="card card4">
      <article class="card-body" style="width:29em;">
       
    
        <form action="signupScript.php" method="POST">
        <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
           </div>
              <input class="form-control" placeholder="Full name" type="text" name="fname">
          </div> 
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
           </div>
              <input class="form-control" placeholder="Email address" type="email" name="uemail">
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Create password" type="password" id="pass" name="pass" >
          </div> 
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
              <input class="form-control" placeholder="Repeat password" type="password" id="rpass" name="rpass">
          </div>     
          <span id='message'></span>                             
          <div class="form-group">
              <button type="submit" name="submitBtn" class="btn btn-warning btn-block"> Create Account  </button>
          </div> 
               
          <p class="text-center">Have an account? <a style ="color: #5C4230; font-weight: bold" href="signIn.php">Sign In</a> </p>                                                                 
      </form>
      </article>
      </div> 
      
      </div> 
      
      
      <br><br>
    
      <script>
        $('#pass, #rpass').on('keyup', function () {
          if ($('#pass').val() == $('#rpass').val()) {
            $('#message').html('Matching').css('color', 'green');
          } else 
            $('#message').html('Not Matching').css('color', 'red');
        });

        </script>

</body>
<?php
  mysqli_close($conn);
?>