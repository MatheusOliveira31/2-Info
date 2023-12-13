<?php

class Calculador {

    public static function realParaDolar($numero){
        return ($numero * 0.20);
    }
    public static function dolarParaReal($numero){
        return ($numero / 0.20);
    }
    public static function realParaBitcoin($numero){
        return ($numero * 0.0000068);
    }
    public static function bitcoinParareal($numero){
        return ($numero * 147352.19);
    }
}