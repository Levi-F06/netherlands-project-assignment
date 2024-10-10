<?php
session_start();

function form_exit($msg)
{
  echo "<script>";
  echo "alert('$msg');";
  echo "window.location.href = '../pages/sign-in.php'";
  echo "</script>";
  exit();
}

function clean_data($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  return htmlspecialchars($data);
}

function create_session($data)
{
  session_regenerate_id();
  $_SESSION["uid"] = $data["uid"];
  $_SESSION["username"] = $data["username"];
  $_SESSION["email"] = $data["email"];
  $_SESSION["creation"] = $data["creation"];
  $_SESSION["footprint"] = $data["footprint"];
}
