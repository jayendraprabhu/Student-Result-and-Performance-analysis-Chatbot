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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .chart {
            width: 400px;
            height: 300px;
            margin: 10px;
            background-color: cyan;
        }
    </style>
</head>
<body>
    <div>
        <img src="images/logo.png" alt="logo" height="100px">

        <h1 style="float:right;padding-right:480px">Kgisl Institute of Technology</h1>
        <h1 style="float:right;padding-right:450px">2021 Student Result and Performance Analysis</h1>
    </div>
    <h1>Student Marks Performance</h1>
    <form method="post" action="">
        <label for="reg_no">Registration Number:</label>
        <input type="text" id="reg_no" name="reg_no" required>
        <button type="submit">Display Chart</button>
    </form>
    <br><br><br>

    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the registration number from the form
    $reg_no = $_POST["reg_no"];
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database2";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
################################################################################################################################3
    // Fetch the data from the table
    $sql1 = "SELECT BS8161 AS bs8161, CY8151 AS cy8151, GE8151 AS ge8151, GE8152 AS ge8152, GE8161 AS ge8161, HS8151 AS hs8151, MA8151 AS ma8151, PH8151 AS ph8151 FROM sem1 WHERE Regno = '$reg_no'";

    $result1 = mysqli_query($conn, $sql1);

    if (!$result1) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result1) > 0) {
        $data1 = mysqli_fetch_assoc($result1);

        // Prepare the data for the chart
        $labels1 = ['BS8161', 'CY8151', 'GE8151', 'GE8152', 'GE8161', 'HS8151', 'MA8151', 'PH8151'];
        $counts1 = [
            $data1['bs8161'],
            $data1['cy8151'],
            $data1['ge8151'],
            $data1['ge8152'],
            $data1['ge8161'],
            $data1['hs8151'],
            $data1['ma8151'],
            $data1['ph8151']
        ];
    } else {
        // Set empty values if data is not found
        $labels1 = [];
        $counts1 = [];
    }

    #####################################################################################################
    // Close the database connection
    $sql2 = "SELECT AD8251 AS ad8251, AD8252 AS ad8252, AD8261 AS ad8261, BE8255 AS be8255, GE8261 AS ge8261, GE8291 AS ge8291, HS8251 AS hs8251, MA8252 AS ma8252 FROM sem2 WHERE Regno = '$reg_no'";

    $result2 = mysqli_query($conn, $sql2);

    if (!$result2) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result2) > 0) {
        $data2 = mysqli_fetch_assoc($result2);

        // Prepare the data for the chart
        $labels2 = ['AD8251', 'AD8252', 'AD8261', 'BE8255', 'GE8261', 'GE8291', 'HS8251', 'MA8252'];
        $counts2 = [
            $data2['ad8251'],
            $data2['ad8252'],
            $data2['ad8261'],
            $data2['be8255'],
            $data2['ge8261'],
            $data2['ge8291'],
            $data2['hs8251'],
            $data2['ma8252']
        ];
    } else {
        // Set empty values if data is not found
        $labels2 = [];
        $counts2 = [];
    }
    #################################################################################################################################
    $sql3 = "SELECT AD8301 AS ad8301, AD8302 AS ad8302, AD8311 AS ad8311, AD8351 AS ad8351, CS8383 AS cs8383, CS8392 AS cs8392, HS8381 AS hs8381, MA8351 AS ma8351 FROM sem3 WHERE Regno = '$reg_no'";

    $result3 = mysqli_query($conn, $sql3);

    if (!$result3) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result3) > 0) {
        $data3 = mysqli_fetch_assoc($result3);

        // Prepare the data for the chart
        $labels3 = ['AD8301', 'AD8302', 'AD8311', 'AD8351', 'CS8383', 'CS8392', 'HS8381', 'MA8351'];
        $counts3 = [
            $data3['ad8301'],
            $data3['ad8302'],
            $data3['ad8311'],
            $data3['ad8351'],
            $data3['cs8383'],
            $data3['cs8392'],
            $data3['hs8381'],
            $data3['ma8351']
        ];
    } else {
        // Set empty values if data is not found
        $labels3 = [];
        $counts3 = [];
    }

    ##########################################################################################################################################
    $sql4 = "SELECT AD8001 AS ad8001, AD8401 AS ad8401, AD8402 AS ad8402, AD8403 AS ad8403, AD8411 AS ad8411, AD8412 AS ad8412, AD8413 AS ad8413, HS8461 AS hs8461, MA8391 AS ma8391 FROM sem4 WHERE Regno = '$reg_no'";

    $result4 = mysqli_query($conn, $sql4);

    if (!$result4) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result4) > 0) {
        $data4 = mysqli_fetch_assoc($result4);

        // Prepare the data for the chart
        $labels4 = ['AD8001', 'AD8401', 'AD8402', 'AD8403', 'AD8411', 'AD8412', 'AD8413', 'HS8461', 'MA8391'];
        $counts4 = [
            $data4['ad8001'],
            $data4['ad8401'],
            $data4['ad8402'],
            $data4['ad8403'],
            $data4['ad8411'],
            $data4['ad8412'],
            $data4['ad8413'],
            $data4['hs8461'],
            $data4['ma8391'],
        ];
    } else {
        // Set empty values if data is not found
        $labels4 = [];
        $counts4 = [];
    }
    ############################################################################################################################################
    $sql5 = "SELECT AD8501 AS ad8501, AD8502 AS ad8502, AD8511 AS ad8511, AD8512 AS ad8512, AD8551 AS ad8551, AD8552 AS ad8552, CW8691 AS cw8691, OMD552 AS omd552, NM as NM5 FROM sem5 WHERE Regno = '$reg_no'";

    $result5 = mysqli_query($conn, $sql5);

    if (!$result5) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result5) > 0) {
        $data5 = mysqli_fetch_assoc($result5);

        // Prepare the data for the chart
        $labels5 = ['AD8501', 'AD8502', 'AD8511', 'AD8512', 'AD8551', 'AD8552', 'CW8691', 'OMD552', 'NM'];
        $counts5 = [
            $data5['ad8501'],
            $data5['ad8502'],
            $data5['ad8511'],
            $data5['ad8512'],
            $data5['ad8551'],
            $data5['ad8552'],
            $data5['cw8691'],
            $data5['omd552'],
            $data5['NM5'],
        ];
    } else {
        // Set empty values if data is not found
        $labels5 = [];
        $counts5 = [];
    }

    ###########################################################################################################################################
    $sql6 = "SELECT AD8601 AS ad8601, AD8602 AS ad8602, AD8611 AS ad8611, AD8612 AS ad8612, CS8072 AS cs8072, HS8591 AS hs8591, IT8501 AS it8501, IT8511 AS it8511, NM AS NM6 FROM sem6 WHERE Regno = '$reg_no'";

    $result6 = mysqli_query($conn, $sql6);

    if (!$result6) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result6) > 0) {
        $data6 = mysqli_fetch_assoc($result6);

        // Prepare the data for the chart
        $labels6 = ['AD8601', 'AD8602', 'AD8611', 'AD8612', 'CS8072', 'HS8591', 'IT8501', 'IT8511', 'NM'];
        $counts6 = [
            $data6['ad8601'],
            $data6['ad8602'],
            $data6['ad8611'],
            $data6['ad8612'],
            $data6['cs8072'],
            $data6['hs8591'],
            $data6['it8501'],
            $data6['it8511'],
            $data6['NM6'],
        ];
    } else {
        // Set empty values if data is not found
        $labels6 = [];
        $counts6 = [];
    }

    ###########################################################################################################################
    $sql7 = "SELECT AD8701 AS ad8701, AD8702 AS ad8702,AD8703 AS ad8703, AD8704 AS ad8704, AD8705 AS ad8705,AD8711 AS ad8711,AD8712 AS ad8712 from sem7 WHERE Regno = '$reg_no'";

    $result7 = mysqli_query($conn, $sql7);

    if (!$result7) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result7) > 0) {
        $data7 = mysqli_fetch_assoc($result7);

        // Prepare the data for the chart
        $labels7 = ['AD8701','AD8702','AD8703','AD8704','AD8705','AD8711','AD8712'];
        $counts7 = [
            $data7['ad8701'],
            $data7['ad8702'],
            $data7['ad8703'],
            $data7['ad8704'],
            $data7['ad8705'],
            $data7['ad8711'],
            $data7['ad8712']
        ];
    } else {
        // Set empty values if data is not found
        $labels7 = [];
        $counts7 = [];
    }
    ############################################################################################################################
    $sql8 = "SELECT AD8801 AS ad8801,AD8802 AS ad8802,AD8851 AS ad8851 FROM sem8 WHERE Regno = '$reg_no'";
    
    $result8 = mysqli_query($conn, $sql8);

    if (!$result8) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    // Check if data is found in the table
    if (mysqli_num_rows($result8) > 0) {
        $data8 = mysqli_fetch_assoc($result8);

        // Prepare the data for the chart
        $labels8 = ['AD8801','AD8802','AD8851'];
        $counts8 = [
            $data8['ad8801'],
            $data8['ad8802'],
            $data8['ad8851']
        ];
    } else {
        // Set empty values if data is not found
        $labels8 = [];
        $counts8 = [];
    }

    $query11 = "SELECT NAME as Name FROM name WHERE Regno = '$reg_no'";
    $result11 = mysqli_query($conn, $query11);
    
    if (mysqli_num_rows($result11) > 0) {
        
        $row11 = mysqli_fetch_assoc($result11);
        
        $name = $row11['Name'];
        // Prepare the data for the chart
    } else {
        // Set empty values if data is not found
        $name=[];
    }
    
    ?>
    <h2><?php echo $name; ?></h2>
    <?php
    
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Grade Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    
        <div class="outer-container">

             <div class="chart-container"><canvas class="chart" id="chart1"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart2"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart3"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart4"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart5"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart6"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart7"></canvas></div>
             <div class="chart-container"><canvas class="chart" id="chart8"></canvas></div>
        </div>

    <script>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels1) && isset($counts1)) { ?>
            var labels1 = <?php echo json_encode($labels1); ?>;
            var counts1 = <?php echo json_encode($counts1); ?>;
        <?php } else { ?>
            var labels1 = [];
            var counts1 = [];
        <?php } ?>

        var ctx1 = document.getElementById('chart1');
        //##############################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels2) && isset($counts2)) { ?>
            var labels2 = <?php echo json_encode($labels2); ?>;
            var counts2 = <?php echo json_encode($counts2); ?>;
        <?php } else { ?>
            var labels2 = [];
            var counts2 = [];
        <?php } ?>

        var ctx2 = document.getElementById('chart2');
        //###############################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels3) && isset($counts3)) { ?>
            var labels3 = <?php echo json_encode($labels3); ?>;
            var counts3 = <?php echo json_encode($counts3); ?>;
        <?php } else { ?>
            var labels3 = [];
            var counts3 = [];
        <?php } ?>

        var ctx3 = document.getElementById('chart3');
        //########################################################################################3
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels4) && isset($counts4)) { ?>
            var labels4 = <?php echo json_encode($labels4); ?>;
            var counts4 = <?php echo json_encode($counts4); ?>;
        <?php } else { ?>
            var labels4 = [];
            var counts4 = [];
        <?php } ?>

        var ctx4 = document.getElementById('chart4');
        //##########################################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels5) && isset($counts5)) { ?>
            var labels5 = <?php echo json_encode($labels5); ?>;
            var counts5 = <?php echo json_encode($counts5); ?>;
        <?php } else { ?>
            var labels5 = [];
            var counts5 = [];
        <?php } ?>

        var ctx5 = document.getElementById('chart5');
        //##########################################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels6) && isset($counts6)) { ?>
            var labels6 = <?php echo json_encode($labels6); ?>;
            var counts6 = <?php echo json_encode($counts6); ?>;
        <?php } else { ?>
            var labels6 = [];
            var counts6 = [];
        <?php } ?>

        var ctx6 = document.getElementById('chart6');
        //##########################################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels7) && isset($counts7)) { ?>
            var labels7 = <?php echo json_encode($labels7); ?>;
            var counts7 = <?php echo json_encode($counts7); ?>;
        <?php } else { ?>
            var labels7 = [];
            var counts7 = [];
        <?php } ?>

        var ctx7 = document.getElementById('chart7');
        //##########################################################################################
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($labels8) && isset($counts8)) { ?>
            var labels8 = <?php echo json_encode($labels8); ?>;
            var counts8 = <?php echo json_encode($counts8); ?>;
        <?php } else { ?>
            var labels8 = [];
            var counts8 = [];
        <?php } ?>

        var ctx8 = document.getElementById('chart8');
        //##########################################################################################

        // Function to convert grades to numerical values
        function convertGradeToValue(grade) {
            switch (grade) {
                case 'O':
                    return 10;
                case 'A+':
                    return 9;
                case 'A':
                    return 8;
                case 'B+':
                    return 7;
                case 'B':
                    return 6;
                case 'U':
                    return 0;
                default:
                    return 0;
            }
        }

        // Convert grades to numerical values for the chart data
        var convertedCounts1 = counts1.map(convertGradeToValue);
        var convertedCounts2 = counts2.map(convertGradeToValue);
        var convertedCounts3 = counts3.map(convertGradeToValue);
        var convertedCounts4 = counts4.map(convertGradeToValue);
        var convertedCounts5 = counts5.map(convertGradeToValue);
        var convertedCounts6 = counts6.map(convertGradeToValue);
        var convertedCounts7 = counts7.map(convertGradeToValue);
        var convertedCounts8 = counts8.map(convertGradeToValue);



        //########################################################################################33
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: labels1,
                datasets: [{
                    label: 'Semester 1',
                    data: convertedCounts1,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });

        //#############################################################################3
        var chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: labels2,
                datasets: [{
                    label: 'Semester 2',
                    data: convertedCounts2,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
        //##########################################################################################
        var chart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: labels3,
                datasets: [{
                    label: 'Semester 3',
                    data: convertedCounts3,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
        //######################################################################################################3
        var chart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: labels4,
                datasets: [{
                    label: 'Semester 4',
                    data: convertedCounts4,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
        //##########################################################################################################
        var chart5 = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: labels5,
                datasets: [{
                    label: 'Semester 5',
                    data: convertedCounts5,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
        //#####################################################################################################################
        var chart6 = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: labels6,
                datasets: [{
                    label: 'Semester 6',
                    data: convertedCounts6,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });

        //###################################################################################################################
        var chart7 = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: labels7,
                datasets: [{
                    label: 'Semester 7',
                    data: convertedCounts7,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
        //##########################################################################################################
        var chart8 = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: labels8,
                datasets: [{
                    label: 'Semester 8',
                    data: convertedCounts8,
                    backgroundColor: 'green',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            callback: function(value) {
                                // Convert numerical values back to grades for display
                                switch (value) {
                                    case 10:
                                        return 'O';
                                    case 9:
                                        return 'A+';
                                    case 8:
                                        return 'A';
                                    case 7:
                                        return 'B+';
                                    case 6:
                                        return 'B';
                                    case 0:
                                        return 'U';
                                    default:
                                        return '';
                                }
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>