<html>
   <head>
      <title>Creating MySQLi Tables</title>
   </head>
   
   <body>
      <?php  
         require_once("connect.php");
        $facultyname="";
        $facultyname=$_POST['facultyNameAndSubject'];
         echo $facultyname;
        
         
           
         $facultyname= str_replace("(","1",$facultyname);
         $facultyname= str_replace(")","1",$facultyname);
         $facultyname= str_replace("-","1",$facultyname);
         $facultyname= str_replace(" ","1",$facultyname);
         $facultyname= str_replace(".","1",$facultyname);
         echo $facultyname;
         $CheckTable = mysqli_query($conn,"SHOW TABLES LIKE '".$facultyname."'");
         
         
         $sql = "create table $facultyname(srollno BIGINT,param1 TINYINT,param2 TINYINT,
         param3 TINYINT,param4 TINYINT,param5 TINYINT,param6 TINYINT,param7 TINYINT,param8 TINYINT,param9 TINYINT,
         primary key (srollno))";  
         
         
        
         if( mysqli_num_rows($CheckTable) > 0 ) echo 'Table exists';
        else{
            echo 'table does not exist';
            if(mysqli_query($conn, $sql))
            {  
         echo "Table created successfully";  
         } 
         else {  
            echo "Table is not created successfully ";  
         }
        }
        $insertquery = "INSERT INTO $facultyname(srollno,param1,param2,param3,param4,param5,
        param6,param7,param8,param9)VALUES ('".$_POST["rollno"]."','".$_POST["subk"]."','".$_POST["pap"]."','".$_POST["uoc"]."',
        '".$_POST["ps"]."','".$_POST["reg"]."','".$_POST["sp"]."','".$_POST["dc"]."','".$_POST["tc"]."',
        '".$_POST["ep"]."')";

        $query = "SELECT COUNT(*) FROM $facultyname";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_row($result);
        echo $rows[0];
        if($rows[0]>120)
                {
                    echo "All the students have given feedback, no more feedback can be added";
                }
                else {
                if (mysqli_query($conn, $insertquery)) 
                    header('location:facultyfeedback1.html');
                else 
               echo "Error: " . $insertquery . "" . mysqli_error($conn);        
                }
                 
         mysqli_close($conn);  
      ?>  
   </body>
</html>