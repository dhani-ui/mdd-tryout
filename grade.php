<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>Grade.php</title>
 </head>
 <body>
 <h2>Grade Php</h2>

<?php
// form mula
 if (!isset($_POST['submit'])) {
?>

 <form method="post" action="grade.php">
 Masukkan angka: <br />
 <input type="text" name="angka" size="3" />
 <p>
 <input type="submit" name="submit" value="Masukkan angka" />
 </form>

<?php
 //form di input
 // process form input
 } else {
 // retrieve age from POST submission
 $angka = $_POST['angka'];

 if ($angka >= 90) {
 echo "huruf A.";
 } elseif ($angka >= 80 && $angka <= 89) {
 echo "huruf B.";
 } elseif ($angka >= 70 && $angka <= 79) {
 echo "huruf C.";
} elseif ($angka >= 60 && $angka <= 69) {
 echo "huruf D.";
 } else {
 echo "huruf E.";
 }
 }
?>
 </body>
</html>
