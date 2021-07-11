<?php 
$k = 10;
 $datab = isset($data2['ttc']) ? $data2['ttc']:NULL;
 while($row = $datab->fetch_assoc())
        {
            $k = $row[0];
        }
 if( $datab  != NULL)
 {
	 $k = 10000;
	 echo $datab;
 }
// while($row = mysqli_fetch_array($datab))
// {
// 	$k = $row[0];
// }
// $dataa  = isset($data['bd']) ? $data['bd']:NULL;
$dataPoints = array( 
	array("label"=>"Chrome", "y"=>$k),
	array("label"=>"Firefox", "y"=>12.55),
	array("label"=>"IE", "y"=>8.47),
	array("label"=>"Safari", "y"=>6.08),
	array("label"=>"Edge", "y"=>4.29),
	array("label"=>"Others", "y"=>4.59)
)
 
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