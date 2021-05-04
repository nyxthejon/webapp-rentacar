<?php require 'header.php';

$kicas = baza::oglasipokrajih();
$zpro = baza::procentznamk();
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">

        window.onload = function () {
            //kraj chart
            var krajchart = new CanvasJS.Chart("chartkraj", {
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
            krajchart.render();
            //znamke chart
            var zchart = new CanvasJS.Chart("chartznamka", {
                title:{
                    text: "Procent avtomobilov glede na znamko"
                },
                data: [
                    {
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "doughnut",
                        dataPoints: [
                            <?php
                            foreach ($zpro as $z)
                            {
                                $split = explode("|",$z);

                                echo "{ label: '$split[0]', y:".floor($split[1])."},";
                            }



                            ?>


                        ]
                    }
                ]
            });
            zchart.render();
        }
    </script>
</head>
<body>
<div id="chartkraj" ></div>
<div id="chartznamka"></div>
</body>
</html>