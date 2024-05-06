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
$subject_code = $_POST['subject_code'];

// Query to fetch grade from the database
$sql = "SELECT $subject_code FROM overall WHERE Regno = '$register_number'";

$result = mysqli_query($conn, $sql);


if (!$result) {
    $grade="Invalid subject Code";

} else {
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        // $grade=$result;
        while ($row = mysqli_fetch_assoc($result)) {
            $grade = $row[$subject_code];
            
        }
    } else {
        $grade = "";
    }
}




$conn->close();



// Return the grade result as JSON
echo json_encode($grade);
?>