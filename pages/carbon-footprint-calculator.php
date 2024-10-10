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
  <link rel="stylesheet" href="../styles/calculator.css">
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
      <a
        class="nav-link"
        id="current-page"
        href="./carbon-footprint-calculator.php">
        <li>Calculator</li>
      </a>
      <a class="nav-link" href="./sign-in.php">
        <li>Account</li>
      </a>
    </ul>
  </header>
  <main>
    <h2>Carbon footprint <span class="shadow">calculator</span></h2>
    <section id="intro" class="flex-me">
      <p>
        <?php if ($_SESSION["footprint"]) {
          echo "Your last test was on " . $_SESSION["footprint-date"] .
            " showed that you had a footprint of " . $_SESSION["footprint"] .
            " tons of CO2.";
        } else {
          echo "Welcome to the calculator, if you have taken the test and can't
          see it here, be sure to <a href='./sign-in.php'>sign in</a> and come back after";
        }
        ?>
      </p>
      <p>
        Alexandra Shimo-Barry, author of “The Environment Equation,” has come
        up with a formula that explains how to calculate your carbon. Simply
        answer the following questions to see how the tonne of emmisions produced.
      </p>
      <p>Press the button below to start the test.</p>
      <button>Take the test</button>
    </section>
  </main>
  <footer></footer>
  <script src="../scripts/main.js"></script>
</body>

</html>