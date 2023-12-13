<?php

class Formatador {

    public static function numeroParaMonetario($numero){
        return "R$ " . number_format($numero, 2, ",", ".");
    }
}