<?php
  $CLZ = $_POST['CLZ'];
  $SID = $_POST['SID'];
  $STN = $_POST['STN'];
  $ADRS= $_POST['ADRS'];
  $DOB = $_POST['DOB'];
  $GND = $_POST['GND'];
  $GRD = $_POST['GRD'];
  $CN = $_POST['CN'];
  echo $CLZ;
  echo $SID; 
  echo $STN;
  echo $ADRS; 
  echo $DOB;
  echo $GND; 
  echo $GRD;
  echo $CN;
  

 // Database connection
	$conn = new mysqli('localhost', 'root','','smart library system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	 else {
	 	echo 'ok';
}
	 
	$sql ="insert into STDE(CLZ,SID,STN,ADRS,DOB,GND,GRD,CN) values('$CLZ','$SID','$STN','$ADRS','$DOB','$GND','$GRD','$CN')";
	if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>