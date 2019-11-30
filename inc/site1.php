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
                    var five = [];
                    var six = [];
                    var seven = [];
                    var eight = [];
                    var nine = [];
                    var ten = [];
                    var eleven = [];
                    var twelve = [];


                    //Use uppercase for the retriving data names
                    for (var i in data) {
                        one.push(data[i].INT1);
                        two.push(data[i].INT2);
                        three.push(data[i].INT3);
                        four.push(data[i].INT4);
                        five.push(data[i].INT5);
                        six.push(data[i].INT6);
                        seven.push(data[i].INT7);
                        eight.push(data[i].INT8);
                        nine.push(data[i].INT9);
                        ten.push(data[i].INT10);
                        eleven.push(data[i].INT11);
                        twelve.push(data[i].INT12);
                    }

                    var chartdata = {
                        labels: ["100 interactions pass rate", 
                        "200 interactions pass rate", 
                        "300 interactions pass rate", 
                        "400 interactions pass rate",
                        "500 interactions pass rate",
                        "600 interactions pass rate",
                        "700 interactions pass rate",
                        "800 interactions pass rate",
                        "900 interactions pass rate",
                        "1000 interactions pass rate",
                        "1100 interactions pass rate",
                        "1200 interactions pass rate"],      

                        datasets: [
                            {
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(one * 100), (two*100), (three*100), (four*100),(five*100), (six*100), 
                                (seven*100), (eight*100), (nine*100), (ten*100), (eleven*100), (twelve*100)],
                                backgroundColor: ["#ffff00", "#00ff00","#007900","#00aeae","#0000ff", "#7308a5", 
                                "#ba00ff", "#cc00af", "#ff0000", "#ff4600", "#ff7f00", "#feb300"],

                            }
                        ]
                    };

                    


                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'horizontalBar',
                        data: chartdata
                        
                    });
                });
            }

            

        }
        </script>

</body>
</html>
