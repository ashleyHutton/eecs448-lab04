<?php
//Inside myfirstprogram.php
function multiply($x, $y) {
    $z = $x * $y;
    return $z;
}

echo "<table>";

	for ($x = 0; $x <= 100; $x++) {

		if ($x == 0){
			echo "<th> &nbsp </th>";
		}
		else{
			echo " <th> $x </th> ";
		}
	}

	for ($x = 1; $x <= 100; $x++) {

		echo "<tr> <th> $x </th>";

		for ($y = 1; $y <= 100; $y++) {

			echo "<td> " . multiply($x, $y) . " </td>";

		}
		
		echo "</tr>";

	}



echo "</table>";


?>
