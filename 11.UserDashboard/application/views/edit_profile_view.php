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
  $info = $this->session->userdata('user_data');
  $profile = $this->session->userdata('profile_data');
  $users = $this->session->userdata('all_users');
  $user_level = $info['user_level'];

   ?>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
			  <div class="row">
          <div class="col s2">Test App</div>
          <div class="col s2">
            <a href="/Dashboard">Dashboard</a>
          </div>
          <div class="col s1">
            <a href="/users/edit">Profile</a>
          </div>
			    <div class="col s5"><p></p></div>
			    <div class="col s2"><a href="/signin">Sign in</a></div>
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
            <h4 class="header orange-text left-align ">
              <?php
                if ($info['id'] == $profile['id']) {
                  echo "Edit profile";
                }
                else{
                  echo "Edit user ".$profile['id']."";
                }
                ?>
              </h4>
          </div>
          <div class="cols 6 right">
            <?php if ($info['user_level'] == 'admin') {?>
                <a class="btn waves-effect waves-light orange " href="/dashboard/admin">Return to Dashboard</a>
            <?php } ?>

          </div>
        </div>
        <div class="row">
          <div class="col s5">
            <p>Edit Information</p>
            <form action="/users/edit_information" method="post">
    					<label class="left-align"for="email">Email Address:</label>
    					<input type="email" name="email" value="<?php echo $profile['email'] ?>">
              <label class="left-align"for="first_name">First Name:</label>
              <input type="text" name="first_name" value="<?php echo $profile['first_name'] ?>">
              <label class="left-align"for="last_name">Last Name:</label>
              <input type="text" name="last_name" value="<?php echo $profile['last_name'] ?>">
              <label class="left-align" for="user_level">User Level</label>
              <div class="input-field">
                <select  name="user_level">
                  <option <?php if($profile['user_level'] == 'normal') echo "selected" ?> value = "normal">Normal</option>
                  <option  <?php if($profile['user_level'] == 'admin') echo "selected" ?> value = "admin">Admin</option>
                </select>
              </div>

    					<input class="btn waves-effect waves-light orange" type="submit" value="Save">

            </form>
          </div>
          <div class="col s5">
            <p>Change Password</p>
            <form action="/users/edit_password" method="post">
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
          <form class="" action="/users/edit_description" method="post">
            <label for="description"></label>
            <textarea name="description"><?php echo $profile['description'] ?></textarea>
  					<input class="btn waves-effect waves-light orange" type="submit" value="save">
          </form>
        </div>
      </div>

    </div>
    <div class="col s1">
      <p></p>
    </div>
  </div>


  <?php

    if (isset($this->session->userdata['errors'])) {
      $errors = $this->session->userdata['errors'];
      var_dump($errors);
    }

    $this->session->unset_userdata('errors');
    // echo 'info';
    // var_dump($info);
    // echo 'profile';
    // var_dump($profile);
    // echo 'users';
    // var_dump($users);

  ?>


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
