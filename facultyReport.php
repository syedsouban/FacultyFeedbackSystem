
        <?php 
        session_start();
        if(isset($_SESSION["loggedIn"]))
        {
        if($_SESSION["loggedIn"])
        {    
        $facultyname = $_GET['facName']; 
        error_reporting(E_ERROR | E_PARSE);
        //ini_set('display_error','0');
        $fname=$facultyname;
        $fname = substr($facultyname, 0, strpos($facultyname, '('));
        $subjname=substr($facultyname,strpos($facultyname,'('),strpos($facultyname,')'));
        include("connect.php");
        $facultyname= str_replace("(","1",$facultyname);
         $facultyname= str_replace(")","1",$facultyname);
         $facultyname= str_replace("-","1",$facultyname);
         $facultyname= str_replace(" ","1",$facultyname);
         $facultyname= str_replace(".","1",$facultyname);
        //  echo $facultyname."<br>";
        echo '<form style="float:right" action="" method="post" id="frmLogout">
                <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
                </form>';
         echo "<center><h1>Faculty Report</h1></center>";
         echo "<center><h2>$fname</h2></center>";
         echo "<p class='para1' align='center'><b>Subject taught: $subjname";


        $param1arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param1=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param1arr[$i]=$rows[0];
         }

         $param1arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param1) FROM $facultyname"))[0];
         

         $param2arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param2=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param2arr[$i]=$rows[0];
         }
         $param2arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param2) FROM $facultyname"))[0];
         $param3arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param3=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param3arr[$i]=$rows[0];
         }
         $param3arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param3) FROM $facultyname"))[0];
         $param4arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param4=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param4arr[$i]=$rows[0];
         }
         $param4arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param4) FROM $facultyname"))[0];
         $param5arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param5=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param5arr[$i]=$rows[0];
         }
         $param5arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param5) FROM $facultyname"))[0];
         $param6arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param6=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param6arr[$i]=$rows[0];
         }
         $param6arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param6) FROM $facultyname"))[0];
         $param7arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param7=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param7arr[$i]=$rows[0];
         }
         $param7arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param7) FROM $facultyname"))[0];
         $param8arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param8=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param8arr[$i]=$rows[0];
         }
         $param8arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param8) FROM $facultyname"))[0];
         $param9arr=array();
         for($i=1;$i<=5;$i++)
         {
            $query = "SELECT COUNT(param1) FROM $facultyname where param9=$i";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_row($result);
            // echo $rows[0]."<br>";
            $param9arr[$i]=$rows[0];
         }
         $param9arr[6]=mysqli_fetch_row(mysqli_query($conn,"SELECT AVG(param9) FROM $facultyname"))[0];
         $numberOfStudents=mysqli_fetch_row(mysqli_query($conn,"SELECT COUNT(*) FROM $facultyname"))[0];
        
        $percentageOfEGrades=($param1arr[5]+$param2arr[5]+$param3arr[5]+$param4arr[5]+
        $param5arr[5]+$param6arr[5]+$param7arr[5]+$param8arr[5]+$param9arr[5])/(9*$numberOfStudents)*100;

         

        $percentageOfVGGrades=($param1arr[4]+$param2arr[4]+$param3arr[4]+$param4arr[4]+
        $param5arr[4]+$param6arr[4]+$param7arr[4]+$param8arr[4]+$param9arr[4])/(9*$numberOfStudents)*100;

        

        $percentageOfGGrades=($param1arr[3]+$param2arr[3]+$param3arr[3]+$param4arr[3]+
        $param5arr[3]+$param6arr[3]+$param7arr[3]+$param8arr[3]+$param9arr[3])/(9*$numberOfStudents)*100;

        

        $percentageOfSGrades=($param1arr[2]+$param2arr[2]+$param3arr[2]+$param4arr[2]+
        $param5arr[2]+$param6arr[2]+$param7arr[2]+$param8arr[2]+$param9arr[2])/(9*$numberOfStudents)*100;


        

        $percentageOfUSGrades=($param1arr[1]+$param2arr[1]+$param3arr[1]+$param4arr[1]+
        $param5arr[1]+$param6arr[1]+$param7arr[1]+$param8arr[1]+$param9arr[1])/(9*$numberOfStudents)*100;
        
        $WAS=((5*$percentageOfEGrades)+(4*$percentageOfGGrades)+(3*$percentageOfVGGrades)+
        (2*$percentageOfSGrades)+(1*$percentageOfUSGrades))/25;

        

        $CG=($WAS/20)+1-($percentageOfUSGrades/100);
        

        $score=0;
        if($CG>=0.2&&$CG<=0.49)
        {
            $score=0;
        }
        else if($CG>=0.5&&$CG<=0.99)
        {
            $score=2;
        }
        else if($CG>=1&&$CG<=1.24)
        {
            $score=4;
        }
        else if($CG>=1.25&&$CG<=1.49)
        {
            $score=6;
        }
        else if($CG>=1.5&&$CG<=1.74)
        {
            $score=8;
        }
        else if($CG>=1.75&&$CG<=2)
        {
            $score=10;
        }

        echo "<br><center><b><p class='para1 para2' align='center'>Composite Grade Score:  $score </p></center>";

         $dataPoints = array( 
	        array("y" => $param1arr[6], "label" => "Subject knowledge" ),
	        array("y" => $param2arr[6], "label" => "Preparedness and Presentation" ),
	        array("y" => $param3arr[6], "label" => "Uniformity of Coverage" ),
	        array("y" => $param4arr[6], "label" => "Problem Solving" ),
            array("y" => $param5arr[6], "label" => "Regularity" ),
            array("y" => $param6arr[6], "label" => "Student participation" ),
            array("y" => $param7arr[6], "label" => "Doubt Clearing" ),
            array("y" => $param8arr[6], "label" => "Teacher's commitment" ),
            array("y" => $param9arr[6], "label" => "Evaluation Procedure" ));

         $dataPoints1 = array( 
	        array("y" => $param1arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param1arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param1arr[3], "label" => "Good Ratings" ),
	        array("y" => $param1arr[4], "label" => "Very Good Ratings" ),
	        array("y" => $param1arr[5], "label" => "Excellent Ratings" ));
        $dataPoints2 = array( 
	        array("y" => $param2arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param2arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param2arr[3], "label" => "Good Ratings" ),
	        array("y" => $param2arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param2arr[5], "label" => "Excellent Ratings" ));
        $dataPoints3 = array( 
	        array("y" => $param3arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param3arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param3arr[3], "label" => "Good Ratings" ),
	        array("y" => $param3arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param3arr[5], "label" => "Excellent Ratings" ));
        $dataPoints4 = array( 
	        array("y" => $param4arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param4arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param4arr[3], "label" => "Good Ratings" ),
	        array("y" => $param4arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param4arr[5], "label" => "Excellent Ratings" ));
        $dataPoints5 = array( 
	        array("y" => $param5arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param5arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param5arr[3], "label" => "Good Ratings" ),
	        array("y" => $param5arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param5arr[5], "label" => "Excellent Ratings" ));            
        $dataPoints6 = array( 
	        array("y" => $param6arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param6arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param6arr[3], "label" => "Good Ratings" ),
	        array("y" => $param6arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param6arr[5], "label" => "Excellent Ratings" ));            
            $dataPoints7 = array( 
	        array("y" => $param7arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param7arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param7arr[3], "label" => "Good Ratings" ),
	        array("y" => $param7arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param7arr[5], "label" => "Excellent Ratings" ));
        $dataPoints8 = array( 
	        array("y" => $param8arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param8arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param8arr[3], "label" => "Good Ratings" ),
	        array("y" => $param8arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param8arr[5], "label" => "Excellent Ratings" ));
        $dataPoints9 = array( 
	        array("y" => $param9arr[1], "label" => "Unsatisfactory Ratings" ),
	        array("y" => $param9arr[2], "label" => "Satisfactory Ratings" ),
	        array("y" => $param9arr[3], "label" => "Good Ratings" ),
	        array("y" => $param9arr[4], "label" => "Very Good Ratings" ),
            array("y" => $param9arr[5], "label" => "Excellent Ratings" ));                            }
            else {
                echo "You are not authorized to access this page";
            }
        }
            else {
                echo "You are not authorized to access this page";
            }
            if(isset($_POST["logout"]))
{
    $_SESSION["loggedIn"]=false;
    session_destroy();
    header("Location: adminlogin.html");
    exit;
}
                    
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
		text: "Average ratings in different areas"
	},
	axisY: {
        maximum: 5,
		title: "Average rating"
	},
	data: [{
		type: "column",
		yValueFormatString: "average: #,##0.##",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();    

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
    backgroundColor: "rgba(190, 188, 188, 0.164)",
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
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
 var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Preparedness and Presentation"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();
var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Uniformity Of Coverage"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();
var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Problem Solving"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();

var chart5 = new CanvasJS.Chart("chartContainer5", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Regularity"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
});
chart5.render();

var chart6 = new CanvasJS.Chart("chartContainer6", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Student participation"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});
chart6.render();

var chart7 = new CanvasJS.Chart("chartContainer7", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Doubt Clearing"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart7.render();

var chart8 = new CanvasJS.Chart("chartContainer8", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Teacher's commitment"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints8, JSON_NUMERIC_CHECK); ?>
	}]
});
chart8.render();

