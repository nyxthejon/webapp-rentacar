<?php
require 'oglasi.php';
Class baza
{
    static function con()
    {
        return pg_connect("host=ec2-52-19-170-215.eu-west-1.compute.amazonaws.com dbname=dal6j2j2bi233e user=ooenbkgvbwqtco password=b26c71535815417b340efb10b2d2a4914b6bdb03a2dc611b9381e76b794bf457");
    }

    //izpis oglasov
    static function selectoglasi()
    {
        $izpisoglasi = array();
        $result = pg_query(self::con(),"SELECT m.ime_m,z.ime_z,a.letnik,o.cena_ura,u.ime_u,u.priimek_u,k.ime_k,a.pot_slike FROM znamke z INNER JOIN modeli m ON m.id_znamke = z.id_z INNER JOIN
avtomobili a ON a.id_modela = m.id_m INNER JOIN oglasi o ON o.id_avtomobila = a.id_a INNER JOIN uporabniki u ON u.id_u = o.id_uporabnika INNER JOIN kraji k ON k.id_k = o.id_kraja;");
        $x = 0;
        while($row = pg_fetch_row($result))
        {
            $ogl = new oglasi($row[1],$row[0],$row[4],$row[5],$row[3],$row[2],$row[6],$row[7]);
            $izpisoglasi[$x] = $ogl;
            $x++;
        }
        pg_close();
        return $izpisoglasi;
    }



}