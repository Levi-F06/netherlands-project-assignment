<?php

include "./utils.php";

include "./db-connect.php";

$user = clean_data($_POST["email-username"]);
$password = clean_data($_POST["password"]);

if (str_contains(htmlspecialchars_decode($user), "@")) {
  $tag = "email";
} else {
  $tag = "username";
}

$db_connection = open_connection();

$sql = "SELECT * FROM users WHERE $tag='$user'";

$results = $db_connection->query($sql);

if ($results->num_rows  == 0) {
  form_exit("Nothing found!");
}
if ($results->num_rows > 1) {
  form_exit("Idk why but there are 2 results sorry about that wtf");
}

$results = $results->fetch_assoc();

if (password_verify($password, $results["password"])) {
  create_session($results);
  header("Location: ../pages/account.php");
} else {
  form_exit("Double check that password buddy 😬");
}
