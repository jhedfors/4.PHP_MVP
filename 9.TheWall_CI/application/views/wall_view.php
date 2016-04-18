<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <link rel="stylesheet" href="/assets/css/master.css" >
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <h2>The CodingDojo Wall</h2>
        <div class="welcome">
          <h4>Welcome <?= $_SESSION['first_name'] ?> <?= $_SESSION['last_name'] ?></h4>
          <a href="process.php">Logoff</a>
        </div>
      </div>
      <div class="main">
        <p>Post a message:</p>
        <form class="message_post" action="process.php" method="post">
          <textarea name="post_message"></textarea>
          <input type="submit" value="Post a message">
        </form>

        <?php
        $posts = $_SESSION['user_messages'];
        $comments = $_SESSION['user_comments'];

        //this foreach loop creates an array (i have named $sortingkey that contains the values of the keys I want sorted in the $quotes array
        foreach ($posts as $key => $row) {
          $sortingkey[$key]  = $row['created_on'];
        }
        // this built-in function sorts $quotes by decending order (SORT_DESC) by they values stored in $sortingkey
        array_multisort($sortingkey, SORT_DESC, $posts);

        foreach ($posts as $post) {
        ?>
        <div class="messages">
          <p class = 'post_header'>
            <?= $post['first_name']?>  <?=$post['last_name']?> - <?= $post['created_on'] ?>
          </p>
          <p class = 'post_body'>
            <?= $post['message']  ?>
          </p>
          <?php

          // var_dump($comments);
          // die('index52');
            foreach ($comments as $comment) {
              if ($comment['messages_id'] == $post['message_id']){
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
          <form class="comments" action="process.php" method="post">
            <input type="hidden" name="current_message" value="<?= $post['message_id'] ?>">
            <input type="hidden" name="messages_users_id" value="<?= $post['messages_users_id'] ?>">
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
