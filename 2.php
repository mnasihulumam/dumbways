<!DOCTYPE html>
<html>
<head>
	<title>Nilai</title>
</head>
<body>
	<form method="post" action="2.php">
		<table>
			<tr>
				<td>Banyak Nilai yang akan diinputkan</td>
				<td>
					<input type="number" name="n">
				</td>
				<td>
					<button name="submit" type="submit" onchange="">Submit</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	$n = $_POST['n'];
	echo "<form method='post' action='2.1.php'>";
	for ($i = 0; $i <= $n-1; $i++)
	{
	 echo "Nilai ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
	}
	 echo "<input type='submit' name='submit' value='Submit' />";
	 echo "<input type='hidden' name='n' value='".$n."' />";
	echo "</form>";
}
?>