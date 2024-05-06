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
    if(isset($_POST["submit4"]))
    {
        header('Location:chatbot.php');
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
<div class="outer">
    <div class="ep">
    <img src="images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">2017 Regulation Student Result and Performance Analysis</h1>
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">Admin Login</h1>
    </div>
    </div>

<br><br><br>
<div class="fle">
<form  method="post">
<input type="submit" id="dashbtn" value="Regular Update" name="submit1">

<input type="submit" id="dashbtn" value="Arrear Update" name="submit2">
<br>
<br><br>

<input type="submit" id="dashbtn" value="Data Base" name="submit3">

<input type="submit" id="dashbtn" value="Chatbot Data Base" name="submit4">
</form>
</div>


</body>

</html>