<!DOCTYPE html>
<html>
<head>
	<title>Customer Info</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
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
	<h1>Customer Information</h1>
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
		<td>First Name:</td>
		<td><input type="text"  id = "fname" name="fname" maxlength="30" class="form-control" /></td>
        <td>Last Name:</td>
		<td><input type="text"  id = "lname"  name="lname" maxlength="30" class="form-control"/></td>
	</tr>
    
	<tr>
    	<td>Primary Phone:</td>
		<td><input type="text"  id = "pphone" name="pphone" maxlength="10" class="form-control"/></td>
        <td>Primary Email:</td>
		<td><input type="text"  id = "pemail" name="pemail" maxlength="30" class="form-control"/></td>
        		
	</tr>
	<tr>
    	<td>Secondary First Name:</td>
		<td><input type="text"  id = "sfname" name="sfname" maxlength="30" class="form-control" /></td>
        <td>Secondary Last Name:</td>
		<td><input type="text"  id = "slname" name="slname" maxlength="30" class="form-control" /></td>
		
	</tr>
    <tr>
    <tr>
		<td>Secondary Phone:</td>
		<td><input type="text"  id = "sphone" name="sphone" maxlength="10" class="form-control" /></td>
		<td>Secondary Email:</td>
		<td><input type="text"  id = "semail" name="semail" maxlength="30" class="form-control"/></td>
	</tr>
    <tr>
    <tr>
		<td>Street Address:</td>
		<td><input type="text"  id = "streetad" name="streetad" maxlength="30" class="form-control" /></td>
       <td>City:</td>
		<td><input type="text"  id = "city" name="city" maxlength="15" class="form-control"/></td>
	</tr>
    <tr>
		<td>State:</td>
		<td><input type="text"  id = "state" name="state" maxlength="15" class="form-control" /></td>
		<td>Zip:</td>
		<td><input type="text"  id = "zip" name="zip" maxlength="10"class="form-control" /></td>
	</tr>

    <tr>
    	<td>Emergency Repair:</td>
		<td><input type="text"  id = "emrep" name="emrep" maxlength="15"class="form-control"/></td>
		<td>Insurance Option:</td>
		<td><input type="text"  id = "insopt" name="insopt" maxlength="15" class="form-control"/></td>
	</tr>
    <tr>
		<td>Call Before Arriving:</td>
		<td><input type="text"  id = "callbef" name="callbefore" maxlength="15" class="form-control"/></td>
		<td>Preferred Time of Arrival:</td>
		<td><input type="text"  id = "preftime" name="preftime" maxlength="15" class="form-control"/></td>
	</tr>
    <tr>
		
	</tr>
    <tr>
		<td>Insurance Claim:</td>
		<td><input type="text"  id = "insclaim" name="insclaim" maxlength="15" class="form-control"/></td>
		<td>Tearoff or Repair:</td>
		<td><input type="text"  id = "tearrep" name="tearrep" maxlength="15" class="form-control"/></td>
	</tr>
    <tr>
		<td>Inspection for Storm Damage:</td>
		<td><input type="text"  id = "inspstorm" name="inspstordam" maxlength="15" class="form-control"/></td>
		<td>Bid Date:</td>
		<td><input type="text" name="biddate" placeholder = "yyyy-mm-dd" id ="dt1" class="form-control"/></td>
	</tr>
    <tr>
		<td>Start Date:</td>
		<td><input type="text" name="startdate" placeholder = "yyyy-mm-dd" id= "dt2" class="form-control"/></td>
		<td>Comp Date:</td>
		<td><input type="text" name="compdate" placeholder = "yyyy-mm-dd" id= "dt3" class="form-control"/></td>
	</tr>
    <tr>
		<td>Stories:</td>
		<td><input type="text"  id = "stories" name="stories" maxlength="15" class="form-control"/></td>
		<td>Steep:</td>
		<td><input type="text"  id = "steep" name="steep" maxlength="15" class="form-control"/></td>
	</tr>
    <tr>
		<td>Story Accessibility:</td>
		<td><input type="text"  id = "storyacc" name="styacc" maxlength="15" class="form-control"/></td>
        <td>Access How:</td>
		<td><input type="text"  id = "acchow" name="acchow" maxlength="15" class="form-control"/></td>
		
	</tr>
     <tr>
		<td>Job Street:</td>
		<td><input type="text"  id = "jobstreet" name="jobstreet" maxlength="30" class="form-control"/></td>
        <td>Job City:</td>
		<td><input type="text"  id = "jobcity" name="jobcity" maxlength="15" class="form-control"/></td>		
	</tr>
     <tr>
		<td>Job State:</td>
		<td><input type="text"  id = "jobstate" name="jobstate" maxlength="10" class="form-control"/></td>
        <td>Job Zip:</td>
		<td><input type="text"  id = "jobzip" name="jobzip" maxlength="10" class="form-control"/></td>	
	</tr>
    <tr>
    <td>Job Status</td>
    <td><input type="text"  id = "jobstatus" name="jobstatus" maxlength="15" class="form-control"/></td>
    <td>Comments:</td>
	<td><input  id = "jobstatus" type="text" style="width: 200px; height: 170px" name="comments" maxlength="300" class="form-control"/></td>
    
 	<tr>
    	<td>Square Footage of Roof:</td>
        <td><input type="text"  id = "totsqft" name="totsqft" maxlength="15" class="form-control"/></td>
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
 
 
 
