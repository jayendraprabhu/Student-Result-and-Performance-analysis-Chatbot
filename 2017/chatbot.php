<?php 
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem1 Upload</title>
    <link href="../style.css" type="text/css" rel="stylesheet">
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
    <img src="images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">Regular Update</h1>
    <h1 style="text-align:center;color:orange">SEM 1 Regular Update</h1>


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
        <td>BS8161</td>
        <td>CY8151</td>
        <td>GE8151</td>
        <td>GE8152</td>
        <td>GE8161</td>
        <td>HS8151</td>
        <td>MA8151</td>
        <td>PH8151</td>
        <td>AD8251	</td>
        <td>AD8252	</td>
        <td>AD8261	</td>
        <td>AD8255	</td>
        <td>GE8261	</td>
        <td>GE8291	</td>
        <td>HS8251	</td>
        <td>MA8252	</td>
        <td>AD8301	</td>
        <td>AD8302	</td>
        <td>AD8311	</td>
        <td>AD8351	</td>
        <td>CS8383	</td>
        <td>CS8392	</td>
        <td>HS8381	</td>
        <td>MA8351	</td>
        <td>AD8001	</td>
        <td>AD8401	</td>
        <td>AD8402	</td>
        <td>AD8403	</td>
        <td>AD8411	</td>
        <td>AD8412	</td>
        <td>AD8413	</td>
        <td>HS8461	</td>
        <td>MA8391	</td>
        <td>AD8501	</td>
        <td>AD8502	</td>
        <td>AD8511	</td>
        <td>AD8512	</td>
        <td>AD8551	</td>
        <td>AD8552	</td>
        <td>CW8691	</td>
        <td>OMD552	</td>
        <td>NM1	</td>
        <td>AD8601	</td>
        <td>AD8602	</td>
        <td>AD8611	</td>
        <td>AD8612	</td>
        <td>CS8072	</td>
        <td>HS8591	</td>
        <td>IT8501	</td>
        <td>IT8511	</td>
        <td>NM2	</td>
        <td>AD8701	</td>
        <td>AD8702	</td>
        <td>AD8703</td>
        <td>AD8704	</td>
        <td>AD8705	</td>
        <td>AD8711	</td>
        <td>AD8712	</td>
        <td>NM3	</td>
        <td>AD8801	</td>
        <td>AD8802	</td>
        <td>AD8851</td>


<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM overall");
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
        <td><?php echo $row["AD8251"];?></td>	
        <td><?php echo $row["AD8252"];?></td>	
        <td><?php echo $row["AD8261"];?></td>	
        <td><?php echo $row["AD8255"];?></td>	
        <td><?php echo $row["GE8261"];?></td>	
        <td><?php echo $row["GE8291"];?></td>	
        <td><?php echo $row["HS8251"];?></td>	
        <td><?php echo $row["MA8252"];?></td>	
        <td><?php echo $row["AD8301"];?></td>	
        <td><?php echo $row["AD8302"];?></td>	
        <td><?php echo $row["AD8311"];?></td>	
        <td><?php echo $row["AD8351"];?></td>	
        <td><?php echo $row["CS8383"];?></td>	
        <td><?php echo $row["CS8392"];?></td>	
        <td><?php echo $row["HS8381"];?></td>	
        <td><?php echo $row["MA8351"];?></td>	
        <td><?php echo $row["AD8001"];?></td>	
        <td><?php echo $row["AD8401"];?></td>	
        <td><?php echo $row["AD8402"];?></td>	
        <td><?php echo $row["AD8403"];?></td>	
        <td><?php echo $row["AD8411"];?></td>	
        <td><?php echo $row["AD8412"];?></td>	
        <td><?php echo $row["AD8413"];?></td>	
        <td><?php echo $row["HS8461"];?></td>	
        <td><?php echo $row["MA8391"];?></td>	
        <td><?php echo $row["AD8501"];?></td>	
        <td><?php echo $row["AD8502"];?></td>	
        <td><?php echo $row["AD8511"];?></td>	
        <td><?php echo $row["AD8512"];?></td>	
        <td><?php echo $row["AD8551"];?></td>	
        <td><?php echo $row["AD8552"];?></td>	
        <td><?php echo $row["CW8691"];?></td>	
        <td><?php echo $row["OMD552"];?></td>	
        <td><?php echo $row["NM1"];?></td>	
        <td><?php echo $row["AD8601"];?></td>	
        <td><?php echo $row["AD8611"];?></td>	
        <td><?php echo $row["AD8612"];?></td>	
        <td><?php echo $row["CS8072"];?></td>	
        <td><?php echo $row["HS8591"];?></td>	
        <td><?php echo $row["IT8501"];?></td>	
        <td><?php echo $row["IT8511"];?></td>	
        <td><?php echo $row["NM2"];?></td>	
        <td><?php echo $row["AD8701"];?></td>	
        <td><?php echo $row["AD8702"];?></td>	
        <td><?php echo $row["AD8703"];?></td>	
        <td><?php echo $row["AD8704"];?></td>	
        <td><?php echo $row["AD8705"];?></td>	
        <td><?php echo $row["AD8711"];?></td>	
        <td><?php echo $row["AD8712"];?></td>	
        <td><?php echo $row["NM3"];?></td>	
        <td><?php echo $row["AD8801"];?></td>	
        <td><?php echo $row["AD8802"];?></td>	
        <td><?php echo $row["AD8851"];?></td>	


