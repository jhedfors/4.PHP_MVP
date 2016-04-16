<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product <?=$product['id']?> Info</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="main">
      <h3>Product <?=$product['id']?></h3>
      <div class="product">
        <p><label>Name:</label><?=$product['name']?></p>
        <p><label>Description:</label><?=$product['description']?></p>
        <p><label>Price:</label><?=$product['price']?></p>
      </div>
      <p>
        <a href="/products/edit/<?=$product['id']?>">Edit</a> |
        <a href="/">Back</a>
      </p>
    </div>


  </body>
</html>
