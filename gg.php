<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>Ganjil Genap php</title>
 </head>
 <body>
 <h2>Ganjil Genap</h2>
<?php
 // if form not yet submitted
 // display form
 if (!isset($_POST['submit'])) 
{
?>
 <form method="post" action="gg.php">
 Enter value: <br />
 <input type="text" name="bilangan" size="3" />
 <p>
 <input type="submit" name="submit" value="Submit" />
 </form>
<?php
 // if form submitted
 // process form input
 } else {
 // retrieve number from POST submission
 $bilangan = $_POST['bilangan'];
 // test value for even-ness
 // display appropriate message
 if (($bilangan % 2) == 0) 
{
 echo 'bilangan ' . $bilangan . ', adalah bilangan genap.';
 } 
else 
{
 echo 'bilangan ' . $bilangan . ', adalah bilangan ganjil.';
 }
 }
?>
 </body>
</html>
