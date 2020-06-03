<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>reverse word php</title>
 </head>
 <body>
 <h2>reverse word</h2>

<?php
 // if form not yet submitted
 // display form
 if (!isset($_POST['submit'])) 
{
?>

 <form method="post" action="balikkata.php">
 Enter value: <br />
 <input type="text" name="reverse" size="3" />
 <p>
 <input type="submit" name="submit" value="Submit" />
 </form>

<?php
 } else {
 // retrieve number from POST submission
 $reverse = $_POST['reverse'];
 echo strrev($reverse);
}
?>
 </body>
</html>
