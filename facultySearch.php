<?php



$hash = '$2y$10$BTnRBY9ERjZXbzboxGGNHuqbpWCsThTm9Dv2KQQiR2Et1zGA0xBku';
$html='<html>
                <head>
                    <title></title>
                    <script src="facultySearch.js"></script>
                    <link rel="stylesheet" href="./CSS/facultysearch.css">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                </head>
                <body>
                <form style="float:right" action="" method="post" id="frmLogout">
                <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
                </form>
                    <form>
                    <p class="para"><b>Search for a faculty</p>
                        <input type="text" onkeyup=searchFaculty() id="facultySearchBar" class="form-control input" placeholder="Search..">
                    </form>
                    
                    <ul id="facultylist" >
                    </ul>
                </body>
            </html>';
            session_start();
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"])
{
    
    echo $html;
}    
else {
    
if($_POST["username"]==='admin')
{
if (password_verify($_POST['password'], $hash)) {
    
    session_start();
    $_SESSION["loggedIn"]=true;
        echo $html;           
            
} else {
           echo 'Invalid username or password';
}
}
else {
    echo "Invalid username or password";
}
}
if(isset($_POST["logout"]))
{
    $_SESSION["loggedIn"]=false;
    session_destroy();
    header("Location: adminlogin.html");
    exit;
}


?>