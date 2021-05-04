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
    public $zadnja;

    public $pot = 'C:\xampp\htdocs\webapp\img';



    public function __construct1($znamka,$model,$imeuporabnika,$priimek,$pot)
    {
        $this->znamka = $znamka;
        $this->model = $model;
        $this->imeuporabnika = $imeuporabnika;
        $this->priimek = $priimek;
        $this->pot = $pot;
    }
    public function __construct($znamka,$model,$imeuporabnika,$priimek,$cena,$letnik,$kraj,$pot,$zadnja)
    {
        $this->znamka = $znamka;
        $this->model = $model;
        $this->imeuporabnika = $imeuporabnika;
        $this->priimek = $priimek;
        $this->cena = $cena;
        $this->letnik = $letnik;
        $this->kraj = $kraj;
        $this->pot = $pot;
        $this->zadnja = $zadnja;
    }



}