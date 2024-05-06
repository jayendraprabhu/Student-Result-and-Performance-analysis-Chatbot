<?php 
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem5 Upload</title>
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
    <h1 style="text-align:center;color:orange">SEM 5 Regular Update</h1>


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
        <td>AD8501</td>
        <td>AD8502</td>
        <td>AD8511</td>
        <td>AD8512</td>
        <td>AD8551</td>
        <td>AD8552</td>
        <td>CW8691</td>
        <td>OMD552</td>
        <td>NM</td>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM sem5");
foreach($rows as $row):
    ?>
    <tr>
    <td><?php echo $row["Regno"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["AD8501"];?></td>
        <td><?php echo $row["AD8502"];?></td>
        <td><?php echo $row["AD8511"];?></td>
        <td><?php echo $row["AD8512"];?></td>
        <td><?php echo $row["AD8551"];?></td>
        <td><?php echo $row["AD8552"];?></td>
        <td><?php echo $row["CW8691"];?></td>
        <td><?php echo $row["OMD552"];?></td>
        <td><?php echo $row["NM"];?></td>
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
        $ad8501=$row[2];
        $ad8502=$row[3];
        $ad8511=$row[4];
        $ad8512=$row[5];
        $ad8551=$row[6];
        $ad8552=$row[7];
        $cw8691=$row[8];
        $omd552=$row[9];
        $nm=$row[10];
        mysqli_query($conn,"INSERT INTO sem5 VALUES('$regno','$name','$ad8501','$ad8502','$ad8511','$ad8512','$ad8551','$ad8552','$cw8691','$omd552','$nm')");
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