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
        $(document).ready(function() {
            showGraph();
        });


        function showGraph() {
            {
                $.post("index1.php",
                    function(data) {
                        console.log(data);

                        var one = [];
                        var two = [];
                        var three = [];
                        var four = [];
                        var five = [];
                        var six = [];
                        var seven = [];
                        var eight = [];
                        var nine = [];
                        var ten = [];
                        var eleven = [];
                        var twelve = [];
                        var thirteen = [];
                        var fourteen = [];
                        var fifteen = [];
                        var sixteen = [];
                        var seventeen = [];
                        var eightteen = [];
                        var nineteen = [];
                        var twenty = [];
                        var twentyone = [];
                        var twentytwo = [];
                        var twentythree = [];
                        var twentyfour = [];


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
                            thirteen.push(data[i].INT13);
                            fourteen.push(data[i].INT14);
                            fifteen.push(data[i].INT15);
                            sixteen.push(data[i].INT16);
                            seventeen.push(data[i].INT17);
                            eightteen.push(data[i].INT18);
                            nineteen.push(data[i].INT19);
                            twenty.push(data[i].INT20);
                            twentyone.push(data[i].INT21);
                            twentytwo.push(data[i].INT22);
                            twentythree.push(data[i].INT23);
                            twentyfour.push(data[i].INT24);
                        }

                        var chartdata = {


                            labels: ["2013", "2014"],

                            datasets: [{
                                    label: "1-100",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(one * 100), (thirteen * 100)],
                                    backgroundColor: ["#ffff00", "#ffff00"],



                                },

                                {
                                    label: "101-200",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(two * 100), (fourteen * 100)],
                                    backgroundColor: ["#00ff00", "#00ff00"],

                                },

                                {
                                    label: "201-300",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(three * 100), (fifteen * 100)],
                                    backgroundColor: ["#007900", "#007900"],

                                },

                                {
                                    label: "301-400",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(four * 100), (sixteen * 100)],
                                    backgroundColor: ["#00aeae", "#00aeae"],

                                },

                                {
                                    label: "401-500",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(five * 100), (seventeen * 100)],
                                    backgroundColor: ["#0000ff", "#0000ff"],

                                },

                                {
                                    label: "501-600",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(six * 100), (eightteen * 100)],
                                    backgroundColor: ["#7308a5", "#7308a5"],

                                },
                                {
                                    label: "601-700",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(seven * 100), (nineteen * 100)],
                                    backgroundColor: ["#ba00ff", "#ba00ff"],

                                },
                                {
                                    label: "701-800",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(eight * 100), (twenty * 100)],
                                    backgroundColor: ["#cc00af", "#cc00af"],

                                },

                                {
                                    label: "801-900",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(nine * 100), (twentyone * 100)],
                                    backgroundColor: ["#ff0000", "#ff0000"],

                                },

                                {
                                    label: "901-1000",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(ten * 100), (twentythree * 100)],
                                    backgroundColor: ["#ff4600", "#ff4600"],

                                },

                                {
                                    label: "1001-1100",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(eleven * 100), (twentythree * 100)],
                                    backgroundColor: ["#ff7f00", "#ff7f00"],

                                },

                                {
                                    label: "1101-1200",
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: [(twelve * 100), (twentyfour * 100)],
                                    backgroundColor: ["#feb300", "#feb300"],

                                },


                            ]
                        };




                        var graphTarget = $("#graphCanvas");

                        var barGraph = new Chart(graphTarget, {
                            type: 'horizontalBar',
                            data: chartdata,
                            options: {
                                legend: {
                                    labels: {
                                        fontColor: 'black',
                                    }
                                },

                                title: {
                                    display: true,
                                    text: 'Course Interactions Pass Rate (2013 - 2014)',
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