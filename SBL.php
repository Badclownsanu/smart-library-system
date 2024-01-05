<?php
  $DATE=$_POST['DATE'];
  $STN=$_POST['STN'];
  $SID=$_POST['SID'];
  $BN=$_POST['BN'];
  $BID=$_POST['BID'];
  $PP=$_POST['PP'];
  $PN=$_POST['PN'];
  $BP=$_POST['BP'];
  $OTHR=$_POST['OTHR'];
  echo $DATE;
  echo $STN; 
  echo $SID;
  echo $BN; 
  echo $BID;
  echo $PP; 
  echo $PN;
  echo $BP; 
  echo $OTHR;

 // Database connection 
	$conn = new mysqli('localhost', 'root','','smart library system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	 else {
	 	echo 'ok';
}
	 
  	$sql ="insert into sbl(DATE,STN,SID,BN,BID,PP,PN,BP,OTHR) values('$DATE','$STN','$SID','$BN','$BID','$PP','$PN','$BP','$OTHR')";
		if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>