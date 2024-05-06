<?php
    if(isset($_POST["submit1"]))
    {
        header('Location:analysis.php');
    }
    if(isset($_POST["submit2"]))
    {
        header('Location:option.php');
    }
    if(isset($_POST["submit3"]))
    {
        header('Location:database.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Login</title>
    
    <link href="../style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="f"> 
<img src="images/logo.png" alt="logo" height=100px>

<h1 style="float:right;padding-right:500px">Kgisl Institute of Technology</h1>
<h1 style="float:right;padding-right:450px">Student Result and Performance Analysis</h1>

</div>

<br><br><br>
<h1 style="text-align:center">Teacher's Login Login</h1>
<div class="fle">
<form  method="post">
<input type="submit" id="dashbtn" value="Analysis" name="submit1">

<input type="submit" id="dashbtn" value="Student Individual Data" name="submit2">
<br>
<br><br>

<input type="submit" id="dashbtn" value="Student Overall Data Base" name="submit3">
</form>
</div>

</body>
</html>