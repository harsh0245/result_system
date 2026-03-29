<?php
session_start();
include 'db.php';

if(!isset($_SESSION['studentID'])) {
    echo "Please login first";
    exit();
}

$id = $_SESSION['studentID'];

$sql = "SELECT * FROM Results WHERE StudentID='$id'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>".$row['Name']."</h2>";
        echo "Semester: ".$row['Semester']."<br>";
        echo "Subject1: ".$row['Subject1']."<br>";
        echo "Subject2: ".$row['Subject2']."<br>";
        echo "Subject3: ".$row['Subject3']."<br>";
        echo "Total: ".$row['TotalMarks']."<br>";
        echo "Percentage: ".$row['Percentage']."<br>";
    }
} else {
    echo "No result found!";
}
?>