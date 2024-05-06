<?php
    if(isset($_POST["submit1"]))
    {
        header('Location:regularupdate.php');
    }
    if(isset($_POST["submit2"]))
    {
        header('Location:arrearupdate.php');
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
    <title>Document</title>
    <link href="../style.css" type="text/css" rel="stylesheet">

    <script src="js/confirm.js"></script>
</head>

<body>
<div class="f"> 
<img src="images/logo.png" alt="logo" height=100px>

<h1 style="float:right;padding-right:500px">Kgisl Institute of Technology</h1>
<h1 style="float:right;padding-right:450px">Student Result and Performance Analysis</h1>

</div>

<br><br><br>
<h1 style="text-align:center">Admin Login</h1>
<div class="fle">
<form  method="post">
<input type="submit" id="dashbtn" value="Regular Update" name="submit1">

<input type="submit" id="dashbtn" value="Arrear Update" name="submit2">
<br>
<br><br>

<input type="submit" id="dashbtn" value="Data Base" name="submit3">
</form>
</div>


</body>

</html>