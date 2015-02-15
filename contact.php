<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);
  //trim value trims off white space(spaces, tabs & hard returns) from beginning and end of a piece of text

  //check if name, email or message field is blank
  if ($name == "" OR $email == "" OR $message == "") {
    echo "You must specify a value for name, email address, and message.";
    exit;
  }

  //function to defend against spam form attacks, checks for a malicious value
  foreach( $_POST as $value ) {
    if( stripos($value, 'Content-Type:') !== FALSE ) {
      echo "There was a problem with the information you entered.";
      exit;
    }

  }

  if ($_POST["address"] != "") {
    echo "Your form submission has an error."
    exit;
  }

  require_once("inc/phpmailer/class.phpmailer.php");
  $mail = new PHPMailer();



  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "\n";
  $email_body = $email_body . "Email: " . $email . "\n";
  $email_body = $email_body . "Message: " . $message . "\n";

  // comment - TODO: Send Email

  // redirect after we send the email

  header("Location: contact.php?status=thanks");
  exit;

  // this is useful so that if visitor uses back button on browser it won't send form twice
}

?>

<?php


$pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>

  <div class="section page">

    <div class="wrapper">

      <h1>Contact</h1>

      <!-- conditional that checks the value of the GET variable 'status' -->

      <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
        <p>Thanks for the email!  I&rsquo;ll be in touch shortly.</p>
      <?php } else { ?>

        <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

        <form method="post" action="contact.php">

          <table>
            <tr>
              <th>
                <label for="name">Name</label>
              </th>
              <td>
                <input type="text" name="name" id="name">
              </td>
            </tr>
            <tr>
              <th>
                <label for="email">Email</label>
              </th>
              <td>
                <input type="text" name="email" id="email">
              </td>
            </tr>
            <tr>
              <th>
                <label for="message">Message</label>
              </th>
              <td>
                <textarea name="message" id="message"></textarea>
              </td>
            </tr>
            <!-- add extra field you don't want to be filled as spam prevention; should not display in browser -->
            <tr style="display: none;">
              <th>
                <label for="address">Address</label>
              </th>
              <td>
                <input type="text" name="address" id="address">
                <p>Humans (and frogs): please leave this field blank.</p>
              </td>
            </tr>

          </table>
          <input type="submit" value="Send">

        </form>

      <?php } ?>

    </div>

  </div>

<?php include('inc/footer.php'); ?>
