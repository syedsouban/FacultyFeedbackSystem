<?php 
include("connect.php");

$facultyname="mrs11s1shabeera1khader1signals1and1system1analysis1";
$rollnumber=160415733001;

for($i=1;$i<=40;$i++)
{    
    $insertquery = "INSERT INTO $facultyname(srollno,param1,param2,param3,param4,param5,
        param6,param7,param8,param9)VALUES ('".$rollnumber."','".rand(rand(1,5),rand(1,5))."','".
        rand(rand(1,5),rand(1,5))."','".rand(rand(1,5),rand(1,5))."',
        '".rand(rand(1,5),rand(1,5))."','".rand(rand(1,5),rand(1,5))."',
        '".rand(rand(1,5),rand(1,5))."','".rand(rand(1,5),rand(1,5))."','".rand(rand(1,5),rand(1,5))."',
        '".rand(rand(1,5),rand(1,5))."')";    
        $rollnumber++;
        if (mysqli_query($conn, $insertquery)) 
               echo "New record created successfully"; 
                else 
               echo "Error: " . $insertquery . "" . mysqli_error($conn);        
}
for($i=1;$i<=40;$i++)
{    
    $insertquery = "INSERT INTO $facultyname(srollno,param1,param2,param3,param4,param5,
        param6,param7,param8,param9)VALUES ('".$rollnumber."','".rand(3,5)."','".rand(3,5)."','".rand(3,5)."',
        '".rand(3,5)."','".rand(3,5)."','".rand(3,5)."','".rand(3,5)."','".rand(3,5)."',
        '".rand(3,5)."')";    
        $rollnumber++;
        if (mysqli_query($conn, $insertquery)) 
               echo "New record created successfully"; 
                else 
               echo "Error: " . $insertquery . "" . mysqli_error($conn);        
}
for($i=1;$i<=40;$i++)
{    
    $insertquery = "INSERT INTO $facultyname(srollno,param1,param2,param3,param4,param5,
        param6,param7,param8,param9)VALUES ('".$rollnumber."','".rand(1,5)."','".rand(1,5)."','".rand(1,5)."',
        '".rand(1,5)."','".rand(1,5)."','".rand(1,5)."','".rand(1,5)."','".rand(1,5)."',
        '".rand(1,5)."')";    
        $rollnumber++;
        if (mysqli_query($conn, $insertquery)) 
               echo "New record created successfully"; 
                else 
               echo "Error: " . $insertquery . "" . mysqli_error($conn);        
}

for($i=1;$i<=5;$i++)
{
    $query = "SELECT COUNT(param1) FROM $facultyname where param1=$i";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
        echo "Number of $i rating : $rows[0]";

}

$query="SELECT AVG(param1) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param2) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param3) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param4) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param5) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param6) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param7) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param8) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";
$query="SELECT AVG(param9) FROM $facultyname";
$result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
echo "Average rating is: $rows[0]";







?>