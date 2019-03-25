<?php
$names = array("Patrick", "JohnPa", "Marie", "Claire", "Paul");
foreach ($names as $name) {
    if (strpos($name,"Pa") === 0){
       print "$name, ";
    }   
}
?>