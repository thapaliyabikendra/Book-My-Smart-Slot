

<!DOCTYPE html>
<html lang="en" >

<head>
  
  
   <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div class="login-page">
  <div class="form">
    <form class="register-form" method="get" action="">
      <input name="rfidtag" type="name" placeholder="RFID TAGS" required autofocus onkeypress="return isNumberKey(event)"  maxlength="12">
      <input name="fname" type="name" placeholder="Customer first name" required autofocus> 
      <input name="phoneno" type="tel" placeholder="Customer phone number" required autofocus  onkeypress="return isNumberKey(event)"  maxlength="10"/>
      <button>create</button>
      <p class="message"><a href="#">Log In</a></p>
    </form>
    <form class="login-form" method="post" action="login.php">
		<h1>ADMIN LOGIN</h1>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
      <p class="message"><a href="#">Register a customer</a></p>
    </form>
  </div>
</div>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script >
      $('.message a').click(function () {
   $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});
      //# sourceURL=pen.js
    </script>
</body>

</html>
<?php
include("dbConnect.php"); 
error_reporting(0);
	$rfidtag = $_GET['rfidtag'];
	$fname = $_GET['fname'];
	$phoneno = $_GET['phoneno'];
	if(isset($rfidtag)&&isset($fname)&&isset($phoneno)){	
			$sql0 = "INSERT INTO users (rfid,username,phone)VALUES ('$rfidtag','$fname','$phoneno')";
			if (mysqli_query($conn, $sql0)) {
				echo "INSERTED";
			} else {
				echo "Fail: " . $sql0 . "<br/>" . mysqli_error($conn);
			}
		
	}
mysqli_close($conn);
?>

 
