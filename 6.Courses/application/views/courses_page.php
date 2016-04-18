<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a bootcamp course</title>
  </head>
  <link rel="stylesheet" href="/assets/css/master.css">
  <body>
    <?php
    // wraps the succeeding content in another form where the "Courses" controller's index is 'listening' for errors.
    echo form_open('Courses');
    // echo validation_errors();//used if you want all the errors together instead of using the form_error below
    ?>
    <div class="wrapper">
      <h3>Add a new course</h3>
      <form class="" action="/Courses/add" method="post">
        <div>
          <label for="name">Name:</label><input type="text" name="name" value="">
          <?php echo form_error('name'); ?>
        </div>
        <div>
          <label for="description">Description:</label><textarea name="description" ><?php echo set_value('description'); ?></textarea>
        </div>
        <input class="add" type="submit" value="Add">
      </form>
      <h3>Courses</h3>
      <table>
        <tr>
          <th>Course Name</th>
          <th>Description</th>
          <th>Date Added</th>
          <th>Actions</th>
        </tr>
        <?php
          foreach ($courses as $course) {
            echo "<tr><td>{$course['name']}</td>";
            echo "<td>{$course['description']}</td>";
            echo "<td>{$course['created_at']}</td>";
        ?>
          <td>
            <!--the course id is passed in the URL path to be interpreted in the routes.php -->
            <a href="/Courses/display/<?=$course['id']?>">Delete</a>
          </td></tr>
        <?php
          }
        ?>
      </table>
    </div>
  </body>
</html>
