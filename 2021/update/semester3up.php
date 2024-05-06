<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem3 Upload</title>
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
        $ad8301=$row[2];
        $ad8302=$row[3];
        $ad8311=$row[4];
        $ad8351=$row[5];
        $cs8383=$row[6];
        $cs8392=$row[7];
        $hs8381=$row[8];
        $ma8351=$row[9];
        mysqli_query($conn,"INSERT INTO sem3 VALUES('$regno','$name','$ad8301','$ad8302','$ad8311','$ad8351','$cs8383','$cs8392','$hs8381','$ma8351')");
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