<?php
session_start();
include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>datalist.php</title>
	
</head>
<style type="text/css">
	.data li{
		clear: left;
		list-style: decimal;
	}
</style>
<body>
<h1>Student's datalist</h1>
<div class="container">
	<div class="row">
		
	</div>
</div>
<ul class="data">
<?php
if ($_SESSION['input8']=="Burmese" && $_SESSION['input12']=="+95 (Myanmar)") {
	echo "<li>".$_SESSION['input1']."</li><li>".$_SESSION['input2']."</li><li>".$_SESSION['input3']."</li><li>".$_SESSION['input4']."</li><li>".$_SESSION['input5']."</li><li>".$_SESSION['input6']."</li><li>".$_SESSION['input7']."</li><li>".$_SESSION['input8']."</li><li>".$_SESSION['input9']."</li><li>".$_SESSION['input10']."</li><li>".$_SESSION['input11']."</li><li>".$_SESSION['input12']."</li><li>".$_SESSION['input13']."</li>";
}
else{
	echo "This student is not Myanmar";
}
?>	
</ul>
</body>
</html>