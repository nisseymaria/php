<?php
$student=["Bob","Alice","Diana","Eve","Charlie"];
echo"Original Array: <br>";
print_r($student);
echo"<br><br>";

arsort($student);
echo"Array sorted in ascending order :<br>";
print_r($student);
echo"<br><br>";

// desending
arsort($student);
echo"Array sorted in descending order: <br>";
print_r($student);
?>