<?php


class oglasi
{
    public $znamka;
    public $model;
    public $letnik;
    public $kw;
    public $ccm;
    public $opis;
    public $km;

    public $imeuporabnika;
    public $priimek;

    public $kraj;
    public $cena;

    public $naslov;




    public function __construct($znamka,$model,$imeuporabnika,$priimek,$cena)
    {

        $this->znamka = $znamka;
        $this->model = $model;
        $this->imeuporabnika = $imeuporabnika;
        $this->priimek = $priimek;
        $this->cena = $cena;
    }

}