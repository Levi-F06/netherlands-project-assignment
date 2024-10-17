<?php

session_start();

include "./utils.php";

include "./db-connect.php";

$total = 0;

$total += $_POST["electric-bill"] * 105;
$total += $_POST["gas-bill"] * 105;
$total += $_POST["oil-bill"] * 113;
$total += $_POST["car-mileage"] * 0.79;
$total += $_POST["short-flights"] * 1100;
$total += $_POST["long-flights"] * 4400;

if ($_POST["recycle-newspapers"] == "no") {
  $total += 184;
}

if ($_POST["recycle-metal"] == "no") {
  $total += 166;
}

$_SESSION["footprint"] = $total;
$_SESSION["footprint-date"] = date("d-m-Y");

$db_connection = open_connection();

$sql = "UPDATE users SET footprint=?, footprint_date=? WHERE uid=?";
$statement = $db_connection->prepare($sql);

$statement->bind_param("sss", $total, date("d-m-y"), $_SESSION["uid"]);
$statement->execute();

$statement->close();
$db_connection->close();

header("Location: ../pages/account.php");
