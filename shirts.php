<?php

$products = array()
  $products[] = "Logo Shirt, Red",
  $products[] = "Mike the Frog Shirt, Black",
  $products[] = "Mike the Frog Shirt, Blue"
  $products[] = "Log Shirt, Green";

?>
<?php
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

  <div class="section page">

    <div class="wrapper">

      <h1>Mike&rsquo;s Full Catalog of Shirts</h1>

      <ul>
        <?php foreach($products as $product) { ?>
        <li><?php echo $product; ?></li>
        <?php } ?>
      </ul>

    </div>

  </div>

<?php include('inc/footer.php'); ?>
