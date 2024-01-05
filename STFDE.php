<?php
  $NIC = $_POST['NIC'];
  $STFN = $_POST['STFN'];
  $CN = $_POST['CN'];
  $CN2= $_POST['CN2'];
  $HN = $_POST['HN'];
  $STRET = $_POST['STRET'];
  $CTY = $_POST['CTY'];
  
  echo $NIC;
  echo $STFN; 
  echo $CN;
  echo $CN2; 
  echo $HN;
  echo $STRET; 
  echo $CTY;
  

 // Database connection
	$conn = new mysqli('localhost', 'root','','smart library system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	 else {
	 	echo 'ok';
}
	 
	$sql ="insert into STFDE(NIC,STFN,CN,CN2,HN,STRET,CTY) values('$NIC','$STFN','$CN','$CN2','$HN','$STRET','$CTY')";
				
	if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>