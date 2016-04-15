<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="counterbox">
      <p>
        Thanks for submitting this form! you have submitted this form <?= $counter ?> times now.
      </p>
    </div>
    <div class="summary">
      <h4 class="summary_title">
        Submitted Information
      </h4>

      <form class="return" action="/" method="post">
      <p><label>Name:</label><?= $name ?></p>
      <p><label>Dojo Location:</label><?= $dojo_location ?></p>
      <p><label>Favorite Language:</label><?= $favorite_language ?></p>
      <p><label>Comments:</label><?= $comments ?></p>

      <input type="submit" value="Go Back">
    </form>


      </form>

      </div>
    </div>
  </body>
</html>
