<?php
session_start();
  unset($_SESSION["password"]); 
  unset($_SESSION["username"]);
  session_destroy();
  header("../client/index.html");
  exit;

 ?>
