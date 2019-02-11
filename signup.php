<?php
  require "header.php";
 ?>

    <main>
      <h1>sign up</h1>
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
            echo '<p> Fill in all fields!';
          }
          else if ($_GET['error'] == "invaliduidmail") {
            echo '<p>Invalid username or E-mail!';
          }
          else if ($_GET['error'] == "invalidui") {
            echo '<p>Invalid username!';
          }
          else if ($_GET['error'] == "invalidmail") {
            echo '<p>Invalid E-mail!';
          }
          else if ($_GET['error'] == "passwordcheck") {
            echo '<p>Your passwords do not match!';
          }
          else if ($_GET['error'] == "usertaken") {
            echo '<p>Username is already taken!';
          }
          else if ($_GET['signup'] == "success") {
              echo '<p>Sign up Successful!';
          }
        }
       ?>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">signup</button>
      </form>
    </main>

<?php
  require "footer.php";
 ?>
