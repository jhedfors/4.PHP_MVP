<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Show User</title>

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
        <br><br>

        <h4 class="header orange-text left-align"><?php
          echo $profile['first_name'];
          echo " ";
          echo $profile['last_name'];
          ?></h4>
        <div class="row">
          <div class="col s12">
            <p><label class="info" >Registered at:</label><?php echo $profile['created_on']; ?></p>
            <p><label class="info" >User ID:</label><?php echo $profile['id']; ?></p>
            <p><label class="info" >Email address:</label><?php echo $profile['email']; ?></p>
            <p><label class="info" >Description:</label><?php echo $profile['description']; ?></p>
            <b>Leave a message for <?php echo $profile['first_name'] ?></b>
            <form class="" action="index.html" method="post">
              <label for="new_message"></label>
              <textarea name="new_message"></textarea>
              <input class="btn waves-effect waves-light orange right" type="submit" value="post">
            </form>
          </div>
          <div class="row">
            <div class="col s6"><a href="#">Mark Guillen</a> wrote</div>
            <div class="col s6 right-align">7 hours ago</div>
            <div class="row">
              <div class="col s12 message">
                  Hi Michael! I am having fun building Boom YEAH!
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col s1">
              <p>

              </p>
            </div>
            <div class="col s11">
              <div class="row">
                <div class="col s8"><a href="#">Diana Manlulu</a> wrote</div>
                <div class="col s4 right-align">23 minutes ago</div>
                <div class="row">
                  <div class="col s12 message">
                      Awesome!
                  </div>
                  <form class="" action="index.html" method="post">
                    <label for="new_message"></label>
                    <textarea name="new_message" placeholder="write a message"></textarea>
                    <input class="btn waves-effect waves-light orange right" type="submit" value="post">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s6"><a href="#">Mark Guillen</a> wrote</div>
            <div class="col s6 right-align">January 5th 2013</div>
            <div class="row">
              <div class="col s12 message">
                  Hi Michael! I am having fun building Boom YEAH!
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col s1">
              <p>

              </p>
            </div>
            <div class="col s11">
              <div class="row">
                <div class="col s8"><a href="#">Diana Manlulu</a> wrote</div>
                <div class="col s4 right-align">January 6th 2013</div>
                <div class="row">
                  <div class="col s12 message">
                      Awesome!
                  </div>
                  <form class="" action="index.html" method="post">
                    <label for="new_message"></label>
                    <textarea name="new_message" placeholder="write a message"></textarea>
                    <input class="btn waves-effect waves-light orange right" type="submit" value="post">
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col s12">
            <div class="row">


            </div>
          </div>


        </div>
      </div>

    </div>
    <div class="col s1">
      <p></p>
    </div>
  </div>


<?php
  echo 'info';
  var_dump($info);
  echo 'profile';
  var_dump($profile);
   ?>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