</tr>
<?php endforeach;?>
</table>
<?php
if (isset($_POST["import"])){
    $fileName=$_FILES["excel"]["name"];
    $fileExtension=explode('.',$fileName);
    $fileExtension=strtolower(end($fileExtension));

    $newfileName=date("Y.m.d") ."-". date("h.i.sa") .".". $fileExtension;
    $targetDirectory="uploads/".$newfileName;
    move_uploaded_file($_FILES["excel"]["tmp_name"],$targetDirectory);

    error_reporting(0);
    ini_set('display_errors',0);

    require "excelReader/excel_reader2.php";
    require "excelReader/SpreadsheetReader.php";

    $reader=new SpreadsheetReader($targetDirectory);
    foreach($reader as $key => $row){
        $Regno=$row[0];
        $name=$row[1];
        $BS8161=$row[2];
        $CY8151=$row[3];
        $GE8151=$row[4];
        $GE8152=$row[5];
        $GE8161=$row[6];
        $HS8151=$row[7];
        $MA8151=$row[8];
        $PH8151=$row[9];
        $AD8251=$row[10];	
        $AD8252=$row[11];	
        $AD8261=$row[12];	
        $AD8255=$row[13];	
        $GE8261=$row[14];	
        $GE8291=$row[15];	
        $HS8251=$row[16];	
        $MA8252=$row[17];	
        $AD8301=$row[18];	
        $AD8302=$row[19];	
        $AD8311=$row[20];	
        $AD8351=$row[21];	
        $CS8383=$row[22];	
        $CS8392=$row[23];	
        $HS8381=$row[24];	
        $MA8351=$row[25];	
        $AD8001=$row[26];	
        $AD8401=$row[27];	
        $AD8402=$row[28];	
        $AD8403=$row[29];	
        $AD8411=$row[30];	
        $AD8412=$row[31];	
        $AD8413=$row[32];	
        $HS8461=$row[33];	
        $MA8391=$row[34];	
        $AD8501=$row[35];	
        $AD8502=$row[36];	
        $AD8511=$row[37];	
        $AD8512=$row[38];	
        $AD8551=$row[39];	
        $AD8552=$row[40];	
        $CW8691=$row[41];	
        $OMD552=$row[42];	
        $NM1=$row[43];	
        $AD8601=$row[44];	
        $AD8602=$row[45];	
        $AD8611=$row[46];	
        $AD8612=$row[47];	
        $CS8072=$row[48];	
        $HS8591=$row[49];	
        $IT8501=$row[50];	
        $IT8511=$row[51];	
        $NM2=$row[52];	
        $AD8701=$row[53];	
        $AD8702=$row[54];	
        $AD8703=$row[55];	
        $AD8704=$row[56];	
        $AD8705=$row[57];	
        $AD8711=$row[58];	
        $AD8712=$row[59];	
        $NM3=$row[60];	
        $AD8801=$row[61];	
        $AD8802=$row[62];	
        $AD8851=$row[63];	


        mysqli_query($conn,"INSERT INTO overall VALUES('$Regno','$name','$BS8161','$CY8151','$GE8151','$GE8152','$GE8161','$HS8151','$MA8151','$PH8151','$AD8251','$AD8252','$AD8261','$AD8255','$GE8261','$GE8291','$HS8251','$MA8252','$AD8301','$AD8302','$AD8311','$AD8351','$CS8383','$CS8392','$HS8381','$MA8351','$AD8001','$AD8401','$AD8402','$AD8403','$AD8411','$AD8412','$AD8413','$HS8461','$MA8391','$AD8501','$AD8502','$AD8511','$AD8512','$AD8551','$AD8552','$CW8691','$OMD552','$NM1','$AD8601','$AD8602','$AD8611','$AD8612','$CS8072','$HS8591','$IT8501','$IT8511','$NM2','$AD8701','$AD8702','$AD8703','$AD8704','$AD8705','$AD8711','$AD8712','$NM3','$AD8801','$AD8802','$AD8851')");
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