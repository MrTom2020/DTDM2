<?php
 
// $dataPoints = array( 
// 	array("label"=>"Chrome", "y"=>64.02),
// 	array("label"=>"Firefox", "y"=>120.55),
// 	array("label"=>"IE", "y"=>8.47),
// 	array("label"=>"Safari", "y"=>6.08),
// 	array("label"=>"Edge", "y"=>4.29),
// 	array("label"=>"Others", "y"=>4.59)
// );
$dataPoints = array( );
 for($k = 0; $k < 100;$k++)
 {
    array_push($dataPoints,array("label"=>"Chrome", "y"=>$k));
 }
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Báo cáo ...... tháng ...."
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 45%;margin-top:6vh;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 