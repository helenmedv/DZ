<?php


include_once 'autoload.php';

$people = new Collection();
$people['John'] = 'Wick';
$people['Sarah'] = 'Connor';

var_dump($people->toArray());
