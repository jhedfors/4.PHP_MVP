<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
			  <div class="row">
          <div class="col s2">Test App</div>
			    <div class="col s1"><a href="/">Home</a></div>
			    <div class="col s7"><p></p></div>
			    <div class="col s2"><a href="signin">Sign in</a></div>
			  </div>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="col s4">
        <br><br>
        <h4 class="header  orange-text left-align">Sign in</h4>

          <form action="signin_user" method="post">
  					<label class="left-align"for="email">Email Address</label>
  					<input type="email" name="email" value="">
            <label class="left-align"for="password">Password</label>
            <input type="password" name="password" value="">
  					<input class="btn-large waves-effect waves-light orange" type="submit" value="Sign In">
          </form>
          <a href="register">Don't have an account? Register.</a>
        </div>

    </div>

    </div>
  </div>

  <?php
    $errors = $this->session->userdata['errors_login'];
    var_dump($errors);
    
  ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
