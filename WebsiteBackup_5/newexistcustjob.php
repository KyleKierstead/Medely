<?php

require("db.php");

$id =$_REQUEST['Cust_ID'];



$result = mysql_query("SELECT * FROM cust_info, address WHERE address.Street_Ad = cust_info.Street_Ad AND Cust_ID  = '$id'");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$fname = $test['F_Name'];

				$lname = $test['L_Name'];					

				$pphone =$test['P_Phone'];
				
				$pemail =$test['P_Email'];
				
				$sfname =$test['SF_Name'];
				
				$slname =$test['SL_Name'];
				
				$sphone =$test['S_Phone'];
				
				$semail =$test['S_Email'];
				
				$streetad = $test['Street_Ad'];
				
				$city = $test['City'];
				
				$state = $test['State'];
				
				$zip = $test['Zip'];




if(isset($_POST['save']))

{	

	$fname_save = $_POST['fname'];

	$lname_save = $_POST['lname'];

	$pphone_save = $_POST['pphone'];
	
	$pemail_save = $_POST['pemail'];
	
	$sfname_save = $_POST['sfname'];
	
	$slname_save = $_POST['slname'];
	
	$sphone_save = $_POST['sphone'];
	
	$semail_save = $_POST['semail'];
	
	$streetad_save = $_POST['streetad'];
	
	$city_save = $_POST['city'];
	
	$state_save = $_POST['state'];
	
	$zip_save = $_POST['zip'];
	
	$jobstreet_save = $_POST['jobstreet'];
	
	$jobstreetcity_save = $_POST['jobstreetcity'];
	
	$jobstreetstate_save = $_POST['jobstreetstate'];
	
	$jobstreetzip_save = $_POST['jobstreetzip'];
	
	$insopt_save = $_POST['insopt'];
	
	$callbefore_save = $_POST['callbefore'];
	
	$preftime_save = $_POST['preftime'];
	
	$comments_save = $_POST['comments'];
	
	$emrep_save = $_POST['emrep'];
	
	$insclaim_save = $_POST['insclaim'];
	
	$tearrep_save = $_POST['tearrep'];
	
	$inspstordam_save = $_POST['inspstordam'];
	
	$biddate_save = $_POST['biddate'];
	
	$startdate_save = $_POST['startdate'];
	
	$compdate_save = $_POST['compdate'];
	
	$stories_save = $_POST['stories'];
	
	$steep_save = $_POST['steep'];
	
	$styacc_save = $_POST['styacc'];
	
	$acchow_save = $_POST['acchow'];
	
	$jobstatus_save = $_POST['jobstatus'];
	
	$totsqft_save = $_POST['totsqft'];

	



	mysql_query("UPDATE cust_info SET F_Name ='$fname_save', L_Name ='$lname_save',

		 P_Phone ='$pphone_save', P_Phone ='$pphone_save', P_Email ='$pemail_save', SF_Name ='$sfname_save', SL_Name ='$slname_save', S_Phone ='$sphone_save', S_Email ='$semail_save', Street_Ad ='$streetad_save'  WHERE Cust_ID = '$id'")

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
    $gutid = $cpid['max(Gutters_ID)+1'];
	
	
	
	$rest9 = mysql_query("SELECT max(CParts_ID)+1 FROM contractor_info Limit 1")
    or die(mysql_error());
    $cpartid = mysql_fetch_array($rest9);
    if (!$rest9)
   {
    die("Error: Data not found..");
   }
    $cpartid1 =$cpartid['max(CParts_ID)+1'];
			 

	mysql_query("INSERT INTO job_info (Gutters_ID,Job_Street, Parts_ID, Job_Street_City,Job_Street_State,Job_Street_Zip, INs_opt, Call_Before, Pref_Time, Comments, Em_Rep, Ins_Claim, Tear_Rep, Insp_Stordam, Bid_Date, Start_Date, Comp_Date, Stories, Steep, Sty_Acc, Acc_How, Job_Status, TotSQFT) 
	
	VALUES ('$gutid','$jobstreet_save','$partid','$jobstreetcity_save','$jobstreetstate_save','$jobstreetzip_save','$insopt_save','$callbefore_save','$preftime_save','$comments_save','$emrep_save','$insclaim_save','$tearrep_save','$inspstordam_save','$biddate_save','$startdate_save','$compdate_save','$stories_save','$steep_save','$styacc_save','$acchow_save', '$jobstatus_save', '$totsqft_save')")

				or die(mysql_error()); 
				
				
				 mysql_query("INSERT INTO contractor_info(Gutters_ID, CParts_ID) VALUES ('$gutid', '$cpartid1')")
   or die(mysql_error());
				
				
	$res = mysql_query("SELECT * FROM job_info ORDER BY job_id DESC limit 1")
	or die(mysql_error());
	
	$jid = mysql_fetch_array($res);
	
	if (!$res) 

		{

		die("Error: Data not found..");

		}

				$jobid =$jid['Job_ID'];

		
		
		 			
				
	

		
		
		
$rest3 = mysql_query("SELECT max(Contract_ID)+1 FROM job Limit 1")
 or die(mysql_error());
 
 $jpid = mysql_fetch_array($rest3);
 
 if (!$rest3)
  {
  die("Error: Data not found..");
  }
    $contractid =$jpid['max(Contract_ID)+1'];
  
      
    
 
  
  
  
 mysql_query("INSERT into job(cust_id,job_id,Contract_ID) values('$id', '$jobid','$contractid')")
    or die(mysql_error());
	
	mysql_query("INSERT into contract_info(Contract_ID) VALUES ('$contractid')")
  
    or die(mysql_error());
				
		
				
   
				
				

	echo "Saved!";

	

	//header("Location: customersearch.php");
	header("Location: thankyou.html");			

}

mysql_close($conn);

?>

<!DOCTYPE html>

<html>

<head>
	<title>New Job for Existing Customers</title>
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
	<center><h1>New Jobs for Existing Customers</h1></center>
	<div id="status"></div>

<!--<form method="post">

<table>
	<tr>
		<td>Steep:</td>
		<td><input type="text" name="steep" class="form-control"/></td>
	</tr>
	<tr>
		<td>Number of stories</td>
		<td><input type="text" name="numstories" class="form-control"/></td>
	</tr>
	<tr>
		<td>2nd Story Accessible</td>
		<td><input type="text" name="storyaccess" class="form-control"/></td>
	</tr>
</table>
 </div>
 </div>
  </form>-->

</body>



<body>

<form method="post">

<center><table>

	<tr>

		<td>First Name:</td>

		<td><input type="text" name="fname" maxlength="30" value="<?php echo $fname ?>" class="form-control"/></td>


		<td>Last Name:</td>

		<td><input type="text" name="lname" maxlength="30" value="<?php echo $lname ?>" class="form-control"/></td>

	</tr>

	<tr>

		<td>Primary Phone:</td>

		<td><input type="text" name="pphone" maxlength="10" value="<?php echo $pphone ?>" class="form-control"/></td>

		<td>Primary Email:</td>

		<td><input type="text" name="pemail" maxlength="30" value="<?php echo $pemail ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Secondary First Name:</td>

		<td><input type="text" name="sfname" maxlength="30" value="<?php echo $sfname ?>" class="form-control"/></td>

		<td>Secondary Last Name:</td>

		<td><input type="text" name="slname" maxlength="30" value="<?php echo $slname ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Secondary Phone Number:</td>

		<td><input type="text" name="sphone" maxlength="10" value="<?php echo $sphone ?>" class="form-control"/></td>


		<td>Secondary Email:</td>

		<td><input type="text" name="semail" maxlength="30" value="<?php echo $semail ?>" class="form-control"/></td>

	</tr>
    <tr>

		<td>Street Address:</td>

		<td><input type="text" name="streetad" maxlength="30" value="<?php echo $streetad ?>" class="form-control"/></td>


		<td>City:</td>

		<td><input type="text" name="city" maxlength="15" value="<?php echo $city ?>" class="form-control"/></td>

	</tr>
    
    <tr>

		<td>State:</td>

		<td><input type="text" name="state" maxlength="15" value="<?php echo $state ?>" class="form-control"/></td>


		<td>Zip:</td>

		<td><input type="text" name="zip" maxlength="10" value="<?php echo $zip ?>" class="form-control"/></td>

	</tr>
    
    <tr>

		<td>Job Street:</td>

		<td><input type="text" name="jobstreet" maxlength="30" class="form-control" class="form-control"/></td>

		<td>Job Street City:</td>

		<td><input type="text" name="jobstreetcity" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
    
    <tr>

		<td>Job Street State:</td>

		<td><input type="text" name="jobstreetstate" maxlength="10" class="form-control" class="form-control"/></td>


		<td>Job Street Zip:</td>

		<td><input type="text" name="jobstreetzip" maxlength="10" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Insurance Option:</td>

		<td><input type="text" name="insopt" maxlength="15" class="form-control" class="form-control"/></td>

		<td>Call Before:</td>

		<td><input type="text" name="callbefore" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Preferred Time:</td>

		<td><input type="text" name="preftime" maxlength="15" class="form-control" class="form-control"/></td>

		<td>Comments:</td>

		<td><input type="text" name="comments" maxlength="300" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Emergency Repair:</td>

		<td><input type="text" name="emrep" maxlength="15" class="form-control" class="form-control"/></td>

		<td>Insurance Claim:</td>

		<td><input type="text" name="insclaim" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Tearoff or Repair:</td>

		<td><input type="text" name="tearrep" maxlength="15" class="form-control" class="form-control"/></td>

		<td>Inspection for Storm Damage:</td>

		<td><input type="text" name="inspstordam" maxlength="15" class="form-control" class="form-control"v/></td>

	</tr>
    <tr>

		<td>Bid Date:</td>

		<td><input type="text" name="biddate" id="dt1" class="form-control" class="form-control"/></td>

		<td>Start Date:</td>

		<td><input type="text" name="startdate" id="dt2" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Completion Date:</td>

		<td><input type="text" name="compdate" id="dt3" class="form-control" class="form-control"/></td>

		<td>Stories:</td>

		<td><input type="text" name="stories" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Steep:</td>

		<td><input type="text" name="steep" maxlength="15" class="form-control" class="form-control"/></td>

		<td>Story Accessibilty:</td>

		<td><input type="text" name="styacc" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
    <tr>

		<td>Accessible How:</td>

		<td><input type="text" name="acchow" maxlength="15" class="form-control" class="form-control"/></td>
        
        <td>Job Status:</td>

		<td><input type="text" name="jobstatus" maxlength="15" class="form-control" class="form-control"/></td>

	</tr>
     

	<tr>
    	<td>Total Square Footage of Roof:</td>

		<td><input type="text" name="totsqft" maxlength="15" class="form-control" class="form-control"/></td>

		<td>&nbsp;</td>

	<td><input type="submit" name="save" value="continue" /></td>
       <!--<td> <input type="submit" name="save" value="continue" class="btn btn-success btn-lg"/>  </td>-->

	</tr>

</table></center>
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



</body>

</html>

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
  
</script>