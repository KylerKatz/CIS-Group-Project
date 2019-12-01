<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
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
		<button id="button1" name="action">0</button>
		<button id="button2" name="action">1</button>
		<button id="button3" name="action">2</button>
		<button id="button4" name="action">3</button>
		<button id="button5" name="action">4</button>
		<button id="button6" name="action">5</button>
		<button id="button7" name="action">6</button>
		<button id="button8" name="action">7</button>
		<button id="button9" name="action">8</button>
		<button id="button10" name="action">9</button>
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
			$('#button5').on('click', function() {
				var val = "5";
				showGraph(val);
			});
			$('#button6').on('click', function() {
				var val = "6";
				showGraph(val);
			});
			$('#button7').on('click', function() {
				var val = "7";
				showGraph(val);
			});
			$('#button8').on('click', function() {
				var val = "8";
				showGraph(val);
			});
			$('#button9').on('click', function() {
				var val = "9";
				showGraph(val);
			});
			$('#button10').on('click', function() {
				var val = "10";
				showGraph(val);
			});
		});


		function showGraph(val) {

			$.get("index2.php",
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
					if (val == "5") {
						var data1 = data['data5'];
					}
					if (val == "6") {
						var data1 = data['data6'];
					}
					if (val == "7") {
						var data1 = data['data7'];
					}
					if (val == "8") {
						var data1 = data['data8'];
					}
					if (val == "9") {
						var data1 = data['data9'];
					}
					if (val == "10") {
						var data1 = data['data10'];
					}

					console.log(data1);

					var one = [];
					var two = [];
					var three = [];
					var four = [];
					var one1 = [];
					var two1 = [];
					var three1 = [];
					var four1 = [];
					var one2 = [];
					var two2 = [];
					var three2 = [];
					var four2 = [];


					//Use uppercase for the retriving data names
					for (var i in data1) {
						one.push(data1[i].P1);
						two.push(data1[i].W1);
						three.push(data1[i].D1);
						four.push(data1[i].F1);
						one1.push(data1[i].P2);
						two1.push(data1[i].W2);
						three1.push(data1[i].D2);
						four1.push(data1[i].F2);
						one2.push(data1[i].P3);
						two2.push(data1[i].W3);
						three2.push(data1[i].D3);
						four2.push(data1[i].F3);
					}

					var chartdata = {
						labels: ["2013J 35- 55", "2013J 35- 55", "2013J 55+"],

						datasets: [{
								label: "Pass",
								hoverBackgroundColor: '#CCCCCC',
								hoverBorderColor: '#666666',
								data: [(one * 100), (one1 * 100), (one2 * 100)],
								backgroundColor: ["Red", "Red", "Red"],


							},

							{
								label: "Withdraw",
								hoverBackgroundColor: '#CCCCCC',
								hoverBorderColor: '#666666',
								data: [(two * 100), (two1 * 100), (two2 * 100)],
								backgroundColor: ["Yellow", "Yellow", "Yellow"],

							},

							{
								label: "Distinct",
								hoverBackgroundColor: '#CCCCCC',
								hoverBorderColor: '#666666',
								data: [(three * 100), (three1 * 100), (three2 * 100)],
								backgroundColor: ["Blue", "Blue", "Blue"],

							},

							{
								label: "Fail",
								hoverBackgroundColor: '#CCCCCC',
								hoverBorderColor: '#666666',
								data: [(four * 100), (four1 * 100), (four2 * 100)],
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
							type: 'horizontalBar',
							data: chartdata
						}

					)

				}
			);


		};
	</script>

</body>

</html>