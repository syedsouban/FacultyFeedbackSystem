<?php
 
$dataPoints = array( 
	array("y" => 5, "label" => "Unsatisfactory Ratings" ),
	array("y" => 12, "label" => "Satisfactory Ratings" ),
	array("y" => 50, "label" => "Good Ratings" ),
	array("y" => 32, "label" => "Very Good Ratings" ),
	array("y" => 54, "label" => "Excellent Ratings" ),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Subject Knowledge"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>        