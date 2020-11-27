<?php
session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Doctor Payment</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h1>Pay your consultation fee</h1>
	<pre>
	</pre>
	<h4>
		Doctor Name: <?php echo $_SESSION['docname'] ?>
	</h4>
	<h4>
		Doctor Expertise: <?php echo $_SESSION['docexp'] ?>
	</h4>
	<form method="post" action="pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>ID's</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>CONSLUTATION_ID</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "CONS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>PATIENT_ID</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="PAT001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>PAYMENT TO</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Doctor"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>PAYMENT MODE</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>FEE</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="500">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		
	</form>
</body>
</html>