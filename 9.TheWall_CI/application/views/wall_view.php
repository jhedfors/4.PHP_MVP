<!DOCTYPE html>
<html>
  <head>    <meta charset="utf-8">
    <title>The Wall</title>
    <link rel="stylesheet" href="/assets/css/master.css" >
  </head>
  <body>
    <?php
      echo validation_errors() ;
      $messages = $this->session->userdata('messages');
      $comments = $this->session->userdata('comments');
      $userdata = $this->session->userdata('user_data');
      // var_dump($messages);

    ?>
    <div class="wrapper">
      <div class="header">
        <h2>The CodingDojo Wall</h2>
        <div class="welcome">
          <h4>Welcome <?= $userdata['first_name'] ?> <?= $userdata['last_name'] ?></h4>
          <a href="process.php">Logoff</a>
        </div>
      </div>
      <div class="main">
        <p>Post a message:</p>
        <form class="message_post" action="/wall/add_message" method="post">
          <textarea name="post_message"></textarea>
          <input type="submit" value="Post a message">
        </form>

        <?php


        // $posts = $_SESSION['user_messages'];
        // $comments = $_SESSION['user_comments'];

        //this foreach loop creates an array (i have named $sortingkey that contains the values of the keys I want sorted in the $quotes array
        foreach ($messages as $key => $row) {
          $sortingkey[$key]  = $row['created_on'];
        }
        // this built-in function sorts $quotes by decending order (SORT_DESC) by they values stored in $sortingkey
        array_multisort($sortingkey, SORT_DESC, $messages);

        foreach ($messages as $message) {

        ?>
        <div class="messages">
          <p class = 'post_header'>
            <?= $message['first_name']?>  <?=$message['last_name']?> - <?= $message['created_on'] ?>
          </p>
          <p class = 'post_body'>
            <?= $message['message']  ?>
          </p>
          <?php

          // var_dump($comments);
          // die('index52');
            foreach ($comments as $comment) {
              if ($comment['messages_id'] == $message['message_id']){
                ?>
                <div class="comments">
                  <p class = 'post_header'>
                    <?= $comment['first_name']?>  <?=$comment['last_name']?> - <?= $comment['created_on'] ?>
                  </p>
                  <p class = 'post_body'>
                    <?= $comment['comment']  ?>
                  </p>
                </div>
                <?php
              }
            }
           ?>

          <p class="post_label">Post a comment:</p>
          <form class="comments" action="/wall/add_comment" method="post">
            <input type="hidden" name="current_message" value="<?= $message['message_id'] ?>">
            <input type="hidden" name="messages_users_id" value="<?= $message['messages_users_id'] ?>">
            <textarea name="post_comment"></textarea>
            <input type="submit" value="Post a comment">
          </form>

        </div>
        <?php
        }




        ?>

      </div>

    </div>

  </body>
</html>
