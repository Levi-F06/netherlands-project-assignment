<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Future 🌎</title>
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/events.css" />
  </head>
  <body>
    <header>
      <div class="flex-me">
        <img src="../images/logo.png" alt="Green Future Logo" id="logo" />
        <h1 id="title"><span>Green</span> Future</h1>
      </div>
      <ul>
        <a class="nav-link" href="../index.html"><li>Home</li></a>
        <a class="nav-link" id="current-page" href="./events.php">
            <li>Events</li>
        </a>
        <a class="nav-link" href="./calc.php"><li>Calculator</li></a>
        <a class="nav-link" href="./sign-in.php"><li>Account</li></a>
      </ul>
    </header>
    <main>
      <section id="intro">
        <h1>Current Events!</h1>
        <?php if ($_SESSION["uid"]) {
          echo "<div id='buttons''>";
          echo "<button class='control'>My events</button>";
          echo "<button class='control'>Create an event</button>";
          echo "</div>";
        } else {
          echo "<p>To get the most out of this page, create an <a href='./sign-in.php'>account</a></p>";
        } ?>
      </section>
      <section class="hide-me" id="create-event">
        <form action="../utils/create-event.php" method="post">
          <input required name="name" type="text" placeholder="Event name">
          <textarea rows="2" required name="description" type="textarea" placeholder="Enter a description..."></textarea>
          <p>Enter the starting date (if needed)</p>
          <input name="date" type="date">
          <div id="cover-image-select">
            <p>Select the cover image</p>
            <div>
              <div class="image-container">
                <img src="../images/events/0.jpeg" alt="">
                <input name="cover-image" type="radio" value="0" checked>
              </div>
              <div class="image-container">
                <img src="../images/events/1.jpeg" alt="">
                <input name="cover-image" type="radio" value="1">
              </div>
            </div>

            <div>
              <div class="image-container">
                <img src="../images/events/2.jpeg" alt="">
                <input name="cover-image" type="radio" value="2">
              </div>
              <div class="image-container">
                <img src="../images/events/3.jpeg" alt="">
                <input name="cover-image" type="radio" value="3">
              </div>
            </div>


          </div>
          <button>Submit</button>
        </form>
      </section>

    </main>
    <footer></footer>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/events.js"></script>
  </body>
</html>
