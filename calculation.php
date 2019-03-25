<?php
class Calculator{

function sum($x, $y) {
	return $x + $y;
}

function sub($x,$y){
    return $x-$y;
}

function mult($x,$y){
    return $x*$y;
} 

function div($x,$y){
    if ($y != 0){
    return $x/$y;
    }
    else {
        echo "Je t'ai vu, t'as essaye de diviser par 0!";
    }
}
}
$op = $_GET["op"];
$x = $_GET["x"];
$y=$_GET["y"];
$calculator = new Calculator();
switch($op){
    case "sum":
        echo $calculator->sum($x, $y);
        echo "\n";
        break;
    case "sub":
        echo $calculator->sub($x, $y);
        echo "\n";
        break;
    case "mult":
        echo $calculator->mult($x, $y);
        echo "\n";
        break;
    case "div":
        echo $calculator->div($x, $y);
        echo "\n";
        break;
}
?>