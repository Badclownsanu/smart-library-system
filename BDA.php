<?php

  $BN = $_POST['BN'];
  $BID = $_POST['BID'];
  $AUT = $_POST['AUT'];
  $PUB = $_POST['PUB'];
  $PUBY = $_POST['PUBY'];
  $CON = $_POST['CON'];
  $NPG = $_POST['NPG'];
  $PRZ = $_POST['PRZ'];
  $RD = $_POST['RD'];
  echo $BN;
  echo $BID;
  echo $AUT;
  echo $PUB;
  echo $PUBY;
  echo $CON;
  echo $NPG;
  echo $PRZ;
  echo $RD;

 // Database connection
	$conn = new mysqli('localhost', 'root','','smart library system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	 else {
	 	echo 'ok';
}
	 
		$sql ="insert into BDA(BN,BID,AUT,PUB,PUBY,CON,NPG,PRZ,RD) values('$BN','$BID','$AUT','$PUB','$PUBY','$CON','$NPG','$PRZ','$RD')";
		
			if ($conn->query($sql)===TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>