<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>palindrome</title>
 </head>
 <body>
 <h2>palindrome</h2>

<?php
 if (!isset($_POST['submit'])) 
{
?>
 <form method="post" action="palindrome.php">
 Enter value: <br />
 <input type="text" name="kata" size="3" />
 <p>
 <input type="submit" name="submit" value="Submit" />
 </form>

<?php
 } else {
 $kata = $_POST['kata'];
function check_palindrome($kata) 
{ if ($kata == strrev($kata))
echo 'kata '. $kata .' adalah palindrome';
else 
echo 'kata '. $kata .' bukan palindrome';
 }
 echo check_palindrome($kata)."\n";
 }
?>
 </body>
</html>
