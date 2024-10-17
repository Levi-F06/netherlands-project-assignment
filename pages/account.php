<?php
session_start();
if (!$_SESSION["uid"]) {
  header("Location: ./sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Future 🌎</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/account.css">
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
      <a class="nav-link" href="./calc.php">
        <li>Calculator</li>
      </a>
      <a class="nav-link" id="current-page" href="./sign-in.php">
        <li>Account</li>
      </a>
    </ul>
  </header>
  <main>
    <section class="flex-me">
      <div id="title" class="flex-me">
        <h2><span class="shadow"><?php echo $_SESSION[
          "username"
        ]; ?>'s</span> page</h2>
        <form action="../utils/sign-out.php">
          <input type="submit" value="Sign out">

        </form>
      </div>


      <div class="info-sec flex-me">
        <h3>Account information:</h3>
        <div class="account-info flex-me">
          <div class="info flex-me">
            <p>Joined:</p>
            <p><?php echo $_SESSION["creation"]; ?></p>
          </div>
          <div class="info flex-me">
            <p>Email:</p>
            <p><?php echo $_SESSION["email"]; ?></p>
          </div>
        </div>
      </div>

      <div class="info-sec flex-me">
        <h3>Carbon Footprint</h3>
        <div class="account-info flex-me">
          <?php if ($_SESSION["footprint"]) {
            echo "<p>My carbon footprint as of " .
              $_SESSION["footprint-date"] .
              " is <strong>" .
              $_SESSION["footprint"] .
              "</strong> pounds";
            if ($_SESSION["footprint"] < 16000) {
              echo "<p>My carbon footprint is considered low compared
              to the average!</p>";
            } elseif ($_SESSION["footprint"] <= 22000) {
              echo "<p>My carbon footprint is considered to be the average
              !</p>";
            } else {
              echo "<p>My carbon footprint is currently above the average!</p>";
            }
            echo "<p>Retake the test to see if you have improved
              <a href='./calc.php'>here</a>";
          } else {
            echo "<p>You have not yet taken the carbon footprint test.</p>";
            echo "<p>Take the test <a
            href='./calc.php'>here</a>";
          } ?>
        </div>
      </div>

      <div class="info-sec flex-me">
        <h3>Events</h3>
        <div class="account-info flex-me">
          <p>Not yet 😁</p>
        </div>
      </div>

      <img id="img" src="../images/account.avif" alt="">

    </section>
  </main>
  <footer></footer>
  <script src="../scripts/main.js"></script>
</body>

</html>
