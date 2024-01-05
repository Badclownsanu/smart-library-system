<?php

  $NIC = $_POST['NIC'];
  $BID = $_POST['BID'];
 
  echo $NIC; 
  echo $BID;

 // Database connection 
	$conn = new mysqli('localhost', 'root','','smart library system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	 else {
	 	echo 'ok';
}
	 
  		$sql ="insert into STFBR(NIC,BID) values('$NIC','$BID')";
				
		if ($conn->query($sql)===TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>