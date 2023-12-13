<?php
$pri = $_POST['pri'];
$seg = $_POST['seg'];
$vezes = $pri * $seg;
for($i = 1; $i <= $pri; $i++){
echo $seg;
if($i != $pri)echo " + ";}
echo " = $vezes";