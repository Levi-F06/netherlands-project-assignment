<?php
session_start();

if ($_POST["action"] == "view") {
  $_SESSION["event-view"] = $_POST["uid"];
  header("Location: ../pages/events.php");
}
