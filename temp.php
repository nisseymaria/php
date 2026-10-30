<?php
function celsiusToFahrenheit($celsius){
	return($celsius * 9/5)+32;
}
$celsiusTemp=25;
$fahrenheitTemp=celsiusToFahrenheit($celsiusTemp);
echo $celsiusTemp ."°c is equal to ".$fahrenheitTemp ."°F";
?>