<!-- <input type="text" id="dt1">
<input type="text" id="dt2">-->
 


  <!--</form></center>
  
<center><input type="text" id="search" placeholder="Type to search"><center>
<center><table  id="table" border="1">
			<?php ?><?php
			include("db.php");
			$result=mysql_query("SELECT * FROM cust_info");
			while($test = mysql_fetch_array($result))
			{
			$id = $test['Cust_ID'];	
				echo "<tr align='center'>";	
				
				echo"<td> <a href ='viewcustinfo.php?Cust_ID=$id'>Edit</a>";
				
				echo"<td><font color='black'>" .$test['Cust_ID']."</font></td>";

				echo"<td><font color='black'>" .$test['F_Name']."</font></td>";

				echo"<td><font color='black'>" .$test['L_Name']."</font></td>";

				echo"<td><font color='black'>". $test['P_Phone']. "</font></td>";

				echo"<td><font color='black'>". $test['P_Email']. "</font></td>";
				
				echo"<td><font color='black'>". $test['SF_Name']. "</font></td>";
				
				echo"<td><font color='black'>". $test['SL_Name']. "</font></td>";
				
				echo"<td><font color='black'>". $test['S_Phone']. "</font></td>";
				
				echo"<td><font color='black'>". $test['S_Email']. "</font></td>";
				
				echo"<td><font color='black'>". $test['Street_Ad']. "</font></td>";

				echo"<td> <a href ='delcustinfo.php?Cust_ID=$id'><center>Delete</center></a>";

				echo "</tr>";
			}

			mysql_close($conn);

			?><?php ?>

</table></center>
-->
   
   
   
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

	

			 		$fname =$_POST['fname'];
					$lname = $_POST['lname'];	
					$pphone =$_POST['pphone'];
					$pemail =$_POST['pemail'];
					$sfname =$_POST['sfname'];
					$slname =$_POST['slname'];
					$sphone =$_POST['sphone'];
					$semail =$_POST['semail'];
					$streetad = $_POST['streetad'];
					$city = $_POST['city'];	
					$state = $_POST['state'];
					$zip = $_POST['zip'];
					$jobstreet = $_POST['jobstreet'];
					$jobcity = $_POST['jobcity'];
					$jobstate = $_POST['jobstate'];
					$jobzip = $_POST['jobzip'];
					$insopt = $_POST['insopt'];
					$callbefore = $_POST['callbefore'];
					$preftime = $_POST['preftime'];
					$comments = $_POST['comments'];
					$emrep = $_POST['emrep'];
					$insclaim = $_POST['insclaim'];
					$tearrep = $_POST['tearrep'];
					$inspstordam = $_POST['inspstordam'];
					$biddate = $_POST['biddate'];
					$startdate = $_POST['startdate'];
					$compdate = $_POST['compdate'];
					$stories = $_POST['stories'];
					$steep = $_POST['steep'];
					$styacc = $_POST['styacc'];
					$acchow = $_POST['acchow'];
					$jobstatus = $_POST['jobstatus'];
					$totsqft = $_POST['totsqft'];
					
							
								
												

		 mysql_query("INSERT INTO `cust_info`(F_Name, L_Name, P_Phone, P_Email, SF_Name, SL_Name, S_Phone,S_Email, Street_Ad) 

		 VALUES ('$fname','$lname','$pphone','$pemail','$sfname','$slname','$sphone','$semail','$streetad')")
		 
		 or die(mysql_error());
		 
		 mysql_query("INSERT INTO `address`(Street_Ad,city, state, zip) 

		 VALUES ('$streetad','$city','$state','$zip')")
		 
		 or die(mysql_error()); 
		 
		 $rest1 = mysql_query("SELECT max(Parts_ID)+1 FROM job_info Limit 1")
 			or die(mysql_error());
 
 		$pid = mysql_fetch_array($rest1);
 
 		if (!$rest1)
 			{
 			 die("Error: Data not found..");
  			}
    			$partid =$pid['max(Parts_ID)+1'];
				
    
    $rest8 = mysql_query("SELECT max(Gutters_ID)+1 FROM job_info Limit 1")
    or die(mysql_error());
    $cpid = mysql_fetch_array($rest8);
    if (!$rest8)
   {
    die("Error: Data not found..");
   }
    $gutid =$cpid['max(Gutters_ID)+1'];
	
	
	$rest9 = mysql_query("SELECT max(CParts_ID)+1 FROM contractor_info Limit 1")
    or die(mysql_error());
    $cpartid = mysql_fetch_array($rest9);
    if (!$rest9)
   {
    die("Error: Data not found..");
   }
    $cpartid1 =$cpartid['max(CParts_ID)+1'];


 mysql_query("INSERT INTO contractor_info(Gutters_ID, CParts_ID) VALUES ('$gutid', '$cpartid1')")
   or die(mysql_error());

		  
		  
        mysql_query("INSERT INTO `job_info`(INs_Opt, Gutters_ID, Parts_ID, Call_Before,Pref_Time, Comments, Em_Rep, Ins_Claim, Tear_Rep, Insp_StorDam, 		                       Bid_Date, Start_Date, Comp_Date, Stories, Steep, Sty_Acc, Acc_How,Job_Street,Job_Street_City,Job_Street_State,Job_Street_Zip,Job_Status, TotSQFT) 

		    	VALUES		('$insopt','$gutid','$partid','$callbefore','$preftime','$comments','$emrep','$insclaim','$tearrep','$inspstordam','$biddate','$startdate','$compdate','$stories','$steep','$styacc','$acchow','$jobstreet','$jobcity','$state','$jobzip','$jobstatus','$totsqft')")
		 
		 or die(mysql_error()); 
		 
		 
				
	$res = mysql_query("SELECT * FROM job_info ORDER BY job_id DESC limit 1")
	or die(mysql_error());
	
	$jid = mysql_fetch_array($res);
	
	if (!$res) 

		{

		die("Error: Data not found..");

		}

				$jobid =$jid['Job_ID'];
				
				
				
							
	$rest = mysql_query("SELECT * FROM cust_info ORDER BY cust_id DESC limit 1")
	or die(mysql_error());
	
	$sid = mysql_fetch_array($rest);
	
	if (!$rest) 

		{

		die("Error: Data not found..");

		}

				$cusid =$sid['Cust_ID'];


		$rest3 = mysql_query("SELECT max(Contract_ID)+1 FROM job Limit 1")
 		or die(mysql_error());
 
 		$jpid = mysql_fetch_array($rest3);
 
 		if (!$rest3)
  			{
  			die("Error: Data not found..");
  			}
    		$contractid =$jpid['max(Contract_ID)+1'];
  
      
    
 
  
  
  
 				mysql_query("INSERT into job(cust_id,job_id,Contract_ID) values('$cusid', '$jobid','$contractid')")
    					or die(mysql_error());
						
						
						
			mysql_query("INSERT into contract_info(Contract_ID) VALUES ('$contractid')")
  
    		or die(mysql_error());
			
			

	

			
			
			
	        }
			
			
			

?>

<!--<script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});


