<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $registrationNo = $_POST['registration_no'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the table
    $sql = "UPDATE sem3 SET $subject = '$grade' WHERE Regno = '$registrationNo'";

    if ($conn->query($sql) === TRUE) {
        $updateMessage = "Record updated successfully";
    } else {
        $errorMessage = "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester_3</title>
    
    <link href="../../style.css" type="text/css" rel="stylesheet">
    <style>
        .outer{
            width:300px;
            height:400px;
            background-color:cyan;
            margin:auto;
            border-radius:10px;
            padding:5px;
        }
        input{
            right:0px;
        }
        </style>
</head>
<body>
<div > 
<img src="../images/logo.png" alt="logo" height=100px>


<h1 style="margin:0 5%;float:right;padding-right:450px">Kgisl Institute of Technology</h1>
<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>
<br><br><br>
<h1 style="text-align:center">Admin Login</h1>
<h1 style="text-align:center;color:orange">Arrear Update Semester 3</h1>

</div>
<div class="outer">
<form name=form1 action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  onsubmit="return validation()">
    Registration No: <input type="text" name="registration_no"><br>
    Subject Code : <input type="text" name="subject"><br>
    Grade: <input type="text" name="grade"><br>
    <input id="btn" type="submit" value="Update">
</form>
</div>
<script>
function validation(){
        var regno= document.form1.registration_no.value;
        var sub= document.form1.subject.value;
        var grade= document.form1.grade.value;
        if (regno.length=="" && sub.length==""&&grade.length=="")
        {
            alert("all the fields are empty");
            return true;
        }
        else
        {
            if (regno.length=="")
            {
            alert("register no is empty");
            return true;
            }
            if (sub.length=="")
            {
            alert("subject code is empty");
            return true;
            }
            if (grade.length=="")
            {
            alert("Grade is empty");
            return true;
            }

        }
        
    }
    </script>
    <script>
<?php
if (!empty($updateMessage)) {
    echo "alert('$updateMessage');";
}
if (!empty($errorMessage)) {
    echo "alert('$errorMessage');";
}
?>
</script>

</body>
</html>