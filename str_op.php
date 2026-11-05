<?php
//concatention
$part1="coding in ";
$part2="php programming";
$fullText=$part1.$part2;
echo"1.Combined text:".$fullText."<br>";

//case conversion
$upperText=strtoupper($fullText);
echo"2.Uppercase Text: ".$upperText."<br>";

//string length
$length=strlen($upperText);
echo"3.Total characters: ".$length."<br>";

//word position
$position=strpos($upperText, "PHP");
echo"4.Position of 'PHP':".$position."<br>";

//substring extraction
$extractedWord=substr($upperText,10,11);
echo"5.Extracted word:" .$extractedWord. "<br>";

?>