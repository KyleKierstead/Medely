<?php  
 //fetch_state.php  
 $connect = mysqli_connect("localhost", "root", "", "Medley");  
 $output = '';  
 $sql = "SELECT * FROM cust_info where F_Name = '".$_POST["F_Name"]."'";  
 $result = mysqli_query($connect, $sql);  
 $output = '<option value="">Select Customer</option>';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= "<option value='" . $row['F_Name'] . "', '" . $row['L_Name'] . "'> " . $row['F_Name'] . " " . $row['L_Name'] . "</option>";
	  

 }  
 echo $output;  
 ?>  