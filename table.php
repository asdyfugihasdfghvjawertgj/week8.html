<!DOCTYPE html>
<html>
<head>
	<title>PHP form</title>
</head>
<body>
	
<table border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		echo "<tr><td>".$_SESSION['user']."</td><td>".$_SESSION['ema']."</td><td>".$_SESSION['ph']."</td></tr>"; 


		?>

	</tbody>
</table>

</body>
</html>