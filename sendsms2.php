<?php
include("dbConnect.php");
		// Authorisation details.
	$username = "thapaliyabikendra@gmail.com";
	$hash = "e7d972a4c822a579ab57737a3b744328a98d9da3f82c1045c654eeef2dc06a0e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
			$result = mysqli_query($conn, "SELECT status FROM status where rfid='$tag'");
			while($row = mysqli_fetch_assoc($result)) {
				$status =$row["status"];
			}
	
	if($status=="CHECK_IN"){
						$result = mysqli_query($conn, "SELECT phone,username FROM users where rfid='$tag'");
			while($row = mysqli_fetch_assoc($result)) {
				$numbers =$row["phone"];
				$user = $row["username"];
				}

	$message = "Weilcome ".$user."\nNavigate to Slot ". $slot;
}
else if($status=="CHECK_OUT"){
			$result = mysqli_query($conn, "SELECT phone,username FROM users where rfid='$tag'");
		while($row = mysqli_fetch_assoc($result)) {
				$numbers =$row["phone"];
				$user = $row["username"];
			}

	$message = "Thank ".$user."\n Pay RS 20";
	}

	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;

	mysqli_close($conn);
?>
