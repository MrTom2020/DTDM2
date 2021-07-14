<?php 
$k = 10;
 $datab = isset($_SESSION['tongtc']) ? $_SESSION['tongtc']:NULL;
 $datac = isset($_SESSION["listienchi"]) ? $_SESSION["listienchi"]:NULL;
 $datat = isset($_SESSION["listienthu"]) ? $_SESSION["listienthu"]:NULL;
 $datadt = isset($_SESSION["listiendt"]) ? $_SESSION["listiendt"]:NULL;
 $tongtc = 0;
 $tongtt = 0;
 $tongdt = 0;
 if($datac)
 {
	while($row = mysqli_fetch_array($datac))
	{
		$tongtc +=$row[2];
	}
 }
 if($datat)
 {
	while($row = mysqli_fetch_array($datat))
	{
		$tongtt +=$row[2];
	}
 }
 if($datadt)
 {
	while($row = mysqli_fetch_array($datadt))
	{
		$tongdt +=$row[2];
	}
 }
$ptdt = 0;// ($tongdt/$datab) * 100 * -1;
$ptc = ($tongtc/$datab) * 100 * -1;
$ptt = ($tongtt/$datab) * 100;
$pcl = 100 - $ptc - $ptt - $ptdt;
$dataPoints = array( 
	array("label"=>"Phần trăm tiền chi", "y"=>$ptc),
	array("label"=>"Phần trăm tiền thu", "y"=>$ptt),
	array("label"=>"Phần trăm tiền đầu tư", "y"=>$ptdt),
	array("label"=>"Còn lại", "y"=>$pcl)
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
		text: "Báo cáo tổng quát"
	},
	subtitles: [{
		text: "Tổng tiền trong các ví :<?php echo $datab; ?> "
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