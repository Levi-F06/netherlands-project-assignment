<?php
session_start();

include "./db-connect.php";

include "./utils.php";

$creator = $_SESSION["uid"];
$name = clean_data($_POST["name"]);
$description = clean_data($_POST["description"]);
$date = $_POST["date"];
$image = $_POST["cover-image"];

$db_connection = open_connection();

$statement = $db_connection->prepare(
  "INSERT INTO events (name, description, start_date, created_by, image) VALUES (?, ?, ?, ?, ?)"
);
$statement->bind_param("sssii", $name, $description, $date, $creator, $image);
$statement->execute();

$statement->close();
$db_connection->close();

form_exit("Should work?");
