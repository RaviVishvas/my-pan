<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="pan singup page">
<title>My Pan signup</title>
<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Ravi vishvas">
<link rel="stylesheet" href="../panstyle.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
    <div class="col-sm-3 col-md-4 lbg ">
      <h2 class="fadeInUp" style="text-shadow:0.5px 0.5px 8px #000000;"> myPan</h2>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-lg-3 col-sm-1"> </div>
    <div class="col-md-8 col-lg-6 col-sm-10">
      <form class="fbg" action="signup.php" method="POST">
        <h4 style="margin:2px 0px 20px 6px; color:white;">Sign Up</h4>

        <div style="margin-bottom:9px;" class="form-group">
          <label for="name">First name</label>
          <input style="opacity:0.20; background-color: black; color:white;" type="text" class="form-control" name="first" id="fuid" required>
        </div>

        <div style="margin-bottom:9px;" class="form-group">
          <label for="name">Last name</label>
          <input style="opacity:0.20; background-color: black; color:white;" type="text" class="form-control" name="last" id="luid" required>
        </div>

        <div style="margin-bottom:9px;" class="form-group">
          <label for="email"> E-mail</label>
          <input style="opacity:0.20; background-color: black; color:white;" type="text" class="form-control" name="email" id="email" required>
        </div>

        <div style="margin-bottom:50px;" class="form-group">
          <label for="pwd"> password</label>
          <input style="opacity:0.20; background-color: black; color:white;" type="password" class="form-control" name="pwd" id="pwd" required>
        </div>
        <button class="btn btn-success btn-block" type="submit" name="submit"> SignUp</button>
    </form>

    <?php

    $fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullurl, "signup=charinvalid") == true){
      echo "<p class='error' >you typed in an invalid characters!</p>";
      exit();
    }
    if(strpos($fullurl, "signup=invalidemail") == true){
      echo "<p class='error' >please type a valid email address!</p>";
      exit();
    }
    if(strpos($fullurl, "signup=alreadytaken") == true){
      echo "<p class='error' >you are already signed up!</p>";
      exit();
    }
    if(strpos($fullurl, "signup=success") == true){
      echo "<p class='success' >you are successfully signed up</p>";
      exit();
    }
     ?>

    </div>
    </div>
    <div class="col-md-2 col-lg-3 col-sm-1">


         </div>
  </div>
</body>
</html>
