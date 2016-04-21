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
        <p>

        </p>
      </div>
      <div class="col s8 container">
        <div class="row">
          <div class="cols 6 left">
            <h4 class="header orange-text left-align">Manage Users</h4>
            <?php
              if(isset($user_level)){
                  echo $user_level;
              }
          ?>
          </div>
          <div class="cols 6 right">
            <a class="btn waves-effect waves-light orange " href="/users/new">Add new</a>
          </div>
        </div>
        <div class="">
          <table class="striped">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>created_at</th>
                <th>user_level</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user) {
                ?>
                      <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><a href="/users/show/<?php echo $user['id'] ?>"><?php echo $user['first_name']; echo " ";echo $user['last_name']; ?></a></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['created_on'] ?></td>
                        <td><?php echo $user['user_level'] ?></td>
                        <td><a href="/users/edit/<?php echo $user['id'] ?>">edit</a><a href="/Dashboard/delete_user/<?php echo $user['id'] ?>">remove</a></td>
                      </tr>
                <?php
                    }
                 ?>
            </tbody>
          </table>

        <a class="btn waves-effect waves-light orange" href="/users/new">Add New</a>

        </div>
    </div>
    </div>
  </div>

  <?php
    echo 'info';
    var_dump($info);
    echo 'profile';
    var_dump($profile);
    echo 'users';
    var_dump($users);
  ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
