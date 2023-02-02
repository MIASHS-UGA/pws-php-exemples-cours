<?php

$prenoms = array();

$prenoms[0]='test';
$prenoms[2]='test2';

var_dump($prenoms);

echo $prenoms[1];


function direBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

direBonjour('Marie');
direBonjour('Patrice');
direBonjour('Edouard');
direBonjour('Pascale');
direBonjour('François');
direBonjour('Benoît');
?>
