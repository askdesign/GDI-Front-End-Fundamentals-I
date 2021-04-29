<?php
if($_POST["message"]) {
    mail("askdesign2@yahoo.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Contact_Action Page</h1>

<h4>Text Fields</h4>
<form action="contact_action.php" target="_blank" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="Jane"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>