$(document).ready(function () {
    
        $("#dt1").datepicker({
            dateFormat: "dd-M-yy",
            minDate: 0,
            onSelect: function (date) {
                var date2 = $('#dt1').datepicker('getDate');
                date2.setDate(date2.getDate() + 1);
                $('#dt2').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#dt2').datepicker('option', 'minDate', date2);
            }
        });
        $('#dt2').datepicker({
            dateFormat: "dd-M-yy",
            onClose: function () {
                var dt1 = $('#dt1').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#dt2').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#dt2').datepicker('option', 'minDate');
                    $('#dt2').datepicker('setDate', minDate);
                }
            }
        });
    });

</script>



<script src="bootstrap/js/bootstrap.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
-->

<style>
.custtable tr td {
    white-space: nowrap;
}

</style>

 <script>
 
  $(document).ready(function () {
    
        $("#dt1").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            onSelect: function (date) {
                var date2 = $('#dt1').datepicker('getDate');
                date2.setDate(date2.getDate() + 1);
                $('#dt2').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#dt2').datepicker('option', 'minDate', date2);
            }
        });
        $('#dt2').datepicker({
            dateFormat: "yy-mm-dd",
            onClose: function () {
                var dt1 = $('#dt1').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#dt2').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#dt2').datepicker('option', 'minDate');
                    $('#dt2').datepicker('setDate', minDate);
                }
            }
        });
    });

	 $('#dt3').datepicker({
            dateFormat: "yy-mm-dd",
            onClose: function () {
                var dt2 = $('#dt2').datepicker('getDate');
                console.log(dt2);
                var dt3 = $('#dt3').datepicker('getDate');
                if (dt3 <= dt2) {
                    var minDate = $('#dt3').datepicker('option', 'minDate');
                    $('#dt3').datepicker('setDate', minDate);
                }
            }
        });
  
 
document.getElementById('fname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}

document.getElementById('lname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('pphone').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('pemail').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('sfname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('slname').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('sphone').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('semail').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('streetad').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('city').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('state').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('zip').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('emrep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('insopt').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('callbef').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('preftime').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('insclaim').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('tearrep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('inspstorm').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('stories').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('steep').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('storyacc').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('acchow').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobstreet').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobcity').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobstate').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobzip').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('jobstatus').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
document.getElementById('comments').onkeyup = function(event) {

    this.value = this.value.replace(/[^a-zA-Z0-9_ \@$]/, '');

}
 
 
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});




</script>



 
