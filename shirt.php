<?php include("inc/products.php");

$product_id = $_GET["id"];
$product = $products[$product_id]; // loading particular shirt you need with the product_id

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

  <div class="section page">

    <div class="wrapper">

      <div class="breadcrumb">
        <a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?>
      </div>


    </div>

  </div>

<?php include("inc/footer.php"); ?>

