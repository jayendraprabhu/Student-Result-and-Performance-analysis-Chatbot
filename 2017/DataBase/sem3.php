<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem3 </title>
    <link href="../../style.css" type="text/css" rel="stylesheet">
    <style>
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
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">2017 Regulation Student Result and Performance Analysis</h1>
    <h1 style="margin:auto;text-align:center;color:#504BF6">Semester 3 Nov/Dec-2021</h1>
    </div>
    </div>


<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8301</td>
        <td>AD8302</td>
        <td>AD8311</td>
        <td>AD8351</td>
        <td>CS8383</td>
        <td>CS8392</td>
        <td>HS8381</td>
        <td>MA8351</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem3");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8301"];?></td>
        <td><?php echo $row["AD8302"];?></td>
        <td><?php echo $row["AD8311"];?></td>
        <td><?php echo $row["AD8351"];?></td>
        <td><?php echo $row["CS8383"];?></td>
        <td><?php echo $row["CS8392"];?></td>
        <td><?php echo $row["HS8381"];?></td>
        <td><?php echo $row["MA8351"];?></td>
</tr>
<?php endforeach;?>
</table>


</body>
</html>