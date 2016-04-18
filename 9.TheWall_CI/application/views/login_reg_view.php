<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Wall - User Login</title>
    <link rel="stylesheet" href="/assets/css/master.css" >
  </head>
  <body>
    <?php
    $errors_reg = $this->session->userdata('errors_reg');
    $errors_login = $this->session->userdata('errors_login');
    $this->session->unset_userdata('errors_reg');
    $this->session->unset_userdata('errors_login');
     ?>
    <div class="wrapper">
      <div class="header">
        <h2>The CodingDojo Wall</h2>
      </div>

      <div class="login">
        <h3>Returning Users</h3>
				<?php echo form_open('login'); ?>
        <form action="/wall/login" method="post">
          <label for="email">Email Address:</label><input type="text" name="email">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['email'])) {
                  echo  $_SESSION['errors']['email'];
                  $_SESSION['errors']['email'] = null;
                }
               ?>
            </div>
          <label for="password">Password</label><input type="password" name="password" value="">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['password'])) {
                  echo  $_SESSION['errors']['password'];
                  $_SESSION['errors']['password'] = null;
                }
               ?>
            </div>
          <input type="hidden" name="login">
          <input type="submit" value="Login">
        </form>

      </div>
      <div class="register">
        <h3>New Users</h3>
        <?php echo form_open('register'); ?>
        <form action="process.php" method="post">
          <label for="first_name">First Name:</label><input type="text" name="first_name">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['first_name'])) {
                  echo  $_SESSION['errors']['first_name'];
                  $_SESSION['errors']['first_name'] = null;
                }
               ?>
            </div>
          <label for="last_name">Last Name:</label><input type="text" name="last_name">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['last_name'])) {
                  echo  $_SESSION['errors']['last_name'];
                  $_SESSION['errors']['last_name'] = null;
                }
               ?>
            </div>
          <label for="email">Email Address:</label><input type="text" name="email">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['email'])) {
                  echo  $_SESSION['errors']['email'];
                  $_SESSION['errors']['email'] = null;
                }
               ?>
            </div>
          <label for="password">Password:</label><input type="password" name="password" value="">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['password'])) {
                  echo  $_SESSION['errors']['password'];
                  $_SESSION['errors']['password'] = null;
                }
               ?>
            </div>
          <label for="password">Confirm Password:</label><input type="password" name="confirm_password" value="">
            <div class="error">
              <?php
                if(isset($_SESSION['errors']['confirm_password'])) {
                  echo  $_SESSION['errors']['confirm_password'];
                  $_SESSION['errors']['confirm_password'] = null;
                }
               ?>
            </div>
          <input type="hidden" name="register">
          <input type="submit" value="Register">
        </form>

      </div>

    </div>


  </body>
</html>
