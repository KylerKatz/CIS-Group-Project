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
        <button id="button1" name="action">2013 Spring</button>
        <button id="button2" name="action">2013 Fall</button>
        <button id="button3" name="action">2014 Spring</button>
        <button id="button4" name="action">2014 Fall</button>

    </div>
    <script>
        $(document).ready(function() {

            var val = "";

            $('#button1').on('click', function() {
                var val = "1";
                showGraph(val);
            });
            $('#button2').on('click', function() {
                var val = "2";
                showGraph(val);
            });
            $('#button3').on('click', function() {
                var val = "3";
                showGraph(val);
            });
            $('#button4').on('click', function() {
                var val = "4";
                showGraph(val);
            });



        });


        function showGraph(val) {
            {
                $.get("ClassPopulationQuery.php",
                    function(data) {
                        console.log(val);

                        if (val == "1") {
                            var data1 = data['data1'];
                        }
                        if (val == "2") {
                            var data1 = data['data2'];
                        }
                        if (val == "3") {
                            var data1 = data['data3'];
                        }
                        if (val == "4") {
                            var data1 = data['data4'];
                        }

                        console.log(data1);



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

                        if (val == 1) {



                            //  Trying to clear the arrays for the graph, this isn't working 
                            AAAF = [];
                            AAAM = [];
                            BBBF = [];
                            BBBM = [];
                            CCCF = [];
                            CCCM = [];
                            DDDF = [];
                            DDDM = [];
                            EEEF = [];
                            EEEM = [];
                            FFFF = [];
                            FFFM = [];
                            GGGF = [];
                            GGGM = [];


                            //Use uppercase for the retriving data names
                            for (var i in data) {
                                AAAF.push(data[i].AAAFTOTAL2013B);
                                AAAM.push(data[i].AAAMTOTAL2013B);
                                BBBF.push(data[i].BBBFTOTAL2013B);
                                BBBM.push(data[i].BBBMTOTAL2013B);
                                CCCF.push(data[i].CCCFTOTAL2013B);
                                CCCM.push(data[i].CCCMTOTAL2013B);
                                DDDF.push(data[i].DDDFTOTAL2013B);
                                DDDM.push(data[i].DDDMTOTAL2013B);
                                EEEF.push(data[i].FFFFTOTAL2013B);
                                EEEM.push(data[i].FFFMTOTAL2013B);
                                FFFF.push(data[i].EEEFTOTAL2013B);
                                FFFM.push(data[i].EEEMTOTAL2013B);
                                GGGF.push(data[i].GGGFTOTAL2013B);
                                GGGM.push(data[i].GGGMTOTAL2013B);

                            }


                        }


                        if (val == 2) {


                            //Use uppercase for the retriving data names
                            for (var i in data) {
                                AAAF.push(data[i].AAAFTOTAL2013J);
                                AAAM.push(data[i].AAAMTOTAL2013J);
                                BBBF.push(data[i].BBBFTOTAL2013J);
                                BBBM.push(data[i].BBBMTOTAL2013J);
                                CCCF.push(data[i].CCCFTOTAL2013J);
                                CCCM.push(data[i].CCCMTOTAL2013J);
                                DDDF.push(data[i].DDDFTOTAL2013J);
                                DDDM.push(data[i].DDDMTOTAL2013J);
                                EEEF.push(data[i].FFFFTOTAL2013J);
                                EEEM.push(data[i].FFFMTOTAL2013J);
                                FFFF.push(data[i].EEEFTOTAL2013J);
                                FFFM.push(data[i].EEEMTOTAL2013J);
                                GGGF.push(data[i].GGGFTOTAL2013J);
                                GGGM.push(data[i].GGGMTOTAL2013J);

                            }


                        }


                        if (val == 3) {


                            //Use uppercase for the retriving data names
                            for (var i in data) {
                                AAAF.push(data[i].AAAFTOTAL2014B);
                                AAAM.push(data[i].AAAMTOTAL2014B);
                                BBBF.push(data[i].BBBFTOTAL2014B);
                                BBBM.push(data[i].BBBMTOTAL2014B);
                                CCCF.push(data[i].CCCFTOTAL2014B);
                                CCCM.push(data[i].CCCMTOTAL2014B);
                                DDDF.push(data[i].DDDFTOTAL2014B);
                                DDDM.push(data[i].DDDMTOTAL2014B);
                                EEEF.push(data[i].FFFFTOTAL2014B);
                                EEEM.push(data[i].FFFMTOTAL2014B);
                                FFFF.push(data[i].EEEFTOTAL2014B);
                                FFFM.push(data[i].EEEMTOTAL2014B);
                                GGGF.push(data[i].GGGFTOTAL2014B);
                                GGGM.push(data[i].GGGMTOTAL2014B);

                            }


                        }
                        if (val == 4) {


                            //Use uppercase for the retriving data names
                            for (var i in data) {
                                AAAF.push(data[i].AAAFTOTAL2014J);
                                AAAM.push(data[i].AAAMTOTAL2014J);
                                BBBF.push(data[i].BBBFTOTAL2014J);
                                BBBM.push(data[i].BBBMTOTAL2014J);
                                CCCF.push(data[i].CCCFTOTAL2014J);
                                CCCM.push(data[i].CCCMTOTAL2014J);
                                DDDF.push(data[i].DDDFTOTAL2014J);
                                DDDM.push(data[i].DDDMTOTAL2014J);
                                EEEF.push(data[i].FFFFTOTAL2014J);
                                EEEM.push(data[i].FFFMTOTAL2014J);
                                FFFF.push(data[i].EEEFTOTAL2014J);
                                FFFM.push(data[i].EEEMTOTAL2014J);
                                GGGF.push(data[i].GGGFTOTAL2014J);
                                GGGM.push(data[i].GGGMTOTAL2014J);

                            }


                        }

                        var chartdata = {
                            labels: ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF", "GGG"],

                            datasets: [{
                                    label: "Female",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [AAAF, BBBF, CCCF, DDDF, EEEF, FFFF, GGGF],
                                    backgroundColor: ["HotPink", "HotPink", "HotPink", "HotPink", "HotPink", "HotPink", "HotPink", ],
                                },

                                {
                                    label: "Male",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [AAAM, BBBM, CCCM, DDDM, EEEM, FFFM, GGGM],
                                    backgroundColor: ["#0a51f2", "#0a51f2", "#0a51f2", "#0a51f2", "#0a51f2", "#0a51f2", "#0a51f2"],

                                },

                            ]
                        };

                        var graphTarget = $("#graphCanvas");

                        var barGraph = new Chart(graphTarget, {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    labels: {
                                        fontColor: 'black',
                                    }
                                },

                                title: {
                                    display: true,
                                    text: 'Gender Ratio For Each Class Population',
                                    fontColor: "white",
                                    fontSize: 25


                                },

                                scales: {
                                    xAxes: [{
                                        ticks: {
                                            fontColor: "black"
                                        },
                                        gridLines: {
                                            color: "black"
                                        }
                                    }],
                                    yAxes: [{
                                        ticks: {
                                            fontColor: "black"
                                        },
                                        gridLines: {
                                            color: "black"
                                        }


                                    }],
                                }
                            }

                        });
                    });
            }
        }
    </script>

</body>

</html>