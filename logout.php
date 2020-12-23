<?php

if (isset($_POST['submit'])) {
  //logout function
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../panlogin.html?logout=success");
  exit();
}
