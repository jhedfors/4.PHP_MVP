<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Products | Semi Restful Route Demo</title>
    <link rel="stylesheet" href="/assets/css/master.css">
  </head>
  <body>
    <div class="main">
      <h3>Products</h3>
      <table>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
        <?php
        foreach ($products as $product) {
        ?>
        <tr>
          <td><?=$product['name']?></td>
          <td><?=$product['description']?></td>
          <td><?=$product['price']?></td>
          <td>
            <a href="/products/show/<?=$product['id']?>">Show</a>
            <a href="/products/edit/<?=$product['id']?>">Edit</a>
            <a href="/products/destroy/<?=$product['id']?>"><button>Remove</button></a>
          </td>
        </tr>
        <?php
        }
         ?>
      </table>
      <p>
        <a href="/products/new">Add a new product</a>
      </p>
    </div>

  </body>
</html>
