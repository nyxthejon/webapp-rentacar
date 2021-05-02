<?php
require_once 'baza.php';

$oglasi = baza::selectoglasi();
foreach ($oglasi as $oglas)
{
    echo $oglas[0];
}
