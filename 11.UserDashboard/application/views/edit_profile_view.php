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
          <div class="col s2"><p>Test App</p></div>
			    <div class="col s1"><p><a href="./">Home</a></p></p></div>
			    <div class="col s7"><p></p></div>
			    <div class="col s2"><p><a href="signin">Sign in</a></p></div>
			  </div>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">
      <div class="col s1">
      <p></p>
      </div>
      <div class="col s10">
        <div class="row">
          <div class="cols 6 left">
            <?php
            if(isset($id)){
              echo $id;
            }

             ?>
            <h4 class="header orange-text left-align ">Edit profile/Edit user $[user_id]</h4>
          </div>
          <div class="cols 6 right">
            <a class="btn waves-effect waves-light orange " href="/dashboard/admin">Return to Dashboard</a>
          </div>
        </div>
        <div class="row">
          <div class="col s5">
            <p>Edit Information</p>
            <form action="" method="post">
    					<label class="left-align"for="email">Email Address:</label>
    					<input type="email" name="email" value="">
              <label class="left-align"for="first_name">First Name:</label>
              <input type="text" name="first_name" value="">
              <label class="left-align"for="last_name">Last Name:</label>
              <input type="text" name="last_name" value="">
              <label class="left-align" for="user_level">User Level</label>
              <div class="input-field">
                <select  name="user_level">
                  <option value = "Normal">Normal</option>
                  <option value = "Admin">Admin</option>
                </select>
              </div>

    					<input class="btn waves-effect waves-light orange" type="submit" value="Save">

            </form>
          </div>
          <div class="col s5">
            <p>Change Password</p>
            <form action="" method="post">
              <label class="left-align"for="password">Password</label>
              <input type="password" name="password" value="">
              <label class="left-align"for="confirm_password">Confirm Password</label>
              <input type="password" name="confirm_password" value="">
    					<input class="btn waves-effect waves-light orange" type="submit" value="update password">
            </form>
          </div>
        </div>
        <div class="row">
          <p>Edit Description</p>
          <form class="" action="index.html" method="post">
            <label for="description"></label>
            <textarea name="description"></textarea>
  					<input class="btn waves-effect waves-light orange" type="submit" value="save">
          </form>
        </div>
      </div>

    </div>
    <div class="col s1">
      <p></p>
    </div>
  </div>





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('select').material_select();
});
  </script>

  </body>
</html>
