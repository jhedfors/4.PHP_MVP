<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete a course</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="wrapper">
      <h3>Are you sure you want to delete the following course?</h3>
      <p><label>Name:</label><?=$course['name']?></p>
      <p><label>Description:</label><?=$course['description']?></p>
      <a href="/courses"><button>No</button></a>
      <!--the course id is passed in the URL path to be interpreted in the routes.php -->
      <a href="/courses/destroy/<?=$course['id']?>"><button >Yes! I want to delete this</button></a>
    </div>
  </body>
</html>
