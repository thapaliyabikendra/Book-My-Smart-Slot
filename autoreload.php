<?php
 include("dbConnect.php"); 
error_reporting(0); 
$result = mysqli_query($conn, "SELECT value FROM led where id=1");
			while($row = mysqli_fetch_assoc($result)) {
				$state0=$row["value"];
				}
					$result = mysqli_query($conn, "SELECT value FROM led where id=2");
			while($row = mysqli_fetch_assoc($result)) {
				$state1=$row["value"];
				}
		
echo"<div class='box'>";
if($state0=="0"){			
	echo "  <div class='led-box'>
	<p><h3><center>Slot 1</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 1</center></h3></p>
    <div class='led-green'></div>
     </div>  ";	 
	 }
if($state1=="0"){			
	echo "  <div class='led-box'>
	<p><h3><center>Slot 2</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 2</center></h3></p>
    <div class='led-green'></div>
    </div>  ";	 
	 }
if($state2=="0"){			
echo "  <div class='led-box'>
<p><h3><center>Slot 3</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 3</center></h3></p>
    <div class='led-green'></div>
    </div>  ";	 
	 }
if($state3=="0"){			
echo "  <div class='led-box'>
<p><h3><center>Slot 4</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 4</center></h3></p>
    <div class='led-green'></div>
    </div>  ";	 
	 }
if($state4=="0"){			
echo " <div class='led-box'>
<p><h3><center>Slot 5</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 5</center></h3></p>
    <div class='led-green'></div>
    </div> ";	 
	 }
if($state5=="0"){			
echo "  <div class='led-box'>
<p><h3><center>Slot 6</center></h3></p>
    <div class='led-red'></div>
     </div>";
 }
 else {
	 	echo "  <div class='led-box'>
	 	<p><h3><center>Slot 6</center></h3></p>
    <div class='led-green'></div>
        </div>  ";	 
	 }
echo"</div>";
	 			 
			mysqli_close($conn);
?>
