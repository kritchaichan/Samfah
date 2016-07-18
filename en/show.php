<?php
session_start();
?>
<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php

if(!isset($_SESSION["intLine"]))
{
	echo "Cart Empty";
	exit();
}

include('../include/config.inc.php');

?>
  <form action="update.php" method="post">
<table width="400"  border="1">
  <tr>
    <td width="101">ImgDoor</td>
    <td width="82">Height</td>
    <td width="82">Width</td>
    <td width="79">Qty</td>
    <td width="79">Acsr1</td>
    <td width="79">Acsr2</td>
    <td width="79">Acsr3</td>
    <td width="79">Wood for Door</td>
    <td width="79">Wood for Framing</td>
    <td width="10">Del</td>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  ?>
	  <tr>
		<td><?=$_SESSION["ImgDoor"][$i];?></td>
		<td><?=$_SESSION["Height"][$i];?></td>
		<td><?=$_SESSION["Width"][$i];?></td>
        <td><?=$_SESSION["Quantity"][$i];?></td>
        <td><?=$_SESSION["Acsr1"][$i];?></td>
        <td><?=$_SESSION["Acsr2"][$i];?></td>
        <td><?=$_SESSION["Acsr3"][$i];?></td>
        <td><?=$_SESSION["WoodForDoor"][$i];?></td>
        <td><?=$_SESSION["WoodForFraming"][$i];?></td>
		<td><a href="delete.php?Line=<?=$i;?>">x</a></td>
	  </tr>
	  <?php
  }
  ?>
</table>
<br>
<table width="400"  border="0">
  <tr>
  <td><input type="submit" value="Update"></td>
  <td align="right">Sum Total <?php echo number_format($SumTotal,2);?></td>
  </tr>
  </table>
</form>
<br><a href="madetocatalogue.html">Go to Product</a>
| <a href="form.php">Checkout</a>
<?php
	if($SumTotal >= 0)
	{
?>
	| <a href="clear.php">Clear</a>
<?php
	}
?>
<?php
?>
</body>
</html>

<?php /* This code download from www.ThaiCreate.Com */ ?>