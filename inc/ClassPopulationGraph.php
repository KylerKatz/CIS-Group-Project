<!DOCTYPE html>
<html>
<head>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>

</head>
<body>
<div id="chart-container">
     <canvas id="graphCanvas"></canvas>
    </div>
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("ClassPopulationQuery.php",
                function (data)
                {
                    console.log(data);

                    var AAA = [];
                    var BBB = [];
                    var CCC = [];
                    var DDD = [];
                    var EEE = [];
                    var FFF = [];
                    var GGG = [];


                    //Use uppercase for the retriving data names
                    for (var i in data) {
                        AAA.push(data[i].C1);
                        BBB.push(data[i].C2);
                        CCC.push(data[i].C3);
                        DDD.push(data[i].C4);
                        EEE.push(data[i].C5);
                        FFF.push(data[i].C6);
                        GGG.push(data[i].C7);

                    }

                    var chartdata = {
                        labels: [
                        "Female to Male class AAA population", 
                        "Female to Male class BBB population", 
                        "Female to Male class CCC population", 
                        "Female to Male class DDD population", 
                        "Female to Male class EEE population",
                        "Female to Male class FFF population",
                        "Female to Male class GGG population"
                    ],      

                        datasets: [
                            {
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(AAA), (BBB), (CCC), (DDD), (EEE), (FFF),(GGG)],
                                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],

                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>
