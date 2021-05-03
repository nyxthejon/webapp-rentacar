<?php
require 'header.php';
$kr = baza::izpiskrajev();
?>
<table class="table table-bordered">
    <tr>
        <th>Kraj</th>
        <th>Pošta</th>
        <th>Število Oglasov</th>
    </tr>

    <?php
    foreach ($kr as $k) {

        echo "<tr>";
        echo "<td>".$k->imek."</td>";
        echo "<td>".$k->posta."</td>";
        echo "<td>".$k->stog."</td>";
        echo "</tr>";

    }

    ?>
</table>
</body>
</html>