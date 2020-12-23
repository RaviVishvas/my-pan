<?php
session_start();

if (isset($_POST['submit'])) {
  include_once 'dbinc.php';

  $first= mysqli_real_escape_string($conn, $_POST['first']);
  $last= mysqli_real_escape_string($conn, $_POST['last']);
  $email= mysqli_real_escape_string($conn, $_POST['email']);
  $pwd= mysqli_real_escape_string($conn, $_POST['pwd']);

//error dba_handlers
if(empty($first)|| empty($last)|| empty($email)|| empty($pwd)){
  header("Location: pansignup.php?signup=empty");
  exit();
}else{
  //char Invalid
  if (!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/", $last)) {
    header("Location: pansignup.php?signup=charinvalid");
    exit();
  }else{
    //email valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: pansignup.php?signup=invalidemail");
      exit();
    }else{
      $sql= "SELECT * FROM users WHERE user_email='$email';";
      $result= mysqli_query($conn, $sql);
      $resultcheck= mysqli_num_rows($result);

      if ($resultcheck > 0) {
        header("Location: pansignup.php?signup=alreadytaken");
        exit();
      }else{
        //hashing password
        $hashpwd= password_hash($pwd, PASSWORD_DEFAULT);
        //inserting data
        $sql= "INSERT INTO users(user_first, user_last, user_email, user_pwd) VALUES('$first', '$last', '$email', '$hashpwd');";
         mysqli_query($conn, $sql);
        // session
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_first'] = $first;
        $_SESSION['u_last'] = $last;
        $_SESSION['u_email'] = $email;

        // make a folder
        $dir = "../uploads/ $email";
        if (is_dir($dir)=== false) {
        mkdir($dir);
        }

        header("Location: ishupan.php?signup=success");
        exit();
      }
    }
  }
}
}else {
header("Location: pansignup.php?signup=error");
exit();
}
 ?>
