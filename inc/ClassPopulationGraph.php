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

                    var AAAF = [];
                    var AAAM = [];
                    var BBBF = [];
                    var BBBM = [];
                    var CCCF = [];
                    var CCCM = [];
                    var DDDF = [];
                    var DDDM = [];
                    var EEEF = [];
                    var EEEM = [];
                    var FFFF = [];
                    var FFFM = [];
                    var GGGF = [];
                    var GGGM = [];


                    //Use uppercase for the retriving data names
                    for (var i in data) {
                        AAAF.push(data[i].FTOTAL_1);
                        AAAM.push(data[i].MTOTAL_1);
                        BBBF.push(data[i].FTOTAL_2);
                        BBBM.push(data[i].MTOTAL_2);
                        CCCF.push(data[i].FTOTAL_3);
                        CCCM.push(data[i].MTOTAL_3);
                        DDDF.push(data[i].FTOTAL_4);
                        DDDM.push(data[i].MTOTAL_4);
                        EEEF.push(data[i].FTOTAL_5);
                        EEEM.push(data[i].MTOTAL_5);
                        FFFF.push(data[i].FTOTAL_6);
                        FFFM.push(data[i].MTOTAL_6);
                        GGGM.push(data[i].MTOTAL_7);
                        GGGF.push(data[i].FTOTAL_7);
                    

                        

                    }

                    var chartdata = {
                        labels: ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF", "GGG"],      

                        datasets: [
                            {
                                label: "Female",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [AAAF, BBBF, CCCF, DDDF, EEEF, FFFF, GGGF],
                                backgroundColor: ["HotPink","HotPink","HotPink","HotPink","HotPink","HotPink","HotPink",],
                            },

                            {
                                label: "Male",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [AAAM, BBBM, CCCM, DDDM, EEEM, FFFM, GGGM],
                                backgroundColor: ["#0a51f2","#0a51f2","#0a51f2","#0a51f2","#0a51f2","#0a51f2","#0a51f2"],

                            },

                        ]
                    };




                    

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,
                        
                    });
                });
            }
        }
        </script>

</body>
</html>
