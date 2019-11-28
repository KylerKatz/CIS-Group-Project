<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
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
            
                $.post("index2.php",
                function (data)
                {
                    console.log(data);

                    var one = [];
                    var two = [];
                    var three =[];
                    var four = [];
                    var one1 = [];
                    var two1 = [];
                    var three1 =[];
                    var four1 = [];
                    var one2 = [];
                    var two2 = [];
                    var three2 =[];
                    var four2 = [];


                    //Use uppercase for the retriving data names
                    for (var i in data) {
                        one.push(data[i].P1);
                        two.push(data[i].W1);
                        three.push(data[i].D1);
                        four.push(data[i].F1);
                        one1.push(data[i].P2);
                        two1.push(data[i].W2);
                        three1.push(data[i].D2);
                        four1.push(data[i].F2);
                        one2.push(data[i].P3);
                        two2.push(data[i].W3);
                        three2.push(data[i].D3);
                        four2.push(data[i].F3);
                    }

                    var chartdata = {
                        labels: ["2013J 35- 55", "2013J 35- 55", "2013J 55+"],      

                        datasets: [
                            {
                                label: "Pass",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(one* 100), (one1*100), (one2*100)],
                                backgroundColor: ["Red", "Red", "Red"],
                                

                            },

                            {
                                label: "Withdraw",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(two * 100), (two1 *100), (two2 *100)],
                                backgroundColor: ["Yellow", "Yellow", "Yellow"],

                            },

                            {
                                label: "Distinct",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(three *100), (three1*100), (three2*100)],
                                backgroundColor: ["Blue", "Blue", "Blue"],

                            },
                            
                            {
                                label: "Fail",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(four *100), (four1*100), (four2*100)],
                                backgroundColor: ["Green", "Green", "Green"],

                            },

                        ]
                    };

                    // var options = {
                    //     scales: {
                    //         yAxes: [{
                    //             ticks: {
                    //                 fontSize: 80
                    //             }
                    //         }]
                    //     }
                    // }

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    })
                })
                
                
            };
        </script>

</body>
</html>
