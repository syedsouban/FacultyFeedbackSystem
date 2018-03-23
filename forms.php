<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
     <?php 
    if(isset($_GET['submit']))
    {

    echo "My name is " . $_GET['fname'] . $_GET['lname'];
    echo $_GET["submit"];
    }
    else {
        echo '$_GET[submit] is not set';
    }
    ?>
    <form method="get">
        <input type="text" name="fname">
        <input type="text" name="lname">
        <input type="submit" value="submit" name="submit">
    </form>
   
</body>
</html>