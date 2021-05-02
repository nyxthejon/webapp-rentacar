<?php
require 'header.php';

$oglasiarray = baza::selectoglasi();
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
    </tr>

    <?php
foreach ($oglasiarray as $oglas) {

    echo "<tr>";
    echo "<td>".$oglas->znamka."</td>";
    echo "<td>".$oglas->model."</td>";
    echo "<td>".$oglas->letnik."</td>";
    echo "<td>".$oglas->imeuporabnika." ".$oglas->priimek."</td>";
    echo "<td>".$oglas->cena."</td>";
    echo "<td>".$oglas->kraj."</td>";
    echo "<td>".$oglas->pot."</td>";
    echo "</tr>";


}

?>
</table>
</body>
</html>
