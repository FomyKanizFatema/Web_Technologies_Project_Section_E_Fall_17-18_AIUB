<?php include("adminHeader.php");?>

<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include('sidebar.php');?>
				</td>
				<td>
								<table border='1' width="100%" cellpadding="15px">
						<form action="passHandler.php">
			<fieldset>
				<legend>CHANGE PASSWORD</legend>
					<table>
						<tr>
						<td><b>Current Password  </b></td>				
						<td><b>: </b><input type="text" name="old"/></td>
						</tr>
						<tr>
						<td><b>New Password </b></td>	
						<td><b>: </b><input type="text" name="new"/></td>
						</tr>
						<tr>
						<td><b>Retype New Password </b></td>	
						<td><b>: </b><input type="text" name="rnew"/></td>
						</tr>
						
					</table>
					<hr>					
					<br/>
					<input type="submit" value="Submit">				
					
			</fieldset>
		</form>
						
					</table>
				</td>
			</tr>
		</table>
			
	</body>
	

</html>

