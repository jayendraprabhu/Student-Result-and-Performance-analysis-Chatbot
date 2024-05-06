<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem7 Upload</title>
    <link href="../../style.css" type="text/css" rel="stylesheet">
    <style>

        form{
            margin:0 25%;
        }

        table{
            margin:0 25%;
        }
        </style>
</head>
<body>
    
<div class="f"> 
<div class="outer">
    <div class="ep">
    <img src="../images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">Regular Update</h1>
    <h1 style="text-align:center;color:orange">SEM 7 Regular Update</h1>


    </div>
    </div>

    <form class="" action="" enctype="multipart/form-data" method="post">
        <input type="file" name="excel" required="" value="">
        <button type="submit" id="" name="import">Import</button>
</form>
<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8701</td>
        <td>AD8702</td>
        <td>AD8703</td>
        <td>AD8704</td>
        <td>AD8705</td>
        <td>AD8711</td>
        <td>AD8712</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem7");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8701"];?></td>
        <td><?php echo $row["AD8702"];?></td>
        <td><?php echo $row["AD8703"];?></td>
        <td><?php echo $row["AD8704"];?></td>
        <td><?php echo $row["AD8705"];?></td>
        <td><?php echo $row["AD8711"];?></td>
        <td><?php echo $row["AD8712"];?></td>
</tr>
<?php endforeach;?>
</table>
<?php
if (isset($_POST["import"])){
    $fileName=$_FILES["excel"]["name"];
    $fileExtension=explode('.',$fileName);
    $fileExtension=strtolower(end($fileExtension));

    $newfileName=date("Y.m.d") ."-". date("h.i.sa") .".". $fileExtension;
    $targetDirectory="../uploads/".$newfileName;
    move_uploaded_file($_FILES["excel"]["tmp_name"],$targetDirectory);

    error_reporting(0);
    ini_set('display_errors',0);

    require "../excelReader/excel_reader2.php";
    require "../excelReader/SpreadsheetReader.php";

    $reader=new SpreadsheetReader($targetDirectory);
    foreach($reader as $key => $row){
        $regno=$row[0];
        $name=$row[1];
        $AD8701=$row[2];
        $AD8702=$row[3];
        $AD8703=$row[4];
        $AD8704=$row[5];
        $AD8705=$row[6];
        $AD8711=$row[7];
        $AD8712=$row[8];
        mysqli_query($conn,"INSERT INTO sem7 VALUES('$regno','$name','$AD8701','$AD8702','$AD8703','$AD8704','$AD8705','$AD8711','$AD8712')");
    }
    echo 
    "
    <script>
    alert('Successfullty Imported');
    document.location.href='';
    </script>
    ";
}
?>

</body>
</html>