<html>
   <head>
      <title>Creating MySQLi Tables</title>
   </head>
   
   <body>
      <?php  
         $host = 'localhost';  
         $user = 'souban';  
         $pass = 'MySQL_m_l_0';  
         $dbname = 'TUTORIALS';  
         $conn = mysqli_connect($host, $user, $pass,$dbname);  
         
         if(!$conn){  
            die('Could not connect: '.mysqli_connect_error());  
         }  
         echo 'Connected successfully<br/>';  
        
         $vara="lolsterrr";
         $CheckTable = mysqli_query($conn,"SHOW TABLES LIKE '".$vara."'");
         
                      
         $sql = "create table " . $vara . "(
            id INT AUTO_INCREMENT,param TINYINT NOT NULL,primary key (id))";  
         
        if( mysqli_num_rows($CheckTable) > 0 ) echo 'Table exists';
        else{
            echo 'table does not exist';
            if(mysqli_query($conn, $sql))
            {  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }
        } 
         
          
         mysqli_close($conn);  
      ?>  
   </body>
</html>