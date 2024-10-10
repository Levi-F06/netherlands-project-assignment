<?php

include "./db-connect.php";

include "./utils.php";

function check_exist($val, $result, $db_connection)
{
  if ($result->num_rows > 0) {
    $db_connection->close();
    form_exit("$val already taken!");
  }
}

$username = clean_data($_POST["username"]);
$email = clean_data($_POST["email"]);
$password = clean_data($_POST["password"]);
$confirm_password = clean_data($_POST["confirm-password"]);

$creation_date = date("d-m-Y");

if ($password != $confirm_password) {
  form_exit("Passwords must match!");
}
if (strlen(htmlspecialchars_decode($password)) < 8) {
  form_exit("Password must be atleast 8 characters long");
}
if (!str_contains(htmlspecialchars_decode($email), "@")) {
  form_exit("Invalid email");
}
if (str_contains(htmlspecialchars_decode($username), "@")) {
  form_exit("username can not contain the @ symbol!");
}

$password = password_hash($password, PASSWORD_DEFAULT);

$db_connection = open_connection();

// check for existing username or email
// I h8 php
$sql = "SELECT uid FROM users WHERE username='$username'";
check_exist("username", $db_connection->query($sql), $db_connection);

$sql = "SELECT uid FROM users WHERE email='$email'";
check_exist("email", $db_connection->query($sql), $db_connection);

// Cheers brandon ur code was very helpful <3
$statement = $db_connection->prepare("INSERT INTO users (username, email, password, creation) VALUES (?, ?, ?, ?)");
$statement->bind_param("ssss", $username, $email, $password, $creation_date);
$statement->execute();

$statement->close();
$db_connection->close();

form_exit("Account created successfully!");
