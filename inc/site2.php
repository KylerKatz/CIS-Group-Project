
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
<script type="text/javascript" src="js/Chart.js"></script>
<script type="text/javascript" src="js/index.js"></script>



</head>
<body>



<div id="chart-container" style = "background-color: white;">
		<canvas id="graphCanvas"></canvas>
		
		<form  id="userform" >
		<input type = "text" id= "sem" placeholder = "Semester" required/>
		<button type='submit' id="submit" value='Submit' >Submit</button>

		</form>
		
 </div>
 <div id='response'></div>

    <script>
		
	   var id = "";
	   $(document).ready(function () {	

		$('#submit').click( function(event) {
			event.preventDefault();
			
			var sem = $('#sem').val();

			$.ajax({
            type : 'POST',  //type of method
			url: 'index2.php',
			dataType: 'json',
			data: {sem: sem},
			success: function(data){
				if(data.code =='200'){
				//alert('Success: ' + data.msg)
				sem = data.msg;
				
				}
				console.log(sem);
				showGraph(sem);

			},
			
			});

		});	  

		
        });


        function showGraph(sem)
        {
				
               
			    	var data1=sem;

					console.log(sem);

                    var p1 = [], w1 = [], d1 =[], f1 = [];
                    var p2 = [], w2 = [], d2 =[], f2 = [];
                    var p3 = [], w3 = [], d3 =[], f3 = [];
                    var p4 = [], w4 = [], d4 =[], f4 = [];
                    var p5 = [], w5 = [], d5 =[], f5 = [];
                    var p6 = [], w6 = [], d6 =[], f6 = [];
					var p7 = [], w7 = [], d7 =[], f7 = [];
					var p8 = [], w8 = [], d8 =[], f8 = [];
					var p9 = [], w9 = [], d9 =[], f9 = [];
					var p10 = [], w10 = [], d10 =[], f10 = [];

					console.log(data1);

                    //Use uppercase for the retriving data names
                    for (var i in data1) {
                        p1.push(data1[i].P1); 
						w1.push(data1[i].W1);
                        d1.push(data1[i].D1);
                        f1.push(data1[i].F1);
                        
						p2.push(data1[i].P2);
                        w2.push(data1[i].W2);
                        d2.push(data1[i].D2);
                        f2.push(data1[i].F2);
						
                        p3.push(data1[i].P3);
                        w3.push(data1[i].W3);
                        d3.push(data1[i].D3);
                        f3.push(data1[i].F3);
						
						p4.push(data1[i].P4);
                        w4.push(data1[i].W4);
                        d4.push(data1[i].D4);
                        f4.push(data1[i].F4);
					
						p5.push(data1[i].P5);
                        w5.push(data1[i].W5);
                        d5.push(data1[i].D5);
                        f5.push(data1[i].F5);
						
						p6.push(data1[i].P6);
                        w6.push(data1[i].W6);
                        d6.push(data1[i].D6);
                        f6.push(data1[i].F6);
						
						p7.push(data1[i].P7);
                        w7.push(data1[i].W7);
                        d7.push(data1[i].D7);
                        f7.push(data1[i].F7);
						
						p8.push(data1[i].P8);
                        w8.push(data1[i].W8);
                        d8.push(data1[i].D8);
                        f8.push(data1[i].F8);
						
						p9.push(data1[i].P9);
                        w9.push(data1[i].W9);
                        d9.push(data1[i].D9);
                        f9.push(data1[i].F9);
						
						p10.push(data1[i].P10);
                        w10.push(data1[i].W10);
                        d10.push(data1[i].D10);
                        f10.push(data1[i].F10);
                    }

                    var chartdata = {
                        labels: ["0-10%", "10-20%", "20-30%", "30-40%",
						"40-50%", "50-60%", "60-70%", "70-80%", "90-100%"],      

                        datasets: [
                            {
                                label: "Pass",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [(p1*100), (p2* 100), (p3* 100),(p4* 100),
								(p5* 100),(p6* 100),(p7* 100),(p8* 100),(p9* 100),
								(p10* 100)],
                                backgroundColor:["#00994C", "#00994C", "#00994C",
								"#00994C","#00994C","#00994C","#00994C","#00994C",
								"#00994C","#00994C"],
								stack:1
                            },

                            {
                                label: "Withdraw",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',

                                data: [(w1*100), (w2* 100), (w3* 100),(w4* 100),
								(w5* 100),(w6* 100),(w7* 100),(w8* 100),
								(w9* 100),(w10* 1)],
								backgroundColor:["#FF8000", "#FF8000", "#FF8000","#FF8000",
								"#FF8000","#FF8000","#FF8000","#FF8000","#FF8000","#FF8000"],
								
								stack:1
                            },

                            {
                                label: "Distinct",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',

                                data: [(d1*100), (d2 *100), (d3 *100), (d4 *100),
								(d5 *100),(d6 *100),(d7 *100),(d8 *100),(d9 *100), (d10 *100)],
                                backgroundColor: ["#000099", "#000099", "#000099", 
								"#000099", "#000099",
								"#000099","#000099","#000099","#000099","#000099"],
								stack:1
                            },
                            {
                                label: "Fail",
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',

                                data: [(f1*100), (f2 *100), (f3 *100), (f4 *100),
								(f5 *100), (f6 *100), (f7 *100), (f8 *100),
								(f9 *100), (f10 *100)],
                                backgroundColor: ["#990000", "#990000", "#990000", "#990000","#990000",
								"#990000", "#990000","#990000","#990000","#990000"],	
								stack:1
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
                        data: chartdata,
						options: {
							title: {
							display: true,
							text: 'IMD Band Chart'
							},
							
							
							plugins: {
							stacked100: { enable: true },
							}
						}
                    })
			
          
	   

            };
        </script>

</body>
</html>
