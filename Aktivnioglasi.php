<?php
require 'header.php';

$ok = 0;
if(isset($_POST['arhivbutton'])) {
    $ok = 1;
    $oglasiarray = baza::arhivoglasi();
    ?>
    <form method="post">
        <input type = "submit" name="normalbutton"
               value="Samo rezervirani oglasi" class="btn btn-info">
    </form>
<?php
}
else
{
    $ok = 2;
    $oglasiarray = baza::zasedenioglasi();
    ?>
    <form method="post">
        <input type = "submit" name="arhivbutton"
               value="Arhiv oglasov" class="btn btn-info">
    </form>
<?php
}


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
        <th>Zasedeni Casi</th>
    </tr>

    <?php
    foreach ($oglasiarray as $oglas) {
        if($ok == 1)
        {
            $id = baza::idarhivoglasa($oglas->model,$oglas->znamka,$oglas->letnik,$oglas->cena,$oglas->imeuporabnika,$oglas->priimek,$oglas->kraj,$oglas->pot);
            $casiarray = baza::zasedeniarhivcasi($id);
        }
        else
        {
            $id = baza::idOglasa($oglas->model,$oglas->znamka,$oglas->letnik,$oglas->cena,$oglas->imeuporabnika,$oglas->priimek,$oglas->kraj,$oglas->pot);
            $casiarray = baza::zasedenicasi($id);
        }

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
