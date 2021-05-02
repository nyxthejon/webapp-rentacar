<?php
require 'header.php';

$oglasiarray = baza::zasedenioglasi();

?>
<table>
    <tr>
        <th>Znamka</th>
        <th>Model</th>
        <th>Letnik</th>
        <th>Uporabnik</th>
        <th>Cena Oglasa</th>
        <th>Kraj Oglasa</th>
        <th>Slika</th>
        <th>Zasedeni Casi</th>
    </tr>

    <?php
    foreach ($oglasiarray as $oglas) {

        $id = baza::idOglasa($oglas->model,$oglas->znamka,$oglas->letnik,$oglas->cena,$oglas->imeuporabnika,$oglas->priimek,$oglas->kraj,$oglas->pot);
        $casiarray = baza::zasedenicasi($id);
        echo "<tr>";
        echo "<td>".$oglas->znamka."</td>";
        echo "<td>".$oglas->model."</td>";
        echo "<td>".$oglas->letnik."</td>";
        echo "<td>".$oglas->imeuporabnika." ".$oglas->priimek."</td>";
        echo "<td>".$oglas->cena."</td>";
        echo "<td>".$oglas->kraj."</td>";
        echo "<td>".$oglas->pot."</td>";
        echo "<td>";
        foreach($casiarray as $cas)
        {
            $casova = explode("|",$cas);
            $odcas = explode("+",$casova[0]);
            $docas = explode("+",$casova[1]);
            echo "Od: ".$odcas[0]." Do: ".$docas[0]."<br>";
        }
        echo "</td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>
