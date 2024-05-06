<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem4 </title>
    <link href="../../style.css" type="text/css" rel="stylesheet">
    <style>
        table{
            margin:0 25%;
        }
        </style>
</head>
<body>
<div > 
<img src="../images/logo.png" alt="logo" height=100px>

<h1 style="margin:0 5%;float:right;padding-right:450px">Kgisl Institute of Technology</h1>

<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>

<h1 style="margin:0 5%;float:right;padding-right:450px">Semester 4 Apr/May-2022</h1>
</div>

<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8001</td>
        <td>AD8401</td>
        <td>AD8402</td>
        <td>AD8403</td>
        <td>AD8411</td>
        <td>AD8412</td>
        <td>AD8413</td>
        <td>HS8461</td>
        <td>MA8391</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem4");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8001"];?></td>
        <td><?php echo $row["AD8401"];?></td>
        <td><?php echo $row["AD8402"];?></td>
        <td><?php echo $row["AD8403"];?></td>
        <td><?php echo $row["AD8411"];?></td>
        <td><?php echo $row["AD8412"];?></td>
        <td><?php echo $row["AD8413"];?></td>
        <td><?php echo $row["HS8461"];?></td>
        <td><?php echo $row["MA8391"];?></td>
</tr>
<?php endforeach;?>
</table>


</body>
</html>