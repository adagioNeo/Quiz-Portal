<?php
	function func(){
		echo '<script language="javascript">';
		echo 'alert("Fields are left empty!")';
		echo '</script>';
		header("Refresh:0; url=reg.html");
		$conn->close();
		die();
	}
		
	$servername = "localhost";
	$username = "quiz";
	$password = "wert1234";
	$dbname = "student";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT USRN,EMAIL,P_NO FROM registered";
	$result = $conn->query($sql);

        if(isset($_REQUEST["FN"])){
                $FN = mysqli_real_escape_string($conn,$_REQUEST["FN"]);
	}else{echo "missing";}
        if(isset($_REQUEST["LN"])){
                $LN = mysqli_real_escape_string($conn,$_REQUEST["LN"]);
	}
        if(isset($_REQUEST["MN"])){
                $MN = mysqli_real_escape_string($conn,$_REQUEST["MN"]);
	}
        if(isset($_REQUEST["USRN"])){
                $USRN = mysqli_real_escape_string($conn,$_REQUEST["USRN"]);
	}
        if(isset($_REQUEST["P1"])){
                $PWD = mysqli_real_escape_string($conn,$_REQUEST['P1']);
        }
        if(isset($_REQUEST["MAIL"])){
                $MAIL = mysqli_real_escape_string($conn,$_REQUEST["MAIL"]);
        }
        if(isset($_REQUEST["P_NO"])){
                $P_NO = mysqli_real_escape_string($conn,$_REQUEST["P_NO"]);
        }

	if ($result->num_rows > 0) {
    	// output data of each row
		while($row = $result->fetch_assoc()) {
			$u = $row["USRN"];
			$e = $row["EMAIL"];
			$p = $row["P_NO"];
			echo $u;
			if($USRN == $u){
				echo '<script language="javascript">';						echo 'alert("Username already exists!")';
				echo '</script>';
        			header("Refresh:0; url=reg.html");
			}
			if($MAIL == $e){
				echo '<script language="javascript">';
				echo 'alert("Email Id has been registered!")';
				echo '</script>';
        			header("Refresh:0; url=reg.html");
			}
			if($P_NO == $p){
				echo '<script language="javascript">';
				echo 'alert("User with Phone number already registered!")';
				echo '</script>';	
        			header("Refresh:0; url=reg.html");
			}
    		}
	}
	$ins = "INSERT INTO registered(FN,LN,MN,USRN,PWD,EMAIL,P_NO) VALUES ('$FN','$LN','$MN','$USRN','$PWD','$MAIL','$P_NO')";
	$conn = $conn->query($ins);
		
	if($conn === true){
		echo '<script language="javascript">';
		echo 'alert("SUCCESSFULLY REGISTERED")';
		echo '</script>';
		header("Refresh:0; url=login.html");
	}
	echo "not uploaded";
?> 
