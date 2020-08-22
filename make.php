<?php
if (isset($_GET['enSubmit']) && isset($_GET['uname']) && isset($_GET['rname'])){
	echo'<meta http-equiv="refresh" content="100000">';
	$room=$_GET['rname']; 
	$uname=$_GET['uname'];
	if (!is_dir($room)) mkdir($room);
	$files = scandir($room);  
	foreach ($files as $user){
		if ($user=='.' || $user=='..') continue;
		$handle=fopen("$room/$user",'r');
		$time = fread($handle, filesize("$room/$user"));
		fclose($handle);
		if ((time()-$time)>20) unlink("$room/$user"); 
		$wonder = "Wow!";
	}

	$contents='';

	$filename="$room.txt"; //$room.txt	
	if (file_exists($filename)){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);	
		$wonder = "Wow!";
	}

	
$wonder = "Wow!";
	$handle = fopen("$room/$uname", "w");
	fwrite($handle, time());
	fclose($handle);
	
	$files = scandir($room);
	$users='';
	foreach ($files as $user) if ($user!='.' && $user!='..') $users.=$user."\n";
	
	//if (isset($_POST['Send'])) {
	
		$text=$_POST['txt']; 
		$contents.="$uname";
		$handle = fopen("$filename", "a");
		
		fwrite($handle, "$uname");
		fclose($handle);
	//}

$wonder = "Wow!";	
?>

<!--
<!DOCTYPE html>
<html>
<link rel="manifest" href="/manifest.json">
<!--Another head and style thing...-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
<style>
</style>
</head>

<body OnLoad="document.myform.txt.focus() typeWriter() " style="font-family: sans-serif">

<span class="dot"></span>
</div>
<form action="" method="post" name="myform" style="position: fixed; width:100%; height: 100%;">


</center>
<input id="time"  id="txtt" autocomplete="off" name="txt" style="display: none;width: 100%; padding: 2%; height: 25%; color: gray; background-color: white; font-family: sans-serif; font-size: 12pt;" value="cv" >
		</td>
	</tr>
	<tr style="margin: 0; display: none;">
		<td style="margin: 0; display: none;">

	</textarea></td>
		<td style="display: none;border-style: solid;border-width: 1px; height: 39px;padding-left: 8px; width: 143px; text-align: center; display: none;">
		<button  id="myBtn" name="Send" style="display: none;width: 118px; height: 63px; font-size: 30pt; font-family: 'Times New Roman', Times, serif; color: #19B024;" type="submit" onclick="mr()" value="Send"></button>
       </td>
	</tr>
</table>
</form>
<div style="z-index: 100000000000000000000000000; background-color: lightgrey; width: 100%; height: 100%; top:0; left: 0; right:0; bottom:0;"><br></div>
<script>
window.onload = function() {
	window.location = "http://tennis.roydero.com/home.html";
}
</script>
<?php
}else {
?>

<form method="get" action="">
<div id="yolome"></div>
<div class="pizza">

<table style="border: none;background-color: #31A4E1; width: 100%; height: 100%;" align="center">
<thead>
<center><h1 style="color: white;background-color: #31A4E1;">Join the Online Community!</h1> </center>
</thead>
<tbody>
	<tr>
		<td style="font-family: sans-serif;font-size: 17pt;text-align: left; width: 502px; color: white;"><center>Name:</center></td>
		<td style="font-family: sans-serif; font-size: 17pt; text-align: left; color: white; width: 500px;">
		<center><input id="name" maxlength="15" id="nickname" name="uname" style="font-size: medium; width: 100px; color: #31A4E1;" required></center></td>
	</tr>
	<tr>
		<td style="font-family: sans-serif;font-size: 17pt;text-align: left; width: 432px; color: white;"><center>Select a recent Forum!:</center></td>
		<td style="font-family: sans-serif; font-size: 17pt; text-align: left; color: #31A4E1; width: 100px;">
		<center>
	<select name="rname" style="width: 260px; font-size: medium; color: #31A4E1;">
<option selected="">Tennis1</option>
		<option>How does the shipping process work? </option>
		</select></center></td>
	</tr>
	<tr>
		<td style="font-family: sans-serif;font-size: 17pt;text-align: center; color: #31A4E1; padding-top:10px;padding-bottom:10px" colspan="2">
		<input name="enSubmit" style="width: 118px;border: none;background-color: white; height: 63px; font-size: 30pt; font-family: sans-serif; color: #31A4E1" type="submit" onclick="store()" value="Enter" ></td>
	</tr>
	</tbody>
</table>
</form>

</div>

<?php
}
?>


<head>
<title> Reserve </title>
<link rel="icon" type="image/ico0.2ref="images/oof.png" />

<style>


//media screen//


@media screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape) {
  html {
    transform: rotate(-90deg);
    transform-origin: left top;
    width: 100vh;
    overflow-x: hidden;
    position: absolute;
    top: 100%;
    left: 0;
  }
}






//media screen//
textarea > span{
    font-style: italic;
}

.fa-plus {
	position: fixed;
	top: 5;
	right:5;

	z-index: 2
}
.pizza {
  position: fixed;
  top: 200;
    width: 100%
}
</style>

</head>




</body>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<style>
.dot {
  height: 25px;
  width: 25px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  position: absolute;
  top:0;
  right:0;
  z-index: 0.1;
}<!--

.pizza {
  position: fixed;
  top: 200;
    width: 100%
}
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 100px;
  background-color: navy;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;

  left: 50%;
  margin-left: 120px;
}

/* Popup arrow */


/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
/* Popup container - can be anything you want */
.popup1 {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup1 .popuptext1 {
  visibility: hidden;
  width: 100px;
  background-color: navy;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;

  left: 50%;
  margin-left: 20px;
}

/* Popup arrow */


/* Toggle this class - hide and show the popup */
.popup1 .show1 {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

</style>
</head>


<script>
AOS.init({
  duration: 1200,
})

</script>
</html>
