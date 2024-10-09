<?php

function open_connection()
{
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db = "green_future";

  $db_connection = new mysqli($db_host, $db_user, $db_pass, $db);

  if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
  }
  return $db_connection;
}
