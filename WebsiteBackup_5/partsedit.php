<!DOCTYPE html>
<html>
<head>
	<title>Parts List</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<ul>
	<li><a href="custinfo.php">Customer Information</a></li>
    <li><a href="customersearch.php">Customer Search</a></li>
    <li><a href="partsedit.php">Parts Edit</a></li>
    <li><a href="contractorparts.php">Contractor Parts Edit</a></li>
	</ul>
	
</head>

<body>
<div class="background">
		<div class="transbox">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1>Parts List</h1>
	<div id="status"></div>
	
	<!--
	<div id="button">
	<center><a href="newjobs.php"><button id="showData">New Jobs</button></a></center>
    <center><button id="showData">Customer Name Search</button></center>
    <center><button id="showData">Customer Address Search</button></center>
    <center><button id="showData">Job ID Search</button></center>
	</div>	
    -->
<body>

<center><form method="post">

<table>
	<tr>
		<td>Part Description</td>
		<td><input type="text" name="part_desc" maxlength="300" class="form-control"/></td>
	</tr>
	<tr>
		<td>Part Price</td>
		<td><input type="text" name="part_cost" class="form-control"/></td>
	</tr>
	<tr>
		<td>Part Cost</td>
		<td><input type="text" name="part_price" class="form-control"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<div class="box">
	<a class="button" href="#popup1">Help!</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<p>Thank to pop me out of that button, but now i'm done so you can close this window.<p>
		</div>
	</div>
</div> 
 </div>
 </div>
  </form></center>
  
<center><input type="text" id="search" placeholder="Type to search"><center>
<center><table  id="table" cellpadding="20" border="1">
			<?php
			include("db.php");
			$result=mysql_query("SELECT * FROM Parts");
			while($test = mysql_fetch_array($result))
			{
			$id = $test['Part_Num'];	
				echo "<tr align='center'>";
				
				
				echo"<td> <a href ='viewpartsedit.php?Part_Num=$id'>Edit</a>";	

				echo"<td><font color='black'>" .$test['Part_Num']."</font></td>";

				echo"<td><font color='black'>" .$test['Part_Desc']."</font></td>";

				echo"<td><font color='black'>". $test['Part_Price']. "</font></td>";

				echo"<td><font color='black'>". $test['Part_Cost']. "</font></td>";	

				

				//echo"<td> <a href ='del.php?Part_Num=$id'><center>Delete</center></a>";
				echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='del.php?Part_Num=$id'>Delete</a></td>"; 

				echo "</tr>";
			}

			mysql_close($conn);

			?>

</table></center>


   
   
   
   <!-- <div class="form-group has-feedback">
    <label class="control-label" for="inputSuccess2">Name</label>
    <input type="text" class="form-control" id="inputSuccess2"/>
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
</div>-->

</html>

<?php

if (isset($_POST['submit']))

	{	   

	include 'db.php';

	

			 		$partsdesc =$_POST['part_desc'] ;
					$partprice = $_POST['part_price'] ;	
					$partcost =$_POST['part_cost'] ;				
												

		 mysql_query("INSERT INTO `Parts`(Part_Desc, Part_Price, Part_Cost) 

		 VALUES ('$partsdesc','$partprice','$partcost')"); 

	        }
			
			

?>
<script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>



<script src="bootstrap/js/bootstrap.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>