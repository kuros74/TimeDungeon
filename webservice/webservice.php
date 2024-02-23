<?php

$action = $_POST['action'];

if ($action == "getSoloScores"){
$file=fopen('SoloScores.txt','r');
while($line =fgets($file)){
			echo $line;
		}
		fclose($file);
}

if ($action == "getCoopScores"){
$file=fopen('CoopScores.txt','r');
while($line =fgets($file)){
			echo $line;
		}
		fclose($file);
}


if ($action == "setSoloScores"){

$Rank1 = $_POST["Rank1"];
$Rank2 = $_POST["Rank2"];
$Rank3 = $_POST["Rank3"];
$Rank4 = $_POST["Rank4"];
$Rank5 = $_POST["Rank5"];

$file = fopen("SoloScores.txt", "w");

fwrite($file, $Rank1);
fwrite($file, $Rank2);
fwrite($file, $Rank3);
fwrite($file, $Rank4);
fwrite($file, $Rank5);

fclose($file);
}

if ($action == "setCoopScores"){

$Rank1 = $_POST["Rank1"];
$Rank2 = $_POST["Rank2"];
$Rank3 = $_POST["Rank3"];
$Rank4 = $_POST["Rank4"];
$Rank5 = $_POST["Rank5"];

$file = fopen("CoopScores.txt", "w");

fwrite($file, $Rank1);
fwrite($file, $Rank2);
fwrite($file, $Rank3);
fwrite($file, $Rank4);
fwrite($file, $Rank5);

fclose($file);
}


?>

