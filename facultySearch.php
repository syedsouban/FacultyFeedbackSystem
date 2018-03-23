<?php

$hash = '$2y$10$BTnRBY9ERjZXbzboxGGNHuqbpWCsThTm9Dv2KQQiR2Et1zGA0xBku';

if($_POST["username"]==='admin')
{
if (password_verify($_POST['password'], $hash)) {
            echo '
            <html>
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
                    <form>
                    <p class="para"><b>Search for a faculty</p>
                        <input type="text" onkeyup=searchFaculty() id="facultySearchBar" class="form-control input" placeholder="Search..">
                    </form>
                    <ul id="facultylist" >
                    </ul>
                </body>
            </html>';
} else {
           echo 'Invalid username or password';
}
}
else {
    echo "Invalid username or password";
}


?>