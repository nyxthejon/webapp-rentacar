<?php
require 'Oglasi.php';
Class baza
{
    static function con()
    {
        return pg_connect("host=ec2-52-19-170-215.eu-west-1.compute.amazonaws.com dbname=dal6j2j2bi233e user=ooenbkgvbwqtco password=b26c71535815417b340efb10b2d2a4914b6bdb03a2dc611b9381e76b794bf457");
    }

    //izpis oglasov
    static function selectoglasi()
    {
        $oglasi = array();
        $result = pg_query(self::con(),"SELECT * FROM modeli;");
        $x = 0;
        while($row = pg_fetch_row($result))
        {
            $ogl = $row[3];
            $oglasi[$x] = $ogl;
            $x++;
        }
        pg_close();
        return $oglasi;
    }
}