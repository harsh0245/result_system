<?php
include 'db.php';

$sql = "SELECT * FROM results";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo $row['Name'] . " - " . $row['TotalMarks'] . "<br>";
}
?>