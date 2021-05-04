<?php
require 'header.php';
require 'aws.php';

$oglasiarray = baza::selectoglasi();
?>
<table class = "table table-bordered">
    <tr>
        <th>Znamka</th>
        <th>Model</th>
        <th>Letnik</th>
        <th>Uporabnik</th>
        <th>Cena Oglasa</th>
        <th>Kraj Oglasa</th>
        <th>Slika</th>
        <th>Zadnja Rezervacija</th>
    </tr>

    <?php
    $dir = 'img\\';
foreach ($oglasiarray as $oglas) {

    echo "<tr>";
    echo "<td>".$oglas->znamka."</td>";
    echo "<td>".$oglas->model."</td>";
    echo "<td>".$oglas->letnik."</td>";
    echo "<td>".$oglas->imeuporabnika." ".$oglas->priimek."</td>";
    echo "<td>".$oglas->cena."</td>";
    echo "<td>".$oglas->kraj."</td>";
    echo "<td><img src='".$dir.$oglas->pot."'> </td>";
    echo "<td>".$oglas->zadnja."</td>";
    echo "</tr>";


}

?>
</table>
</body>
</html>
