<?php include 'includes/header.php'; ?>

<?php
$products = [
    'Toffee' => 2.99,
    'Mints'  => 1.99,
    'Fudge'  => 3.49,
    'Cookie' => 0.99,
    'Donut'  => 0.49,
    'Gummy Bears' => 2.49
];
// STEP 4
$products['Milk Chocolate']= 5.19;
$products +=['Mint Chocolate' => 4.99];

// STEP 5 sort array in ascending order based on value
asort($products);

// STEP 6 sort array in ascending order based on key
ksort($products);
?>
<!--<!DOCTYPE html>
<html>
  <head>
    <title>index page</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
-->
  <body>
    <h2>Price List</h2>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php foreach ($products as $item => $price) { ?>
        <tr>
          <td><?= $item ?></td>
          <td>$<?= $price ?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>

<?php include 'includes/footer.php'; ?>