<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem4 Upload</title>
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
<div > 
<img src="../images/logo.png" alt="logo" height=100px>

<h1 style="margin:0 5%;float:right;padding-right:450px">Kgisl Institute of Technology</h1>
<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>
<br><br><br>
<h1 style="text-align:center">Admin Login</h1>
<h1 style="text-align:center;color:orange">Regular Update</h1>

</div>

    <form class="" action="" enctype="multipart/form-data" method="post">
        <input type="file" name="excel" required="" value="">
        <button type="submit" id="" name="import">Import</button>
</form>
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
        $ad8001=$row[2];
        $ad8401=$row[3];
        $ad8402=$row[4];
        $ad8403=$row[5];
        $ad8411=$row[6];
        $ad8412=$row[7];
        $ad8413=$row[8];
        $hs8461=$row[9];
        $ma8391=$row[10];
        mysqli_query($conn,"INSERT INTO sem4 VALUES('$Regno','$name','$ad8001','$ad8401','$ad8402','$ad8403','$ad8411','$ad8412','$ad8413','$hs8461','$ma8391')");
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