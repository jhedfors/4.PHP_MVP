<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/assets/css/master.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
      <div class="timeLabel">Current Date and Time</div>
      <div class="time"><?= $dateOnPage ?></div>
      <div class=""></div>
      <div class="demoItems">
        <?= $name ?>
        <?php
        for ($i=0; $i < count($myArray); $i++) {
          echo $myArray[$i]."<br>";
          # code...
        }
         ?>
         <a href="times/new_method">New Method</a>


      </div>

  </body>
</html>
