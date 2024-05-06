<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem2 </title>
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
    <h1 style="margin:auto;text-align:center;color:#504BF6">Semester 2 Apr/May-2021</h1>
    </div>
    </div>


<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8251</td>
        <td>AD8252</td>
        <td>AD8261</td>
        <td>BE8255</td>
        <td>GE8261</td>
        <td>GE8291</td>
        <td>HS8251</td>
        <td>MA8252</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem2");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8251"];?></td>
        <td><?php echo $row["AD8252"];?></td>
        <td><?php echo $row["AD8261"];?></td>
        <td><?php echo $row["BE8255"];?></td>
        <td><?php echo $row["GE8261"];?></td>
        <td><?php echo $row["GE8291"];?></td>
        <td><?php echo $row["HS8251"];?></td>
        <td><?php echo $row["MA8252"];?></td>
</tr>
<?php endforeach;?>
</table>

</body>
</html>