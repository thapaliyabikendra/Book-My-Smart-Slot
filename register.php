<?php error_reporting(0);?>
<form method="get" action="" style="width:80%; float:right;">
<fieldset>
<legend> Customer Details</legend>
</br>
 RFID Tag:<input name="rfidtag" type="name" placeholder="RFID TAGS" required autofocus onkeypress="return isNumberKey(event)"  maxlength="12" id="id1">
 </label>
</br></br>
<label>
First Name:<input name="fname" type="name" placeholder="Customer first name" required autofocus id="id2"> 
</label>
</br></br>
<label>
Mobile Number:<input name="phoneno" type="tel" placeholder="Customer phone number" required autofocus  onkeypress="return isNumberKey(event)"  maxlength="10" id="id3">
</label>
</br></br>
<label>
   <label>
<input type="submit" value="Submit" name="submit" id="id4">
</label>
</fieldset>
</form>
<?php
include("dbConnect.php"); 

	$rfidtag = $_GET['rfidtag'];
	$fname = $_GET['fname'];
	$phoneno = $_GET['phoneno'];
	if(isset($rfidtag)&&isset($fname)&&isset($phoneno)){	
			$sql0 = "INSERT INTO users (rfid,username,phone)VALUES ('$rfidtag','$fname','$phoneno')";
			if (mysqli_query($conn, $sql0)) {
				echo "INSERTED";
			} /*else {
				echo "Fail: " . $sql0 . "<br/>" . mysqli_error($conn);
			}
		*/
	}
mysqli_close($conn);
?>
