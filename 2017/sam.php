<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Chart</title>
    <!-- Include necessary libraries for the chart and jsPDF -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


    <style>
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
        <h1 style="float:right;padding-right:450px">Student Result and Performance Analysis</h1>
    </div>
    <h1>Student Marks Chart</h1>
    <form method="post" action="">
        <label for="reg_no">Registration Number:</label>
        <input type="text" id="reg_no" name="reg_no" required>
        <button type="submit">Display Chart</button>
    </form>
    <br><br><br>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the registration number from the form
        $reg_no = $_POST["reg_no"];

        // Connect to the MySQL database
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "database1";
        $conn = mysqli_connect($host, $username, $password, $database, 3306);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve the marks for the given registration number
        $query1 = "SELECT BS8161, CY8151, GE8151, GE8152, GE8161, HS8151, MA8151, PH8151 FROM sem1 WHERE Regno = '$reg_no'";
        $result1 = mysqli_query($conn, $query1);
        if (!$result1) {
            die("Query failed: " . mysqli_error($conn));
        }

        $query2 = "SELECT AD8251, AD8252, AD8261, BE8255, GE8261, GE8291, HS8251, MA8252 FROM sem2 WHERE Regno = '$reg_no'";
        $result2 = mysqli_query($conn, $query2);
        if (!$result2) {
            die("Query failed: " . mysqli_error($conn));
        }

        $query3 = "SELECT AD8301, AD8302, AD8311, AD8351, CS8383, CS8392, HS8381, MA8351 FROM sem3 WHERE Regno = '$reg_no'";
        $result3 = mysqli_query($conn, $query3);
        if (!$result3) {
            die("Query failed: " . mysqli_error($conn));
        }



        
        $query4 = "SELECT AD8001, AD8401, AD8402, AD8403, AD8411, AD8412, AD8413, HS8461, MA8391 FROM sem4 WHERE Regno = '$reg_no'";
        $result4 = mysqli_query($conn, $query4);
        if (!$result4) {
            die("Query failed: " . mysqli_error($conn));
        }

        $query5 = "SELECT AD8501, AD8502, AD8511, AD8512, AD8551, AD8552, CW8691, OMD552, NM FROM sem5 WHERE Regno = '$reg_no'";
        $result5 = mysqli_query($conn, $query5);
        if (!$result5) {
            die("Query failed: " . mysqli_error($conn));
        }

        

        $query6 = "SELECT AD8601, AD8602, AD8611, AD8612, CS8072, HS8591, IT8501, IT8511, NM FROM sem6 WHERE Regno = '$reg_no'";
        $result6 = mysqli_query($conn, $query6);
        if (!$result6) {
            die("Query failed: " . mysqli_error($conn));
        }

        




        $query11 = "SELECT Name FROM sem6 WHERE Regno = '$reg_no'";
        $result11 = mysqli_query($conn, $query11);

        $row11 = mysqli_fetch_assoc($result11);
        $name = $row11['Name'];
        ?>
        <h2><?php echo $name; ?></h2>

        <div class="chart-container">
        <?php





        // Fetch the row containing the marks
        $row1 = mysqli_fetch_assoc($result1);
        if (!$row1) {
            
            $convertedMarks = array_fill(0, 9, 0);
        } else {
            // Generate the chart data
            $gradeConversion = [
                "O" => 10,
                "A+" => 9,
                "A" => 8,
                "B+" => 7,
                "B" => 6,
                "U" => 0
            ];
            $marks1 = array_values($row1);
            $convertedMarks1 = array_map(function ($mark) use ($gradeConversion) {
                return $gradeConversion[$mark];
            }, $marks1);
                
            $chartData1 = json_encode($convertedMarks1);





            $row3 = mysqli_fetch_assoc($result3);
            if (!$row3) {
                //echo "No data found for the given registration number.";
                $convertedMarks = array_fill(0, 9, 0);
            } else {
                // Generate the chart data
                $gradeConversion = [
                    "O" => 10,
                    "A+" => 9,
                    "A" => 8,
                    "B+" => 7,
                    "B" => 6,
                    "U" => 0
                ];
                $marks3 = array_values($row3);
                $convertedMarks3 = array_map(function ($mark) use ($gradeConversion) {
                    return $gradeConversion[$mark];
                }, $marks3);
                    
                $chartData3 = json_encode($convertedMarks3);





                $row4 = mysqli_fetch_assoc($result4);
                if (!$row4) {
                    //echo "No data found for the given registration number.";
                    $convertedMarks = array_fill(0, 9, 0);
                } else {
                    // Generate the chart data
                    $gradeConversion = [
                        "O" => 10,
                        "A+" => 9,
                        "A" => 8,
                        "B+" => 7,
                        "B" => 6,
                        "U" => 0
                    ];
                    $marks4 = array_values($row4);
                    $convertedMarks4 = array_map(function ($mark) use ($gradeConversion) {
                        return $gradeConversion[$mark];
                    }, $marks4);
                        
                    $chartData4 = json_encode($convertedMarks4);
                    $row5 = mysqli_fetch_assoc($result5);
                    if (!$row5) {
                        //echo "No data found for the given registration number.";
                        $convertedMarks = array_fill(0, 9, 0);
                    } else {
                        // Generate the chart data
                        $gradeConversion = [
                            "O" => 10,
                            "A+" => 9,
                            "A" => 8,
                            "B+" => 7,
                            "B" => 6,
                            "U" => 0
                        ];
                        $marks5 = array_values($row5);
                        $convertedMarks5 = array_map(function ($mark) use ($gradeConversion) {
                            return $gradeConversion[$mark];
                        }, $marks5);
                            
                        $chartData5 = json_encode($convertedMarks5);
    
        $row2 = mysqli_fetch_assoc($result2);
        if (!$row2) {
            //echo "No data found for the given registration number.";
            $convertedMarks = array_fill(0, 9, 0);
        } else {
            // Generate the chart data
            $gradeConversion = [
                "O" => 10,
                "A+" => 9,
                "A" => 8,
                "B+" => 7,
                "B" => 6,
                "U" => 0
            ];
            $marks2 = array_values($row2);
            $convertedMarks2 = array_map(function ($mark) use ($gradeConversion) {
                return $gradeConversion[$mark];
            }, $marks2);
                
            $chartData2 = json_encode($convertedMarks2);


            $row6 = mysqli_fetch_assoc($result6);
        if (!$row6) {
            //echo "No data found for the given registration number.";
                $convertedMarks = array_fill(0, 9, 0);
        } else {
            // Generate the chart data
            $gradeConversion = [
                "O" => 10,
                "A+" => 9,
                "A" => 8,
                "B+" => 7,
                "B" => 6,
                "U" => 0
            ];
            $marks6 = array_values($row6);
            $convertedMarks6 = array_map(function ($mark) use ($gradeConversion) {
                return $gradeConversion[$mark];
            }, $marks6);
                
            $chartData6 = json_encode($convertedMarks6);

            



            ?>

            

            <!-- Display the charts -->
                <div class="chart">
                    <div id="chart1"></div>
                </div>
                <div class="chart">
                    <div id="chart2"></div>
                </div>
                <div class="chart">
                    <div id="chart3"></div>
                </div>
                <div class="chart">
                    <div id="chart4"></div>
                </div>
                <div class="chart">
                    <div id="chart5"></div>
                </div>
                <div class="chart">
                    <div id="chart6"></div>
                </div>
                <div class="chart">
                    <div id="chart7"></div>
                </div>
                <div class="chart">
                    <div id="chart8"></div>
                </div>
            </div>

            <script>
                var options1 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData1; ?>
                    }],
                    xaxis: {
                        categories: ["BS8161", "CY8151", "GE8151", "GE8152", "GE8161", "HS8151", "MA8151", "PH8151"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 1'
                    }
                };
                

                var options2 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData2; ?>
                    }],
                    xaxis: {
                        categories: ["AD8251", "AD8252", "AD8261", "BE8255", "GE8261", "GE8291", "HS8251", "MA8252"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 2'
                    }
                };

                var options3 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData3; ?>
                    }],
                    xaxis: {
                        categories: ["AD8301", "AD8302", "AD8311", "AD8351", "CS8383", "CS8392", "HS8381", "MA8351"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 3'
                    }
                };

                var options4 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData4; ?>
                    }],
                    xaxis: {
                        categories: ["AD8001", "AD8401", "AD8402", "AD8403", "AD8411", "AD8412", "AD8413", "HS8461", "MA8391"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 4'
                    }
                };

                var options5 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData5; ?>
                    }],
                    xaxis: {
                        categories: ["AD8501", "AD8502", "AD8511", "AD8512", "AD8551", "AD8552", "CW8691", "OMD552", "NM"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 5'
                    }
                };

                var options6 = {
                    chart: {
                        type: "bar",
                    },
                    series: [{
                        name: 'Marks',
                        data: <?php echo $chartData6; ?>
                    }],
                    xaxis: {
                        categories: ["AD8601", "AD8602", "AD8611", "AD8612", "CS8072", "HS8591", "IT8501", "IT8511", "NM"]
                    },
                    yaxis: {
                        labels: {
                            formatter: function (value) {
                                var marksToGrade = {
                                    0: "U",
                                    6: "B",
                                    7: "B+",
                                    8: "A",
                                    9: "A+",
                                    10: "O"
                                };
                                return marksToGrade[value];
                            }
                        }
                    },
                    title: {
                        text: 'Semester 6'
                    }
                };

               

                

                var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
                chart1.render();

                var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
                chart2.render();

                var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
                chart3.render();

                var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
                chart4.render();

                var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
                chart5.render();

                var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
                chart6.render();

                var chart7 = new ApexCharts(document.querySelector("#chart7"), options);
                chart7.render();

                var chart8 = new ApexCharts(document.querySelector("#chart8"), options);
                chart8.render();

                
                            </script>

            <?php
        }

        // Close the database connection
        mysqli_close($conn);
    }
} 
}}
    }
}
    

    ?>
</body>
</html>