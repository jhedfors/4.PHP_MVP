<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Travel Dashboard</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php

   ?>

   <div class="row">
     <h3>Welcome!</h3>
     <?php echo validation_errors() ?>
     <div class="col s6">
       <h4>Register</h4>
       <form class="" action="/register" method="post">
         <label for="name">Name:</label><input type="text" name="name" value="">
         <label for="alias">Alias:</label><input type="text" name="alias" value="">
         <label for="email">Email:</label><input type="email" name="email" value="">
         <label for="password">Password:</label><input type="password" name="password" value="">
         <label for="confirm_pw">Confirm PW:</label><input type="password" name="confirm_pw" value="">
         <input type="submit" value="Register">
       </form>

     </div>
     <div class="col s6">
        <h4>Login</h4>
       <form class="" action="/login" method="post">
         <label for="email">Email:</label><input type="text" name="email" value="">
         <label for="password">Password:</label><input type="password" name="password" value="">
         <input type="submit"value="Login">
       </form>
     </div>

   </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
