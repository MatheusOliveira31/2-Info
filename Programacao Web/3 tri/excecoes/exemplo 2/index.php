<?php

require_once("vendor/autoload.php");

use Embed\Embed;
use Embed\Exceptions\InvalidUrlException;

try {
$info = Embed::create("gjydjytd");
echo $info->title;
} catch(InvalidUrlException $e) {
    echo"URL Invalida";
}
//https://www.youtube.com/