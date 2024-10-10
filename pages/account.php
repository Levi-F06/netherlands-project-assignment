<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Future 🌎</title>
  <link rel="stylesheet" href="../styles/main.css" />
</head>

<body>
  <header>
    <div class="flex-me">
      <img src="../images/logo.png" alt="Green Future Logo" id="logo" />
      <h1 id="title"><span>Green</span> Future</h1>
    </div>
    <ul>
      <a class="nav-link" href="../index.html">
        <li>Home</li>
      </a>
      <a class="nav-link" href="./events.html">
        <li>Events</li>
      </a>
      <a class="nav-link" href="./carbon-footprint-calculator.html">
        <li>Calculator</li>
      </a>
      <a class="nav-link" id="current-page" href="./sign-in.php">
        <li>Account</li>
      </a>
    </ul>
  </header>
  <main>
    <h1><?php echo $_SESSION["username"]; ?>'s page</h1>
  </main>
  <footer></footer>
  <script src="../scripts/main.js"></script>
</body>

</html>