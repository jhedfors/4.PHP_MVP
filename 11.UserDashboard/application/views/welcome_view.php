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
	<?php
	$this->session->sess_destroy();

	 ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
			  <div class="row">
					<div class="col s2">Test App</div>
			    <div class="col s1"><a href="./">Home</a></div>
			    <div class="col s7"><p></p></div>
			    <div class="col s2"><a href="/signin">Sign in</a></div>
			  </div>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Welcome to the Test</h1>
      <div class="row center">
        <h5 class="header col s12 light">We're going to build a cool application using an MVC framework! This application was built with the Village88 folks</h5>
      </div>
      <div class="row center">
        <a href="/signin" id="download-button" class="btn-large waves-effect waves-light orange">Start</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Manage Users</h5>
            <p class="light">Using this application, you'll learn how to add, remove, and edit users for the application.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Leave messages</h5>
            <p class="light">Users will be able to to leave a message to another user using this application.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Edit User Information</h5>
            <p class="light">Admins will be able to edit another user's information (email address, first name, last name, etc)</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
