<?php require 'header.php';
$kicas = baza::oglasipokrajih();
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">

        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                title:{
                    text: "Stevilo oglasov glede na kraj"
                },
                data: [
                    {
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "column",
                        dataPoints: [
                            <?php
                            foreach ($kicas as $k)
                            {
                                $split = explode("|",$k);
                                echo "{ label: '$split[1]', y:$split[0] },";
                            }



                        ?>


                        ]
                    }
                ]
            });
            chart.render();
        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>