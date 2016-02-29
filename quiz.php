<?php
//access the global array called $_POST to get the values from the fields
$q1c = $_POST["q1c"];
$q2c = $_POST["q2c"];
$q3c = $_POST["q3c"];
$q4c = $_POST["q4c"];
$q5c = $_POST["q5c"];


echo "Question 1: 1 + 1 = <br>";
echo "You answered: <br>";
echo "Correct answer: " . $q1c ."<br>";


echo "<br>Question 2: 12 - 12 = <br>";
echo "You answered: <br>";
echo "Correct answer: " . $q2c ."<br>";


echo "<br>Question 3: 0 - 12 = <br>";
echo "You answered: <br>";
echo "Correct answer: " . $q3c ."<br>";


echo "<br>Question 4: 670 + 8 = <br>";
echo "You answered: <br>";
echo "Correct answer: " . $q4c ."<br>";


echo "<br>Question 5: 1 - 2 = <br>";
echo "You answered: <br>";
echo "Correct answer: " . $q5c ."<br>";

?>
