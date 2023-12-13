<?php

echo "Inico do arquivo: <br>";

try {
    $x = 8 / 2;
    echo $x;
} catch (Error $e) {
    echo $e->getMessage();
} finally {
    echo "<br> Fim do arquivo";
}
