<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem1 </title>
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

<h1 style="margin:0 5%;float:right;padding-right:450px">Semester 1 Nov/Dec-2020</h1>
</div>

<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>BS8161</td>
        <td>CY8151</td>
        <td>GE8151</td>
        <td>GE8152</td>
        <td>GE8161</td>
        <td>HS8151</td>
        <td>MA8151</td>
        <td>PH8151</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem1");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["BS8161"];?></td>
        <td><?php echo $row["CY8151"];?></td>
        <td><?php echo $row["GE8151"];?></td>
        <td><?php echo $row["GE8152"];?></td>
        <td><?php echo $row["GE8161"];?></td>
        <td><?php echo $row["HS8151"];?></td>
        <td><?php echo $row["MA8151"];?></td>
        <td><?php echo $row["PH8151"];?></td>
</tr>
<?php endforeach;?>
</table>

</body>
</html>