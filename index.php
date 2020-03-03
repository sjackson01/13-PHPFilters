<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Widget Cost Calculator</title>
  </head>
  <body>
  <?php

  ?> 
  <h2>Widget Cost Calculator</h2>
    <form action="calculator.php" method="post">
        <p>Quantity: <input type="number" name="quantity" step="1" min="1" value="<?php if
        (isset($quantity)) echo $quantity; ?>"></p>
        <p>Price: <input type="number" name="price" step=".01" min="0.01" value="<?php if
        (isset($price)) echo $price; ?>"></p>
        <p>Tax (%): <input type="text" name="tax" step=".01" min="0.01" value="<?php if
        (isset($tax)) echo $tax; ?>"></p>
        <p><input type="submit" name="submit" value="Calculate!"></p>
    </form>
  </body>
</html>