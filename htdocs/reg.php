<!DOCTYPE HTML>
<html>
	<style>
		body{
		background-color:#DCDCDC;
		margin:0;
		}
		input{
		outline:0;
		}
		.portal{
		text-align:center;
		margin:0;
		width:100%;
		height:16vh;
		background-color:#3D6EB6;
		}
		.reg{
		margin:auto;
		width:50%;
		background-color:#FFFFFF;
		color:#3D6EB6;
		box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,19);
		}	
	</style>
	<script>
		function reg(){
			var p1 = document.getElementById("P1").value;
			var p2 = document.getElementById("P2").value;
			if(p1 == p2){
				return 
			}
			alert("Password doesnt match");
		}
	</script>
	<body>
		<div class="portal"></div>
		<form action="insert1.php" method="post">
			<h3 align="center">Register!</h3>
			<div style="margin:auto;width:40%">
			<label size="4">First Name:</label></br><input name="FN" type="Text" placeholder="Enter First name..."></br>
			
			<label size="4">Last Name:</label></br><input name="LN" type="Text" placeholder="Enter Last name..."></br>
			
			<label size="4">Middle Name:</label></br><input name="MN" type="Text" placeholder="Enter Middle name..."></br>
			
			<font size="4">Username:</font></br><input name="USRN" type="Text" placeholder="Enter Username..."></br>
			
			<font size="4">Password:</font></br><input name="P1" type="Password" placeholder="Enter Password..."></br>

			<font size="4">Re-enter password:</font></br><input name="P2" type="Password" placeholder="Re-enter Password..."></br>
			
			<font size="4">Mail id:</font></br><input name="MAIL" type="Text" placeholder="Enter Mail Id..."></br>
			
			<font size="4">Contact Number:</font></br><input name="P_NO"type="Text" placeholder="Enter 10-digit Phone Number..."></br>
			</br></div>
			<input type="submit" value="Submit">
		</form>	
		
	</br>
	</body>
</html>

