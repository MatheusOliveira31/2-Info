<?php
$num = $_POST['num'];
$tab = 0;
for($tab = 0;$tab <= 10; $tab++){
    $total = $num * $tab;
    echo "$num x $tab = $total <br>";
}