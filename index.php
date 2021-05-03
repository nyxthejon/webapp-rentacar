<?php
require 'header.php';
$upo = baza::izpuporabniki();
?>
<table>
    <tr>
        <th>Email</th>
        <th>Ime in Priimek</th>
        <th>Telefon</th>
        <th>Datum Rojstva</th>
        <th>Kraj</th>
    </tr>

    <?php
    foreach ($upo as $u) {

        $split = explode(" ",$u->datum_roj);

        echo "<tr>";
        echo "<td>".$u->email."</td>";
        echo "<td>".$u->ime." ".$u->priimek."</td>";
        echo "<td>".$u->telefon."</td>";
        echo "<td>".$split[0]."</td>";
        echo "<td>".$u->kraj."</td>";
        echo "</tr>";

    }

    ?>
</table>
</body>
</html>
