<?php

	echo '<link href="style.css" rel = "stylesheet" type = "text/css"/>';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cat = $_POST['cat'];
	$dog = $_POST['dog'];
	$fish = $_POST['fish'];
	$shipping = $_POST['shipping'];
	$shippingCost = 0;

	if($shipping == "Free 7 Day") {
		 $shippingCost = 0;
	}
	else if($shipping == "$50.00 Overnight") { 
		$shippingCost = 50; 
	}
	else if($shipping == "$5.00 Three Day") {
		 $shippingCost = 5; 
	}

	$totalCost = ($cat * 1000) + ($dog) + ($fish * 280) + ($shippingCost);

	if(isset($_POST['submit'])) {

	  echo "Thanks for shopping with us,".$email."!"."<br>";
	  echo "Here is your password (shhh): ".$password."<br>";

	  echo "<table border = '1'>";

	  echo "<tr>";
	    echo "<th>"." "."</th>";
	    echo "<th>"."Quantity"."</th>";
	    echo "<th>"."Cost Per Item"."</th>";
	    echo "<th>"."Sub Total"."</th>";
	  echo "</tr>";

	  echo "<tr>";
	    echo "<th>"."Item 1"."</th>";
	    echo "<td>".$cat."</td>";
	    echo "<td>"."$45.00"."</td>";
	    echo "<td>"."$". $_POST['cat']*1000.00 ."</td>";
	  echo "</tr>";

	  echo "<tr>";
	    echo "<th>"."Item 2"."</th>";
	    echo "<td>".$dog."</td>";
	    echo "<td>"."$50.00"."</td>";
	    echo "<td>"."$". $_POST['dog']."</td>";
	  echo "</tr>";

	  echo "<tr>";
	    echo "<th>"."Item 3"."</th>";
	    echo "<td>".$fish."</td>";
	    echo "<td>"."$65.00"."</td>";
	    echo "<td>"."$". $_POST['fish']*280.00."</td>";
	  echo "</tr>";

	  echo "<tr>";
	    echo "<th>"."Shipping"."</th>";
	    echo "<td colspan = '2'>".$shipping."</td>";
	    echo "<td>"."$".$shippingCost."</td>";
	  echo "</tr>";

	  echo "<tr>";
	  echo "<th colspan = '3'>"."Total Cost"."</th>";
	  echo "<th>"."$".$totalCost."</th>";
	  echo "</tr>";
	  echo "</table>";	
	}
?>
