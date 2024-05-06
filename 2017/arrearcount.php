<?php
// Assuming you have a database connection established already
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve register number and subject code from form
$register_number = $_POST['register_number'];

// Query to fetch grade from the database
// $sql = "SELECT $subject_code FROM sem6 WHERE Regno = '$register_number'";

// $result = mysqli_query($conn, $sql);

$sql="SELECT SUM(CASE WHEN AD8601 = 'U' THEN 1 ELSE 0 END +
CASE WHEN AD8602 = 'U' THEN 1 ELSE 0 END +
CASE WHEN AD8611 = 'U' THEN 1 ELSE 0 END +
CASE WHEN AD8612 = 'U' THEN 1 ELSE 0 END +
CASE WHEN HS8591 = 'U' THEN 1 ELSE 0 END +
CASE WHEN IT8511 = 'U' THEN 1 ELSE 0 END +
CASE WHEN IT8501 = 'U' THEN 1 ELSE 0 END +
CASE WHEN NM = 'U' THEN 1 ELSE 0 END +
CASE WHEN CS8072 = 'U' THEN 1 ELSE 0 END) as arrear
FROM sem6
WHERE Regno = '$register_number'";

$result = mysqli_query($conn, $sql);



if (!$result) {
    $grade="Invalid Register Number";

} else {
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        // $grade=$result;
        while ($row = mysqli_fetch_assoc($result)) {
            $grade = $row['arrear'];
            
        }
    } else {
        $grade = "regno";
    }
}




$conn->close();



// Return the grade result as JSON
echo json_encode($grade);
?>