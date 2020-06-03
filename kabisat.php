<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>kabisat php</title>
 </head>
 <body>
 <h2>Tahun kabisat</h2>
<?php
 // if form not yet submitted
 // display form
 if (!isset($_POST['submit'])) 
{
?>
 <form method="post" action="kabisat.php">
 Enter value: <br />
 <input type="text" name="drtahun" size="3" />
 <p>
 <input type="text" name="tahunke" size="3" />
 <p>
 <input type="submit" name="submit" value="Submit" />
 </form>
<?php
 // if form submitted
 // process form input
 } else 
{
 
 $drtahun = $_POST['drtahun'];
 $tahunke = $_POST['tahunke'];
 if (($drtahun % 400 == 0 ) || (($drtahun % 100 != 0) && ($drtahun % 4 == 0))) 
{
 echo "$drtahun adalah tahun kabisat.";
} 
else 
{
 echo "$drtahun adalah bukan tahun kabisat.";
}
if (($tahunke % 400 == 0 ) || (($tahunke % 100 != 0) && ($tahunke % 4 == 0))) 
{
 echo "   $tahunke adalah tahun kabisat.";
} 
else 
{
 echo "    $tahunke adalah bukan tahun kabisat.";
}
}
?>
</body>
</html>
