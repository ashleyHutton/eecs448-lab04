<?php
//access the global array called $_POST to get the values from the fields
$q1c = $_POST["q1"];
$q2c = $_POST["q2"];
$q3c = $_POST["q3"];
$q4c = $_POST["q4"];
$q5c = $_POST["q5"];

$numCorrect = 0;

if (isset($_POST['submit'])){

	if($q1 == "2") {
		$numCorrect++;
	}
	if($q2 == "0") {
		$numCorrect++;
	}
	if($q3 == "-12") {
		$numCorrect++;
	}
	if($q4 == "678") {
		$numCorrect++;
	}
	if($q5 == "-1") {
		$numCorrect++;
	}


	echo "Question 1: 1 + 1 = <br>";
	echo "You answered: " .$q1. "<br>";
	echo "Correct answer: 2.<br>";

	echo "<br>Question 2: 12 - 12 = <br>";
	echo "You answered: " .$q1. " <br>";
	echo "Correct answer: 0.<br>";

	echo "<br>Question 3: 0 - 12 = <br>";
	echo "You answered: " .$q3. " <br>";
	echo "Correct answer: -12.<br>";

	echo "<br>Question 4: 670 + 8 = <br>";
	echo "You answered: " .$q4. " <br>";
	echo "Correct answer: 678.<br>";

	echo "<br>Question 5: 1 - 2 = <br>";
	echo "You answered: " .$q5. " <br>";
	echo "Correct answer: -1<br>";

	echo "Score: " .$numCorrect. "/5<br>";

	echo "= " .($correct/5)*100 "%";
}

?>
