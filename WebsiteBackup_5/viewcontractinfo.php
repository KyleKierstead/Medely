<!DOCTYPE html>
<html>
<head>
	<title>Contract Information</title>
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
	<h1>Contract Information</h1>
	<div id="status"></div>
	
 
 
<center><table  id="table" border="1">
			<?php
			require("db.php");

			$fid =$_REQUEST['Cust_Job_ID'];
			
			$result=mysql_query("SELECT contractor_parts_list.CParts_ID, contractor_parts_list.CPart_Num, contractor_parts.CPart_Desc, contractor_parts_list.CQuantity, contractor_parts_list.CCalQuanPrice FROM job,job_info,contractor_info,contractor_parts_list,contractor_parts where job.Cust_Job_ID = $fid AND job.Job_ID=job_info.Job_ID AND job_info.Gutters_ID = contractor_info.Gutters_ID AND contractor_info.CParts_ID = contractor_parts_list.CParts_ID AND contractor_parts_list.CPart_Num = contractor_parts.CPart_Num");
			
			$result2=mysql_query("SELECT parts_list.Parts_ID, parts_list.Part_Num, Parts.Part_Desc,parts_list.Quantity, parts_list.CalQuanPrice FROM job,job_info,parts,parts_list where job.Cust_Job_ID = $fid AND job.Job_ID=job_info.Job_ID AND job_info.Parts_ID = parts_list.Parts_ID AND parts_list.Part_Num = parts.Part_Num");
			echo "<th>Contractor Parts</th>";
			while($test = mysql_fetch_array($result))
				{
			$id = $test['CParts_ID'];
			$gid = $test['CPart_Num'];
					
				echo "<tr align='center'>";
				echo"<td><font color='white'>" .$test['CParts_ID']."</font></td>";

				echo"<td><font color='white'>". $test['CPart_Num']. "</font></td>";

				echo"<td><font color='white'>". $test['CPart_Desc']. "</font></td>";
				
				echo"<td><font color='white'>". $test['CQuantity']. "</font></td>";
				
				echo"<td><font color='white'>". $test['CCalQuanPrice']. "</font></td>";
				
				//echo"<td><font color='white'>". $test['']. "</font></td>";
//				
//				echo"<td><font color='white'>". $test['Job_info']. "</font></td>";

				echo "</tr>";
				
				
				
				
				
				
				
				
			}
			echo "<th>Parts</th>";
			while($test2 = mysql_fetch_array($result2))
				{
			$pid = $test2['Parts_ID'];
			$pgid = $test2['Part_Num'];	
				
				echo "<tr align='center'>";
				echo"<td><font color='white'>" .$test2['Parts_ID']."</font></td>";

				echo"<td><font color='white'>". $test2['Part_Num']. "</font></td>";

				echo"<td><font color='white'>". $test2['Part_Desc']. "</font></td>";
				
				echo"<td><font color='white'>". $test2['Quantity']. "</font></td>";
				
				echo"<td><font color='white'>". $test2['CalQuanPrice']. "</font></td>";
				
				//echo"<td><font color='white'>". $test['']. "</font></td>";
//				
//				echo"<td><font color='white'>". $test['Job_info']. "</font></td>";

				echo "</tr>";
				}
			
			

			mysql_close($conn);

			?>
            
            
            
            
            

</body>

 
    
</body>

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


</html>

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