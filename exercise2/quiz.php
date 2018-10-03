<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$Q1 = $_POST["input1"];
$Q2 = $_POST["input2"];
$Q3 = $_POST["input3"];
$Q4 = $_POST["input4"];
$Q5 = $_POST["input5"];
$correct = 0;
if ($Q1 == "It just wouldn't") {
    $correct++;
}
if ($Q2 == "The color of whatever it's reflecting") {
    $correct ++;
}
if ($Q3 == "Sphere") {
    $correct ++;
}
if ($Q4 == "Absolutely 100%") {
    $correct ++;
}
if ($Q5 == "I'm not lying") {
    $correct ++;
}
$grade = ($correct/5)*100;
echo "Q1: How much wood could a wood chuck chuck if a woodchuck could chuck wood?<br>";
echo "Your answer: $Q1<br>";
echo "Correct answer: None<br><br>";

echo "What color is a mirror?<br>";
echo "Your answer: $Q2<br>";
echo "Correct answer: The color of whatever it's reflecting<br><br>";

echo "What shape is the earth?<br>";
echo "Your answer: $Q3<br>";
echo "Correct answer: Sphere<br><br>";

echo "Are you sure?<br>";
echo "Your answer: $Q4<br>";
echo "Correct answer: Absolutely 100%<br><br>";

echo "Why are you lying to me?<br>";
echo "Your answer: $Q5<br>";
echo "Correct answer: I'm not lying<br><br>";

echo "Grade: $grade%"

?>