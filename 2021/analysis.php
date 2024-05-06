<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Chart</title>
    <!-- Include necessary libraries for the chart and jsPDF -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link href="../style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


    <style>

        .outer-container{
            
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }
        .chart-container {

            width:700px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .chart {
            width:200px;
            height: 300px;

            margin: 10px;
            background-color: cyan;
        }
    </style>
</head>
<body>
    <div>
        <img src="images/logo.png" alt="logo" height="100px">

        <h1 style="margin:5%;float:right;padding-right:480px">Kgisl Institute of Technology</h1>
        
<h1 style="margin:0 -8%;float:right;padding-right:450px">2017 Regulation Student Result and Performance Analysis</h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Student Marks Chart</h1>
    
    <br><br><br>

    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch the data from the table

$sql11 = "SELECT
    COUNT(BS8161) AS BS816_1,
    COUNT(CY8151) AS CY815_1,
    COUNT(GE8151) AS GE815_1,
    COUNT(GE8152) AS GE815_2,
    COUNT(GE8161) AS GE816_1,
    COUNT(HS8151) AS HS815_1,
    COUNT(MA8151) AS MA815_1,
    COUNT(PH8151) AS PH815_1
    FROM sem1";

$result11 = mysqli_query($conn, $sql11);

if (!$result11) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data11 = mysqli_fetch_assoc($result11);

// Prepare the data for the chart
$labels11 = ['BS8161','CY8151','GE8151','GE8152','GE8161','HS8151','MA8151','PH8151'];
$counts11 = [
    $data11['BS816_1'],
    $data11['CY815_1'],
    $data11['GE815_1'],
    $data11['GE815_2'],
    $data11['GE816_1'],
    $data11['HS815_1'],
    $data11['MA815_1'],
    $data11['PH815_1']

];

$sql1 = "SELECT
    COUNT(CASE WHEN  BS8161='U' THEN 1 END) AS BS8161,
    COUNT(CASE WHEN  CY8151='U' THEN 1 END) AS CY8151,
    COUNT(CASE WHEN GE8151='U' THEN 1 END) AS GE8151,
    COUNT(CASE WHEN GE8152='U' THEN 1 END) AS GE8152,
    COUNT(CASE WHEN GE8161='U' THEN 1 END) AS GE8161,
    COUNT(CASE WHEN HS8151='U' THEN 1 END) AS HS8151,
    COUNT(CASE WHEN MA8151='U' THEN 1 END) AS MA8151,
    COUNT(CASE WHEN PH8151='U' THEN 1 END) AS PH8151
    FROM sem1";

$result1 = mysqli_query($conn, $sql1);

if (!$result1) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data1 = mysqli_fetch_assoc($result1);

// Prepare the data for the chart
$labels1 = ['BS8161','CY8151','GE8151','GE8152','GE8161','HS8151','MA8151','PH8151'];
$counts1 = [
    $data1['BS8161'],
    $data1['CY8151'],
    $data1['GE8151'],
    $data1['GE8152'],
    $data1['GE8161'],
    $data1['HS8151'],
    $data1['MA8151'],
    $data1['PH8151']

];



$sql22 = "SELECT
    COUNT(AD8251) AS AD825_1,
    COUNT(AD8252) AS AD825_2,
    COUNT(AD8261) AS AD826_1,
    COUNT(BE8255) AS BE825_5,
    COUNT(GE8261) AS GE826_1,
    COUNT(GE8291) AS GE829_1,
    COUNT(HS8251) AS HS825_1,
    COUNT(MA8252) AS MA825_2
    FROM sem2";

$result22 = mysqli_query($conn, $sql22);

if (!$result22) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data22 = mysqli_fetch_assoc($result22);

// Prepare the data for the chart
$labels22 = ['AD8251','AD8252','AD8261','BE8255','GE8261','GE8291','HS8251','MA8252'];
$counts22 = [
    $data22['AD825_1'],
    $data22['AD825_2'],
    $data22['AD826_1'],
    $data22['BE825_5'],
    $data22['GE826_1'],
    $data22['GE829_1'],
    $data22['HS825_1'],
    $data22['MA825_2']

];

$sql2 = "SELECT
    COUNT(CASE WHEN  AD8251='U' THEN 1 END) AS AD8251,
    COUNT(CASE WHEN  AD8252='U' THEN 1 END) AS AD8252,
    COUNT(CASE WHEN AD8261='U' THEN 1 END) AS AD8261,
    COUNT(CASE WHEN BE8255='U' THEN 1 END) AS BE8255,
    COUNT(CASE WHEN GE8261='U' THEN 1 END) AS GE8261,
    COUNT(CASE WHEN GE8291='U' THEN 1 END) AS GE8291,
    COUNT(CASE WHEN HS8251='U' THEN 1 END) AS HS8251,
    COUNT(CASE WHEN MA8252='U' THEN 1 END) AS MA8252
    FROM sem2";

$result2 = mysqli_query($conn, $sql2);

if (!$result2) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data2 = mysqli_fetch_assoc($result2);

// Prepare the data for the chart
$labels2 = ['AD8251','AD8252','AD8261','BE8255','GE8261','GE8291','HS8251','MA8252'];
$counts2 = [
    $data2['AD8251'],
    $data2['AD8252'],
    $data2['AD8261'],
    $data2['BE8255'],
    $data2['GE8261'],
    $data2['GE8291'],
    $data2['HS8251'],
    $data2['MA8252']

];

$sql33 = "SELECT
    COUNT(AD8301) AS AD830_1,
    COUNT(AD8302) AS AD830_2,
    COUNT(AD8311) AS AD831_1,
    COUNT(AD8351) AS AD835_1,
    COUNT(CS8383) AS CS838_3,
    COUNT(CS8392) AS CS839_2,
    COUNT(HS8381) AS HS838_1,
    COUNT(MA8351) AS MA835_1
    FROM sem3";

$result33 = mysqli_query($conn, $sql33);

if (!$result33) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data33 = mysqli_fetch_assoc($result33);

// Prepare the data for the chart
$labels33 = ['AD8301','AD8302','AD8311','AD8351','CS8383','CS8392','HS8381','MA8351'];
$counts33 = [
    $data33['AD830_1'],
    $data33['AD830_2'],
    $data33['AD831_1'],
    $data33['AD835_1'],
    $data33['CS838_3'],
    $data33['CS839_2'],
    $data33['HS838_1'],
    $data33['MA835_1']

];

$sql3 = "SELECT
    COUNT(CASE WHEN  AD8301='U' THEN 1 END) AS AD8301,
    COUNT(CASE WHEN  AD8302='U' THEN 1 END) AS AD8302,
    COUNT(CASE WHEN AD8311='U' THEN 1 END) AS AD8311,
    COUNT(CASE WHEN AD8351='U' THEN 1 END) AS AD8351,
    COUNT(CASE WHEN CS8383='U' THEN 1 END) AS CS8383,
    COUNT(CASE WHEN CS8392='U' THEN 1 END) AS CS8392,
    COUNT(CASE WHEN HS8381='U' THEN 1 END) AS HS8381,
    COUNT(CASE WHEN MA8351='U' THEN 1 END) AS MA8351
    FROM sem3";

$result3 = mysqli_query($conn, $sql3);

if (!$result3) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data3 = mysqli_fetch_assoc($result3);

// Prepare the data for the chart
$labels3 = ['AD8301','AD8302','AD8311','AD8351','CS8383','CS8392','HS8381','MA8351'];
$counts3 = [
    $data3['AD8301'],
    $data3['AD8302'],
    $data3['AD8311'],
    $data3['AD8351'],
    $data3['CS8383'],
    $data3['CS8392'],
    $data3['HS8381'],
    $data3['MA8351']

];

$sql44 = "SELECT
    COUNT(AD8001) AS AD800_1,
    COUNT(AD8401) AS AD840_1,
    COUNT(AD8402) AS AD840_2,
    COUNT(AD8403) AS AD840_3,
    COUNT(AD8411) AS AD841_1,
    COUNT(AD8412) AS AD841_2,
    COUNT(AD8413) AS AD841_3,
    COUNT(HS8461) AS HS846_1,
    COUNT(MA8391) AS MA839_1
    FROM sem4";

$result44 = mysqli_query($conn, $sql44);

if (!$result44) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data44 = mysqli_fetch_assoc($result44);

// Prepare the data for the chart
$labels44 = ['AD8001','AD8401','AD8402','AD8403','AD8411','AD8412','AD8413','HS8461','MA8391'];
$counts44 = [
    $data44['AD800_1'],
    $data44['AD840_1'],
    $data44['AD840_2'],
    $data44['AD840_3'],
    $data44['AD841_1'],
    $data44['AD841_2'],
    $data44['AD841_3'],
    $data44['HS846_1'],
    $data44['MA839_1']

    
];
$sql4 = "SELECT
    COUNT(CASE WHEN  AD8001='U' THEN 1 END) AS AD8001,
    COUNT(CASE WHEN  AD8401='U' THEN 1 END) AS AD8401,
    COUNT(CASE WHEN AD8402='U' THEN 1 END) AS AD8402,
    COUNT(CASE WHEN AD8403='U' THEN 1 END) AS AD8403,
    COUNT(CASE WHEN AD8411='U' THEN 1 END) AS AD8411,
    COUNT(CASE WHEN AD8412='U' THEN 1 END) AS AD8412,
    COUNT(CASE WHEN AD8413='U' THEN 1 END) AS AD8413,
    COUNT(CASE WHEN HS8461='U' THEN 1 END) AS HS8461,
    COUNT(CASE WHEN MA8391='U' THEN 1 END) AS MA8391
    FROM sem4";

$result4 = mysqli_query($conn, $sql4);

if (!$result4) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data4 = mysqli_fetch_assoc($result4);

// Prepare the data for the chart
$labels4 = ['AD8001','AD8401','AD8402','AD8403','AD8411','AD8412','AD8413','HS8461','MA8391'];
$counts4 = [
    $data4['AD8001'],
    $data4['AD8401'],
    $data4['AD8402'],
    $data4['AD8403'],
    $data4['AD8411'],
    $data4['AD8412'],
    $data4['AD8413'],
    $data4['HS8461'],
    $data4['MA8391']

];

$sql55 = "SELECT
    COUNT(AD8501) AS AD850_1,
    COUNT(AD8502) AS AD850_2,
    COUNT(AD8511) AS AD851_1,
    COUNT(AD8512) AS AD851_2,
    COUNT(AD8551) AS AD855_1,
    COUNT(AD8552) AS AD855_2,
    COUNT(CW8691) AS CW869_1,
    COUNT(OMD552) AS OMD55_2,
    COUNT(NM) AS N_M
    FROM sem5";

$result55 = mysqli_query($conn, $sql55);

if (!$result55) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data55 = mysqli_fetch_assoc($result55);

// Prepare the data for the chart
$labels55 = ['AD8501','AD8502','AD8511','AD8512','AD8551','AD8552','CW8691','OMD552','NM'];
$counts55 = [
    $data55['AD850_1'],
    $data55['AD850_2'],
    $data55['AD851_1'],
    $data55['AD851_2'],
    $data55['AD855_1'],
    $data55['AD855_2'],
    $data55['CW869_1'],
    $data55['OMD55_2'],
    $data55['N_M']

];

$sql5 = "SELECT
    COUNT(CASE WHEN  AD8501='U' THEN 1 END) AS AD8501,
    COUNT(CASE WHEN  AD8502='U' THEN 1 END) AS AD8502,
    COUNT(CASE WHEN AD8511='U' THEN 1 END) AS AD8511,
    COUNT(CASE WHEN AD8512='U' THEN 1 END) AS AD8512,
    COUNT(CASE WHEN AD8551='U' THEN 1 END) AS AD8551,
    COUNT(CASE WHEN AD8552='U' THEN 1 END) AS AD8552,
    COUNT(CASE WHEN CW8691='U' THEN 1 END) AS CW8691,
    COUNT(CASE WHEN OMD552='U' THEN 1 END) AS OMD552,
    COUNT(CASE WHEN NM='U' THEN 1 END) AS NM
    FROM sem5";

$result5 = mysqli_query($conn, $sql5);

if (!$result5) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data5 = mysqli_fetch_assoc($result5);

// Prepare the data for the chart
$labels5 = ['AD8501','AD8502','AD8511','AD8512','AD8551','AD8552','CW8691','OMD552','NM'];
$counts5 = [
    $data5['AD8501'],
    $data5['AD8502'],
    $data5['AD8511'],
    $data5['AD8512'],
    $data5['AD8551'],
    $data5['AD8552'],
    $data5['CW8691'],
    $data5['OMD552'],
    $data5['NM']

];


$sql66 = "SELECT
    COUNT(AD8601) AS ad860_1,
    COUNT(AD8602) AS ad860_2,
    COUNT(AD8611) AS ad861_1,
    COUNT(AD8612) AS ad861_2,
    COUNT(CS8072) AS cs807_2,
    COUNT(HS8591) AS hs859_1,
    COUNT(IT8501) AS it850_1,
    COUNT(IT8511) AS it851_1,
    COUNT(NM) AS n_m 
    FROM sem6";

$result66 = mysqli_query($conn, $sql66);

if (!$result66) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data66 = mysqli_fetch_assoc($result66);

// Prepare the data for the chart
$labels66 = ['AD8601','AD8602','AD8611','AD8612','CS8072','HS8591','IT8501','IT8511','NM'];
$counts66 = [
    $data66['ad860_1'],
    $data66['ad860_2'],
    $data66['ad861_1'],
    $data66['ad861_2'],
    $data66['cs807_2'],
    $data66['hs859_1'],
    $data66['it850_1'],
    $data66['it851_1'],
    $data66['n_m']

];


$sql6 = "SELECT
    COUNT(CASE WHEN  AD8601='U' THEN 1 END) AS ad8601,
    COUNT(CASE WHEN  AD8602='U' THEN 1 END) AS ad8602,
    COUNT(CASE WHEN AD8611='U' THEN 1 END) AS ad8611,
    COUNT(CASE WHEN AD8612='U' THEN 1 END) AS ad8612,
    COUNT(CASE WHEN CS8072='U' THEN 1 END) AS cs8072,
    COUNT(CASE WHEN HS8591='U' THEN 1 END) AS hs8591,
    COUNT(CASE WHEN IT8501='U' THEN 1 END) AS it8501,
    COUNT(CASE WHEN IT8511='U' THEN 1 END) AS it8511,
    COUNT(CASE WHEN NM='U' THEN 1 END) AS nm 
    FROM sem6";

$result6 = mysqli_query($conn, $sql6);

if (!$result6) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data6 = mysqli_fetch_assoc($result6);

// Prepare the data for the chart
$labels6 = ['AD8601','AD8602','AD8611','AD8612','CS8072','HS8591','IT8501','IT8511','NM'];
$counts6 = [
    $data6['ad8601'],
    $data6['ad8602'],
    $data6['ad8611'],
    $data6['ad8612'],
    $data6['cs8072'],
    $data6['hs8591'],
    $data6['it8501'],
    $data6['it8511'],
    $data6['nm']

];


$sql77 = "SELECT
    COUNT(AD8701) AS AD870_1,
    COUNT(AD8702) AS AD870_2,
    COUNT(AD8703) AS AD870_3,
    COUNT(AD8704) AS AD870_4,
    COUNT(AD8705) AS AD870_5,
    COUNT(AD8711) AS AD871_1,
    COUNT(AD8712) AS AD871_2
    FROM sem7";

$result77 = mysqli_query($conn, $sql77);

if (!$result77) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data77 = mysqli_fetch_assoc($result77);

// Prepare the data for the chart
$labels77 = ['AD8701','AD8702','AD8703','AD8704','AD8705','AD8711','AD8712'];
$counts77 = [
    $data77['AD870_1'],
    $data77['AD870_2'],
    $data77['AD870_3'],
    $data77['AD870_4'],
    $data77['AD870_5'],
    $data77['AD871_1'],
    $data77['AD871_2']

];

$sql7 = "SELECT
    COUNT(CASE WHEN  AD8701='U' THEN 1 END) AS AD8701,
    COUNT(CASE WHEN  AD8702='U' THEN 1 END) AS AD8702,
    COUNT(CASE WHEN AD8703='U' THEN 1 END) AS AD8703,
    COUNT(CASE WHEN AD8704='U' THEN 1 END) AS AD8704,
    COUNT(CASE WHEN AD8705='U' THEN 1 END) AS AD8705,
    COUNT(CASE WHEN AD8711='U' THEN 1 END) AS AD8711,
    COUNT(CASE WHEN AD8712='U' THEN 1 END) AS AD8712
    FROM sem7";

$result7 = mysqli_query($conn, $sql7);

if (!$result7) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data7 = mysqli_fetch_assoc($result7);

// Prepare the data for the chart
$labels7 = ['AD8701','AD8702','AD8703','AD8704','AD8705','AD8711','AD8712'];
$counts7 = [
    $data7['AD8701'],
    $data7['AD8702'],
    $data7['AD8703'],
    $data7['AD8704'],
    $data7['AD8705'],
    $data7['AD8711'],
    $data7['AD8712']

];


$sql88 = "SELECT
    COUNT(AD8801='U') AS AD880_1,
    COUNT(AD8802='U') AS AD880_2,
    COUNT(AD8851='U') AS AD885_1
    FROM sem8";

$result88 = mysqli_query($conn, $sql88);

if (!$result88) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data88 = mysqli_fetch_assoc($result88);

// Prepare the data for the chart
$labels88 = ['AD8801','AD8802','AD8851'];
$counts88 = [
    $data88['AD880_1'],
    $data88['AD880_2'],
    $data88['AD885_1']
];


$sql8 = "SELECT
    COUNT(CASE WHEN  AD8801='U' THEN 1 END) AS AD8801,
    COUNT(CASE WHEN  AD8802='U' THEN 1 END) AS AD8802,
    COUNT(CASE WHEN AD8851='U' THEN 1 END) AS AD8851
    FROM sem8";

$result8 = mysqli_query($conn, $sql8);

if (!$result8) {
    die("Query execution failed: " . mysqli_error($conn));
}
$data8 = mysqli_fetch_assoc($result8);

// Prepare the data for the chart
$labels8 = ['AD8801','AD8802','AD8851'];
$counts8 = [
    $data8['AD8801'],
    $data8['AD8802'],
    $data8['AD8851']
];

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="outer-container">
        
        <div class="chart-container"><canvas class="chart" id="chart11" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart1" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart22" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart2" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart33" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart3" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart44" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart4" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart55" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart5" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart66" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart6" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart77" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart7" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart88" ></canvas></div>
        <div class="chart-container"><canvas class="chart" id="chart8" ></canvas></div>
    
    </div>
    
    <script>
        var labels11 = <?php echo json_encode($labels11); ?>;
        var counts11 = <?php echo json_encode($counts11); ?>;
        var ctx11 = document.getElementById('chart11');
        
        var chart11 = new Chart(ctx11, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels11); ?>,
                datasets: [{
                    label: 'Semester 1',
                    data: <?php echo json_encode($counts11); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
        
        var labels1 = <?php echo json_encode($labels1); ?>;
        var counts1 = <?php echo json_encode($counts1); ?>;
        var ctx1 = document.getElementById('chart1');
        
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels1); ?>,
                datasets: [{
                    label: 'Semester 1',
                    width:'300px',
                    data: <?php echo json_encode($counts1); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });


        var labels22 = <?php echo json_encode($labels22); ?>;
        var counts22 = <?php echo json_encode($counts22); ?>;
        var ctx22 = document.getElementById('chart22');
        
        
        var chart22 = new Chart(ctx22, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels22); ?>,
                datasets: [{
                    label: 'Semester 2',
                    data: <?php echo json_encode($counts22); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        var labels2 = <?php echo json_encode($labels2); ?>;
        var counts2 = <?php echo json_encode($counts2); ?>;
        var ctx2 = document.getElementById('chart2');
        
        
        var chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels2); ?>,
                datasets: [{
                    label: 'Semester 2',
                    data: <?php echo json_encode($counts2); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });


        var labels33 = <?php echo json_encode($labels33); ?>;
        var counts33 = <?php echo json_encode($counts33); ?>;
        var ctx33 = document.getElementById('chart33');
        
        
        var chart33 = new Chart(ctx33, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels33); ?>,
                datasets: [{
                    label: 'Semester 3',
                    data: <?php echo json_encode($counts33); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
        var labels3 = <?php echo json_encode($labels3); ?>;
        var counts3 = <?php echo json_encode($counts3); ?>;
        var ctx3 = document.getElementById('chart3');
        
        
        var chart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels3); ?>,
                datasets: [{
                    label: 'Semester 3',
                    data: <?php echo json_encode($counts3); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });


        var labels44 = <?php echo json_encode($labels44); ?>;
        var counts44 = <?php echo json_encode($counts44); ?>;
        var ctx44 = document.getElementById('chart44');
        
        
        var chart44 = new Chart(ctx44, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels44); ?>,
                datasets: [{
                    label: 'Semester 4',
                    data: <?php echo json_encode($counts44); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
        var labels4 = <?php echo json_encode($labels4); ?>;
        var counts4 = <?php echo json_encode($counts4); ?>;
        var ctx4 = document.getElementById('chart4');
        
        
        var chart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels4); ?>,
                datasets: [{
                    label: 'Semester 4',
                    data: <?php echo json_encode($counts4); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });


        var labels55 = <?php echo json_encode($labels55); ?>;
        var counts55 = <?php echo json_encode($counts55); ?>;
        var ctx55 = document.getElementById('chart55');
        
        
        var chart55 = new Chart(ctx55, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels55); ?>,
                datasets: [{
                    label: 'Semester 5',
                    data: <?php echo json_encode($counts55); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        var labels5 = <?php echo json_encode($labels5); ?>;
        var counts5 = <?php echo json_encode($counts5); ?>;
        var ctx5 = document.getElementById('chart5');
        
        
        var chart5 = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels5); ?>,
                datasets: [{
                    label: 'Semester 5',
                    data: <?php echo json_encode($counts5); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });


        var labels66 = <?php echo json_encode($labels66); ?>;
        var counts66 = <?php echo json_encode($counts66); ?>;
        var ctx66 = document.getElementById('chart66');
        
        
        var chart66 = new Chart(ctx66, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels66); ?>,
                datasets: [{
                    label: 'Semester 6',
                    data: <?php echo json_encode($counts66); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        var labels6 = <?php echo json_encode($labels6); ?>;
        var counts6 = <?php echo json_encode($counts6); ?>;
        var ctx6 = document.getElementById('chart6');
        
        
        var chart6 = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels6); ?>,
                datasets: [{
                    label: 'Semester 6',
                    data: <?php echo json_encode($counts6); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        

        var labels77 = <?php echo json_encode($labels77); ?>;
        var counts77 = <?php echo json_encode($counts77); ?>;
        var ctx77 = document.getElementById('chart77');
        
        
        var chart77 = new Chart(ctx77, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels77); ?>,
                datasets: [{
                    label: 'Semester 7',
                    data: <?php echo json_encode($counts77); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        var labels7 = <?php echo json_encode($labels7); ?>;
        var counts7 = <?php echo json_encode($counts7); ?>;
        var ctx7 = document.getElementById('chart7');
        
        
        var chart7 = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels7); ?>,
                datasets: [{
                    label: 'Semester 7',
                    data: <?php echo json_encode($counts7); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        

        var labels88 = <?php echo json_encode($labels88); ?>;
        var counts88 = <?php echo json_encode($counts88); ?>;
        var ctx88 = document.getElementById('chart88');
        
        
        var chart88 = new Chart(ctx88, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels88); ?>,
                datasets: [{
                    label: 'Semester 8',
                    data: <?php echo json_encode($counts88); ?>,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });

        var labels8 = <?php echo json_encode($labels8); ?>;
        var counts8 = <?php echo json_encode($counts8); ?>;
        var ctx8 = document.getElementById('chart8');
        
        
        var chart8 = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels8); ?>,
                datasets: [{
                    label: 'Semester 8',
                    data: <?php echo json_encode($counts8); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    </script>
</body>
</html>