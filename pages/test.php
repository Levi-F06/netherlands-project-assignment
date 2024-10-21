<?php

include "../utils/db-connect.php";

$db = open_connection();

$result = $db->query("SELECT * FROM events");

echo "hello";

echo $result->num_rows;

echo "<br>";

while ($row = $result->fetch_assoc()) {
  echo $row["name"];
  echo "<br>";
}

$db->close();
