<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Future 🌎</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/calc.css">
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
      <a class="nav-link" href="./events.php">
        <li>Events</li>
      </a>
      <a
        class="nav-link"
        id="current-page"
        href="./calc.php">
        <li>Calculator</li>
      </a>
      <a class="nav-link" href="./sign-in.php">
        <li>Account</li>
      </a>
    </ul>
  </header>
  <main>
    <h2>Carbon footprint <span class="shadow">calculator</span></h2>
    <section id="container" class="flex-me">
      <div id="intro" class="flex-me">
        <p>
          <?php if ($_SESSION["footprint"]) {
            echo "Your last test on " .
              $_SESSION["footprint-date"] .
              " showed that you had a footprint of " .
              $_SESSION["footprint"] .
              " pounds per year of CO2.";
          } else {
            echo "Welcome to the calculator, if you have taken the test and
            can't see it here, be sure to <a href='./sign-in.php'>sign in</a>
            and come back after";
          } ?>
        </p>
        <p>
          Alexandra Shimo-Barry, author of “The Environment Equation,” has come
          up with a formula that explains how to calculate your carbon. Simply
          answer the following questions to see your results
        </p>
        <p>Press the button below to start the test.</p>
        <button id="startButton">Take the test</button>
      </div>

      <div id="form" class="hide-me">
        <form action="../utils/calc.php" method="post">
          <div class="question">
            <div class="text">
              <p>1.</p>
              <p>How much (typically) is your monthly electric bill</p>
            </div>
            <input required name="electric-bill" type="number">
          </div>
          <div class="question">
            <div class="text">
              <p>2.</p>
              <p>How much (typically) is your monthly gas bill</p>
            </div>
            <input required name="gas-bill" type="number">
          </div>
          <div class="question">
            <div class="text">
              <p>3.</p>
              <p>How much (typically) is your monthly oil bill</p>
            </div>
            <input required name="oil-bill" type="number">
          </div>
          <div class="question">
            <div class="text">
              <p>4.</p>
              <p>
                What is your yearly mileage on your car
                (enter zero if you don't have a car)
              </p>
            </div>
            <input required type="number" name="car-mileage">
          </div>
          <div class="question">
            <div class="text">
              <p>5.</p>
              <p>
                How many flights have you taken this year that have been
                shorter than 4 hours
              </p>
            </div>
            <input required type="number" name="short-flights">
          </div>
          <div class="question">
            <div class="text">
              <p>6.</p>
              <p>
                How many flights have you taken this year that have been
                longer than 4 hours
              </p>
            </div>
            <input required type="number" name="long-flights">
          </div>
          <div class="question">
            <div class="text">
              <p>7.</p>
              <p>Do you recycle newspapers?</p>
            </div>
            <div>
              <input required type="radio" name="recycle-newspapers" value="yes"> yes
              <input required type="radio" name="recycle-newspapers" value="no"> no
            </div>
          </div>
          <div class="question">
            <div class="text">
              <p>8.</p>
              <p>Do you recycle aluminium and tin?</p>
            </div>
            <div>
              <input required type="radio" name="recycle-metal" value="yes"> yes
              <input required type="radio" name="recycle-metal" value="no"> no
            </div>
          </div>
          <div id="buttons">
            <button type="button">Go back</button>
            <button type="button">Next</button>
            <button type="submit" class="hide-me">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </main>
  <footer></footer>
  <script src="../scripts/main.js"></script>
  <script src="../scripts/calc-ui.js"></script>
</body>

</html>
