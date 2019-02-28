<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "countries";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, city FROM countries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["city"]. "<br>";

        $countries[] = $row;
    }
} else {
    echo "0 results";
}

echo json_encode($countries);

$conn->close();
?>