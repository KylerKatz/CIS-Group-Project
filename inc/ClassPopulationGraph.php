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


            $('#button1').click(function(event) {


                var sem = '2013B';
                console.log(sem);
				event.preventDefault();

                $.ajax({
                    type: 'POST', //type of method
                    url: 'ClassPopulationQuery.php',
                    dataType: 'json',
                    data: {
                        sem: sem
                    },
                    success: function(data) {
                        if (data.code == '200') {
                           // alert('Success: ' + data.msg)
                            sem = data.msg;

                        }
                        console.log(sem);
                        showGraph(sem);

                    },

                });

            });

            $('#button2').click(function(event) {


                var sem = '2013J';
                console.log(sem);
				event.preventDefault();

                $.ajax({
                    type: 'POST', //type of method
                    url: 'ClassPopulationQuery.php',
                    dataType: 'json',
                    data: {
                        sem: sem
                    },
                    success: function(data) {
                        if (data.code == '200') {
                            //alert('Success: ' + data.msg)
                            sem = data.msg;

                        }
                        console.log(sem);
                        showGraph(sem);

                    },

                });

            });



            $('#button3').click(function(event) {


                var sem = '2014B';
       			event.preventDefault();

                $.ajax({
                    type: 'POST', //type of method
                    url: 'ClassPopulationQuery.php',
                    dataType: 'json',
                    data: {
                        sem: sem
                    },
                    success: function(data) {
                        if (data.code == '200') {
                            //alert('Success: ' + data.msg)
                            sem = data.msg;

                        }
                        showGraph(sem);

                    },

                });
            });

            $('#button4').click(function(event) {

				event.preventDefault();

                var sem = '2014J';

                $.ajax({
                    type: 'POST', //type of method
                    url: 'ClassPopulationQuery.php',
                    dataType: 'json',
                    data: {
                        sem: sem
                    },
                    success: function(data) {
                        if (data.code == '200') {
                            //alert('Success: ' + data.msg)
                            sem = data.msg;

                        }
                        showGraph(sem);

                    },

                });
            });


        });


        function showGraph(sem) {

            var data = sem;

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
                AAAF.push(data[i].AAAFTOTAL);
                AAAM.push(data[i].AAAMTOTAL);
                BBBF.push(data[i].BBBFTOTAL);
                BBBM.push(data[i].BBBMTOTAL);
                CCCF.push(data[i].CCCFTOTAL);
                CCCM.push(data[i].CCCMTOTAL);
                DDDF.push(data[i].DDDFTOTAL);
                DDDM.push(data[i].DDDMTOTAL);
                EEEF.push(data[i].FFFFTOTAL);
                EEEM.push(data[i].FFFMTOTAL);
                FFFF.push(data[i].EEEFTOTAL);
                FFFM.push(data[i].EEEMTOTAL);
                GGGF.push(data[i].GGGFTOTAL);
                GGGM.push(data[i].GGGMTOTAL);

            }

            console.log(data);


            var chartdata = {
                labels: ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF", "GGG"],

                datasets: [{
                        label: "Female",
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [(AAAF), (BBBF), (CCCF), (DDDF), (EEEF), (FFFF), (GGGF)],
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
			
			if(window.bar != undefined)
				window.bar.destroy();
			
            window.bar = new Chart(graphTarget, {
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


        }
    </script>

</body>

</html>