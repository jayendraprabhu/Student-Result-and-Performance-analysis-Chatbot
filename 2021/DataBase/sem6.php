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
            margin:0 25%;
        }
        </style>
</head>
<body>
<div > 
<img src="../images/logo.png" alt="logo" height=100px>

<h1 style="margin:0 5%;float:right;padding-right:450px">Kgisl Institute of Technology</h1>

<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>

<h1 style="margin:0 5%;float:right;padding-right:450px">Semester 6 Apr/May-2023</h1>

</div>

<table border=1>
    <tr>
        <td>REG NO</td>
        <td>Name</td>
        <td>AD8601</td>
        <td>AD8602</td>
        <td>AD8611</td>
        <td>AD8612</td>
        <td>CS8072</td>
        <td>HS8591</td>
        <td>IT8501</td>
        <td>IT8511</td>
        <td>NM</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem6");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8601"];?></td>
        <td><?php echo $row["AD8602"];?></td>
        <td><?php echo $row["AD8611"];?></td>
        <td><?php echo $row["AD8612"];?></td>
        <td><?php echo $row["CS8072"];?></td>
        <td><?php echo $row["HS8591"];?></td>
        <td><?php echo $row["IT8501"];?></td>
        <td><?php echo $row["IT8511"];?></td>
        <td><?php echo $row["NM"];?></td>
</tr>
<?php endforeach;?>
</table>


</body>
</html>