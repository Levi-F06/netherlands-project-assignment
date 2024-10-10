<?php
session_start();
if (isset($_SESSION["uid"])) {
  header("Location: ./account.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Future 🌎</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/sign-in.css" />
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
      <a class="nav-link" href="./carbon-footprint-calculator.php">
        <li>Calculator</li>
      </a>
      <a class="nav-link" id="current-page" href="./sign-in.php">
        <li>Account</li>
      </a>
    </ul>
  </header>
  <main>
    <section class="sign-up-mode">
      <h2>Make the <span class="shadow">change</span></h2>
      <div id="tabs">
        <p id="sign-up-tab">Sign Up</p>
        <p id="sign-in-tab">Log In</p>
      </div>
      <div id="forms">
        <div id="sign-up">
          <h3>Start your journey</h3>
          <form action="../utils/create-account.php" method="post">
            <div>
              <label for="email">Email</label>
              <input required type="text" name="email" />
            </div>
            <div>
              <label for="username">Username</label>
              <input required type="text" name="username" />
              <label>Innapropriate Usernames <strong>will</strong> be banned, no
                spaces or special characters</label>
            </div>
            <div>
              <label for="password">Password</label>
              <input required type="password" name="password" />
            </div>
            <div>
              <label for="confirm-password">Confirm Password</label>
              <input required type="password" name="confirm-password" />
            </div>
            <button type="submit">Sign Up</button>
          </form>
        </div>
        <div id="sign-in" class="form-hide">
          <h3>Returning member?</h3>
          <form action="../utils/log-in.php" method="post">
            <div>
              <label for="email/username">Email/Username</label>
              <input required name="email-username" type="text" />
            </div>
            <div>
              <label for="password">Password</label>
              <input required name="password" type="password" />
            </div>
            <button type="submit">Sign In</button>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer></footer>
  <script src="../scripts/sign-in.js"></script>
</body>

</html>