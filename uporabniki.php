<?php

class uporabniki
{
public $email;
public $ime;
public $priimek;
public $telefon;
public $kraj;
public $datum_roj;

    public function __construct($email,$ime,$priimek,$telefon,$kraj,$datum_roj)
    {
        $this->email = $email;
        $this->ime = $ime;
        $this->priimek = $priimek;
        $this->telefon = $telefon;
        $this->kraj = $kraj;
        $this->datum_roj = $datum_roj;
    }

}