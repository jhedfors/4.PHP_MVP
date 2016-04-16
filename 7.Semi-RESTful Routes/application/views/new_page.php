<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create a new product | Semi Restfull Demo</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="main">
      <h3>Add a new Product</h3>
      <form class = 'new' action="/products/create" method="post">
        <p><label>Name:</label>
          <input type="text" name="name">
        </p>
        <p><label>Description:</label>
          <input type="text" name="description">
        </p>
        <p><label>Price:</label>
          <input type="text" name="price">
        </p>
        <p>
          <input type="submit" value="Create">
        </p>
      </form>
      <p>
        <a href="/">Go back</a>
      </p>
    </div>
  </body>
</html>
