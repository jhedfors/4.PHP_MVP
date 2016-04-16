<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a student to all bootcamp courses</title>
  </head>
  <link rel="stylesheet" href="/assets/css/master.css">
  <body>
    <div class="wrapper">
      <h3>Add a new course</h3>
      <form class="" action="/Courses/add" method="post">
        <p>
          <label for="name">Name:</label><input type="text" name="name" value="">
        </p>
        <p>
          <label for="description">Description:</label><textarea name="description" ></textarea>
        </p>
        <input class="add" type="submit" value="Add">
      </form>
      <h3>Courses</h3>
      <table>
        <tr>
          <th>
            Course Name
          </th>
          <th>
            Description
          </th>
          <th>
            Date Added
          </th>
          <th>
            Actions
          </th>
        </tr>
        <?php
          foreach ($courses as $course) {
            echo "<tr><td>{$course['name']}</td>";
            echo "<td>{$course['description']}</td>";
            echo "<td>{$course['created_at']}</td>";

        ?>

          <td>
            <form action="Courses/delete" method="post">
              <input type="submit" value="Delete">

            </form>

          </td></tr>
        <?php
          }
        ?>
      </table>

    </div>


  </body>
</html>
