<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product <?=$product['id']?> Info</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="main">
      <h3>Edit Product <?=$product['id']?></h3>
      <form class='edit' action="/products/update" method="post">
        <p><label>Name:</label>
          <input type="text" name="name" value="<?=$product['name']?>">
        </p>
        <p><label>Description:</label>
          <input type="text" name="description" value="<?=$product['description']?>">
        </p>
        <p><label>Price:</label>
          <input type="text" name="price" value="<?=$product['price']?>">
        </p>
        <p>
          <input type="hidden" name="id" value="<?=$product['id']?>">
          <input type="submit" value="Update">
        </p>

      </form>
      <p>
        <a href="/">Back</a>
      </p>
    </div>


  </body>
</html>
