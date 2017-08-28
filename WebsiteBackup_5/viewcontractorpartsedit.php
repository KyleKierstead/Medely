<?php

require("db.php");

$fid =$_REQUEST['CPart_Num'];



$result = mysql_query("SELECT * FROM contractor_parts WHERE CPart_Num  = '$fid'");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$cpartnum=$test['CPart_Num'];

				$cpartdesc = $test['CPart_Desc'];					

				$cpartprice =$test['CPart_Price'];
				
				$cpartcost =$test['CPart_Cost'];
				
				
				
				




if(isset($_POST['save']))

{	

	
	$cpartnum_save = $_POST['cpartnum'];
	
	$cpartdesc_save = $_POST['cpartdesc'];

	$cpartprice_save = $_POST['cpartprice'];
	
	$cpartcost_save = $_POST['cpartcost'];
	
	
	
	mysql_query("UPDATE contractor_parts SET CPart_Desc='$cpartdesc_save', CPart_Price = '$cpartprice_save', CPart_Cost = '$cpartcost_save' where CPart_Num = '$fid'")

	
    or die(mysql_error()); 


	
	echo "Saved!";

	

	header("Location: contractorparts.php");			

}

mysql_close($conn);

?>

<!DOCTYPE html>

<html>

<head>

<title>Medley</title>

</head>



<body>

<form method="post">

<center><table>

	<tr>

		<td>Part Number:</td>

		<td><input type="text" name="cpartnum" value="<?php echo $cpartnum ?>"readonly /></td>

	</tr>

	<tr>

		<td>Part Description:</td>

		<td><input type="text" name="cpartdesc" value="<?php echo $cpartdesc ?>"/></td>

	</tr>

	<tr>

		<td>Part Price:</td>

		<td><input type="text" name="cpartprice" value="<?php echo $cpartprice ?>"/></td>

	</tr>
    <tr>

		<td>Part Cost:</td>

		<td><input type="text" name="cpartcost" value="<?php echo $cpartcost ?>"/></td>

	</tr>
    
	<tr>

		<td>&nbsp;</td>

		<td><input type="submit" name="save" value="save" /></td>

	</tr>

</table></center>



</body>

</html>