<?php $host = 'localhost';  
         $user = 'souban';  
         $pass = 'MySQL_m_l_0';  
         $dbname = 'TUTORIALS';  
         $conn = mysqli_connect($host, $user, $pass,$dbname);  
         
         if(!$conn)
         {  
            die('Could not connect: '.mysqli_connect_error());  
         }  
        //  echo 'Connected successfully<br/>';  ?>