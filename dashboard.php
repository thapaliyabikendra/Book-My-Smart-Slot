<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
        var auto_refresh = setInterval(
        function ()
        {
        $('#load_me').load('autoreload.php');
        }, 1000); 
                var auto_refresh = setInterval(
        function ()
        {
        $('#load_me1').load('status.php');
        }, 1000); 
        
$(document).ready(function(){
$('#reg').click(function(){
$('#dash').hide();
$('#register').show();
$('#custom').hide();
});
$('#home').click(function(){
$('#dash').show();
$('#register').hide();
$('#custom').hide();
});
$('#clients').click(function(){
$('#dash').hide();
$('#register').hide();
$('#custom').show();
});
});
          
        </script>
<style>
body {
    font-family: "Lato", sans-serif;
   background-color: #898E8C;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
   .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
.header {
  overflow: hidden;
  background-color: #BCBCBE;
  width:95%;
  float: right;
  height:50px;
 
}


.header-right {
  float: right;
}
.article{
	background-color: #B93A32;
	width:100%;
	height:75%;
	}
.led-box {
  height:150px;
  width: 200px;
  margin: 10px 1px -7px;
  float: left;

  
}

.led-box p {
  font-size: 12px;
  text-align: center;
  margin: 1em;
  
}
.led-red {
 margin: 0 auto;
  width: 60px;
  height: 60px;
  background-color: #F00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;

}

.led-green {
  margin: 0 auto;
  width: 60px;
  height: 60px;
  background-color: #ABFF00;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
}
.box{
border: 1px  solid;	
height:300px;
width:50%;
margin: 0 auto;

	}


</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a><i class="fa fa-user-circle-o" style="font-size:70px "></i>    ADMIN</a>
  <a href="#home" id="home"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="#register" id="reg" ><i class="fa fa-fw fa-wrench"></i> Register</a>
  <a href="#clients"  id="clients"><i class="fa fa-fw fa-user"></i> Clients</a>
 <!-- <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a> -->
  <a href="index.php"><i class="fa fa-sign-out" style="margin:5px"></i> Log Out</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <div class="header">
	  <h1><center>BOOK MY SMART SLOT</center></h1>
   <div class="header-right">
  </div>
</div>
</div>
<div id="article">
	<div id="dash">

		<div id="load_me">
	<?php	 include("autoreload.php");?>	
	</div>	
<div id="load_me1">
			<?php	include("status.php"); ?>
					</div>	
	</div>
	<div id="register" style="display:none;"><?php	 include("register.php"); ?></div>
		<div id="custom" style="display:none;"><?php	 include("display.php"); ?></div>
		
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html> 
