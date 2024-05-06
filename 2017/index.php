<?php
    include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    
</head>
<body>
    
<div class="outer">
    <div class="ep">
    <img src="images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
<h1 style="margin:auto;text-align:center;color:#504BF6">2017 Regulation Student Result and Performance Analysis</h1>
    </div>
    </div>




    <div class=outer_login>
    <div id="form" >
        <h1>Student Login</h1>
        <form name="form1" action="stlogin.php" onsubmit="return student_validation()" method="POST">
            <label>UserName</label>
            <input type="text" id="user" name="stuser">
            <br><br>
            <label>Password</label>
            <input type="password" id="pass" name="stpass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit" >
            

</form>
</div>
<div id="form" >
        <h1>Teacher's Login</h1>
        <form name="form2" action="thlogin.php" onsubmit="return teacher_validation()" method="POST">
            <label>UserName</label>
            <input type="text" id="user" name="thuser">
            <br><br>
            <label>Password</label>
            <input type="password" id="pass" name="thpass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit" >
            

</form>
</div>
<div id="form" >
        <h1>Admin Login</h1>
        <form name="form3" action="adlogin.php" onsubmit="return admin_validation()" method="POST">
            <label>UserName</label>
            <input type="text" id="user" name="aduser">
            <br><br>
            <label>Password</label>
            <input type="password" id="pass" name="adpass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit" >
            

</form>
</div>

</div>

<script>
    function student_validation(){
        var user= document.form1.stuser.value;
        var pass= document.form1.stpass.value;
        if (user.length=="" && pass.length=="")
        {
            alert("user name & pass word is empty");
            return true;
        }
        else
        {
            if (user.length=="")
            {
            alert("user name is empty");
            return true;
            }
            if (pass.length=="")
            {
            alert("pass word is empty");
            return true;
            }

        }
        
    }
    function teacher_validation(){
        var user= document.form2.thuser.value;
        var pass= document.form2.thpass.value;
        if (user.length=="" && pass.length=="")
        {
            alert("user name & pass word is empty");
            return true;
        }
        else
        {
            if (user.length=="")
            {
            alert("user name is empty");
            return true;
            }
            if (pass.length=="")
            {
            alert("pass word is empty");
            return true;
            }

        }
        
    }
    function admin_validation(){
        var user= document.form3.aduser.value;
        var pass= document.form3.adpass.value;
        if (user.length=="" && pass.length=="")
        {
            alert("user name & pass word is empty");
            return true;
        }
        else
        {
            if (user.length=="")
            {
            alert("user name is empty");
            return true;
            }
            if (pass.length=="")
            {
            alert("pass word is empty");
            return true;
            }

        }
        
    }
    </script>

</body>
</html>