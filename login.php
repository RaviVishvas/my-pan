<?php
   session_start();

if (isset($_POST['submit'])) {
  include_once 'dbinc.php';

  $email= mysqli_real_escape_string($conn, $_POST['email']);
  $pwd= mysqli_real_escape_string($conn, $_POST['pwd']);

  //error dba_handlers
  if(empty($email)|| empty($pwd)){
    header("Location: ../panlogin.html?login=empty");
    exit();
  }else{

        $sql= "SELECT * FROM users WHERE user_email='$email';";
        $result= mysqli_query($conn, $sql);
        $resultcheck= mysqli_num_rows($result);

        if ($resultcheck < 1) {
          header("Location: ../panlogin.html?login=pleasesignup");
          exit();
        }else {
          if ($row = mysqli_fetch_assoc($result)) {
            //checking pwd
          $hashedpasswordcheck = password_verify($pwd, $row['user_pwd']);
          if ($hashedpasswordcheck == false) {
            header("Location: ../panlogin.html?login=Wrongpassword!");
            exit();
          }elseif ($hashedpasswordcheck == true) {
            // session
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['user_first'];
            $_SESSION['u_last'] = $row['user_last'];
            $_SESSION['u_email'] = $row['user_email'];
            header("Location: ishupan.php?login=success");
            exit();
           }
          }
        }
      }
}else {
  header("Location: ../panlogin.html?login=error");
  exit();
}
 ?>