var chart6 = new CanvasJS.Chart("chartContainer9", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Evaluation Procedure"
	},
	axisY: {
		title: "Number of students"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## students",
		dataPoints: <?php echo json_encode($dataPoints9, JSON_NUMERIC_CHECK); ?>
	}]
});
chart9.render();
}
</script>
<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:400,700|Ubuntu" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="./CSS/facultyReport.css" />

</head>
<body>
    <div id="chartContainer" style="height:500px; width: 100%;"></div><br><br>
        <div id="chartContainer1" style="float:left; height:300px; width: 48%;margin-left:30px;margin-right:30px;"></div>
        <div id="chartContainer2" style="height:300px; width: 48%;"></div>
        <br><br>
        <div id="chartContainer3" style="float:left; height:300px; width: 48%;margin-left:30px;margin-right:30px;"></div>
        <div id="chartContainer4" style="height:300px; width: 48%;"></div>
        <br><br>
        <div id="chartContainer5" style="float:left; height:300px; width: 48%;margin-left:30px;margin-right:30px;"></div>
        <div id="chartContainer6" style="height:300px; width: 48%;"></div>
        <br><br>
        <div id="chartContainer7" style="float:left; height:300px; width: 48%;margin-left:30px;margin-right:30px;"></div>
        <div id="chartContainer8" style="height:300px; width: 48%;"></div>


<script src="canvasjs.min.js"></script>
</body>
</html>        
