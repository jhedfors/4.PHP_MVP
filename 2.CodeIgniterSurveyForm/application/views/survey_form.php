<?php
// session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
 <title>Survey Form</title>
 <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
  <form class="survey" action="/surveys/process_form" method="post">
  <label for="name">Your Name:</label><input type="text" name="name" value="">
  <label for="dojo_location">Dojo Location:</label>
    <select name="dojo_location">
      <option value="seattle">Seattle</option>
      <option value="losangeles">Los Angeles</option>
      <option value="dallas">Dallas</option>
      <option value="sanjose">San Jose</option>
    </select>
  <label for="favorite_language">Favorite Language:</label>
    <select name="favorite_language">
      <option value="javascript">Javascript</option>
      <option value="php">PHP</option>
      <option value="java">Java</option>
      <option value="c++">C++</option>
    </select>
    <label for="comments">Comment (optional):</label>
    <textarea name="comments" rows="8" cols="40"></textarea>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
