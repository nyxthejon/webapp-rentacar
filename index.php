<?php
require 'header.php';

$oglasi = baza::selectoglasi();
foreach ($oglasi as $oglas)
{
    echo $oglas;
}
