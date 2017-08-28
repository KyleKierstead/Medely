<?php

require("db.php");

$fid =$_REQUEST['Cust_Job_ID'];



$result = mysql_query("SELECT * FROM job, job_info, cust_info, address WHERE cust_info.Cust_id = job.Cust_Id AND job.Job_ID = job_info.Job_ID AND Cust_Job_ID = '$fid' AND address.Street_Ad = cust_info.Street_Ad");

						

$test = mysql_fetch_array($result);

if (!$result) 

		{

		die("Error: Data not found..");

		}

				$custjobid=$test['Cust_Job_ID'];

?>

<input type="text" name="jobstreetcity" maxlength="15" value="<?php echo $custjobid ?>"/>


<script type="text/javascript">
function populatesecondbox(val) {
    var dropdown = document.getElementById("firstName");
    var pphone = document.getElementById("secondinputbox");
    var str = "<?php echo $pphone ?>";
    pphone.value = str;
}
</script>