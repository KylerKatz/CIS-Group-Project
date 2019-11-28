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
                $.post("index1.php",
                function (data)
                {
                    console.log(data);

                    var one = [];
                    var two = [];
                    var three =[];
                    var four = [];


                    //Use uppercase for the retriving data names
                    for (var i in data) {
                        one.push(data[i].INT1);
                        two.push(data[i].INT2);
                        three.push(data[i].INT3);
                        four.push(data[i].INT4);
                    }

                    var chartdata = {
                        labels: ["100 interactions pass rate", "200 interactions pass rate", "300 interactions pass rate", "400 interactions pass rate"],      

                        datasets: [
                            {
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(one * 100), (two*100), (three*100), (four*100)],
                                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],

                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>
