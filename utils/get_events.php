<?php

include "../utils/db-connect.php";

function get_events()
{
  $db_connection = open_connection();

  $results = $db_connection->query("SELECT * FROM events");

  $db_connection->close();

  while ($row = $results->fetch_assoc()) {
    echo "<div class='event' id=" . $row["uid"] . ">";
    echo "<img src='../images/events/" . $row["image"] . ".jpeg''>";
    echo "<h2><span class='shadow'>" . $row["name"] . "</span></h2>";

    echo "<div class='event-description'>";
    echo "<p class='description'>" . $row["description"] . "</p>";
    echo "<p class='elipsis'>...</p>";
    echo "</div>";

    echo "<form class='actions' action='../utils/event-actions.php' method='post'>";
    echo "<input type='hidden' name='uid' value='" . $row["uid"] . "'>";
    echo "<button name='action' value='view' class='view-button'>View</button>";
    echo "<button name='action' value='join' class='join-button'>Join</button>";
    echo "</form>";

    echo "</div>";
  }
}

function show_event($uid)
{
  $db_connection = open_connection();

  $results = $db_connection->query("SELECT * FROM events WHERE uid='$uid'");
  $row = $results->fetch_assoc();

  $db_connection->close();

  echo "<div class='view-event-overlay'>";
  echo "<img src='../images/events/" . $row["image"] . ".jpeg''>";
  echo "<div class='text'>";
  echo "<h2><span class='shadow'>" . $row["name"] . "</span></h2>";
  echo "<p class='description'>" . $row["description"] . "</p>";
  echo "</div>";
  echo "</div>";
}
