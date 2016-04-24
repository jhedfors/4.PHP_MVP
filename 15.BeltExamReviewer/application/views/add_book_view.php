<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Travel Dashboard</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

   <div class="row">
     <div class="col s6">
      <a href="#">Home</a>    <a href="#">Logout</a>
   </div>
   <div class="row">
     <div class="col 12s">
       <h3>Add a New Book Title and a Review</h3>
       <form class="" action="index.html" method="post">
         <label for="title">Book Title:</label><input type="text" name="title" value="">
         <label>Author</label>
          <div class="author">
            <label for="author">Choose from the list:</label>
            <select class="author" name="">
              <option value = 'Stephen King'>Stephen King</option>
              <option value = 'Douglas Adams'>Douglas Adams</option>
            </select>
            <label for="new_author">Or add a new author:</label><input type="text" name="new_author" value="">
          </div>
          <label for="review">Review</label><textarea name="review" ></textarea>
          <label for="star_rating">Rating</label>
            <select class="" name="star_rating">
              <option value = 1>1</option>
              <option value = 2>2</option>
              <option value = 3>3</option>
              <option value = 4>4</option>
              <option value = 5>5</option>
            </select>
            <input type="submit" value="Add Book and Review">

       </form>
     </div>

   </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/assets/js/materialize.js"></script>
  <script src="/assets/js/init.js"></script>

  </body>
</html>
