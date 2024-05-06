<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem6 </title>
    <link href="../../style.css" type="text/css" rel="stylesheet">
    <style>
        table{
            margin:0 35%;
        }
        </style>
</head>
<body>
<div > 
<img src="../images/logo.png" alt="logo" height=100px>

<h1 style="margin:0 5%;float:right;padding-right:450px">Kgisl Institute of Technology</h1>

<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>

<h1 style="margin:0 5%;float:right;padding-right:450px">Semester 8 Apr/May-2024</h1>

</div>

<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8701</td>
        <td>AD8702</td>
        <td>AD8703</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem8");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8701"];?></td>
        <td><?php echo $row["AD8702"];?></td>
        <td><?php echo $row["AD8703"];?></td>
</tr>
<?php endforeach;?>
</table>


</body>
</html>