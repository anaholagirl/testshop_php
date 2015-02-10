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

        <div class="shirt-picture">
          <span>
            <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
          </span>
        </div>

        <div class="shirt-details">

          <h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
            <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
            <table>
              <tr>
                <th>
                  <input type="hidden" name="on0" value="Size">
                  <label for="os0">Size</label>
                </th>
              <td><select name="os0" id="os0">
                <option value="Small">Small </option>
                <option value="Medium">Medium </option>
                <option value="large">Large </option>
                <option value="X-Large">X-Large </option>
              </select></td></tr>
            </table>
            <input type="submit" value="Add to Cart" name="submit">
          </form>

          <p class="note-designer">* All shirts are designed by Mike the Frog.</p>

        </div>

      </div>

    </div>

<?php include("inc/footer.php"); ?>

