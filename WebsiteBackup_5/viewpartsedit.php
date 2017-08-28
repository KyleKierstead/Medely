<?php

require("db.php");

$fid =$_REQUEST['Part_Num'];



$result = mysql_query("SELECT * FROM parts WHERE Part_Num  = '$fid'");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$partnum=$test['Part_Num'];

				$partdesc = $test['Part_Desc'];					

				$partprice =$test['Part_Price'];
				
				$partcost =$test['Part_Cost'];
				
				
				
				




if(isset($_POST['save']))

{	

	
	$partnum_save = $_POST['partnum'];
	
	$partdesc_save = $_POST['partdesc'];

	$partprice_save = $_POST['partprice'];
	
	$partcost_save = $_POST['partcost'];
	
	
	
	mysql_query("UPDATE parts SET Part_Desc='$partdesc_save', Part_Price = '$partprice_save', Part_Cost = '$partcost_save' where Part_Num = '$fid'")

	
    or die(mysql_error()); 


	
	echo "Saved!";

	

	header("Location: partsedit.php");			

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

		<td><input type="text" name="partnum" value="<?php echo $partnum ?>"readonly /></td>

	</tr>

	<tr>

		<td>Part Description:</td>

		<td><input type="text" name="partdesc" value="<?php echo $partdesc ?>"/></td>

	</tr>

	<tr>

		<td>Part Price:</td>

		<td><input type="text" name="partprice" value="<?php echo $partprice ?>"/></td>

	</tr>
    <tr>

		<td>Part Cost:</td>

		<td><input type="text" name="partcost" value="<?php echo $partcost ?>"/></td>

	</tr>
    
	<tr>

		<td>&nbsp;</td>

		<td><input type="submit" name="save" value="save" /></td>

	</tr>

</table></center>



</body>

</html>