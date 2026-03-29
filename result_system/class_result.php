<?php
ob_start(); // buffer start (IMPORTANT)

include 'db.php';

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=results.csv");

$sql = "SELECT * FROM Results";
$result = $conn->query($sql);

echo "StudentID,Name,Semester,Subject1,Subject2,Subject3,TotalMarks,Percentage\n";

while($row = $result->fetch_assoc()) {
    echo $row['StudentID'].",".
         $row['Name'].",".
         $row['Semester'].",".
         $row['Subject1'].",".
         $row['Subject2'].",".
         $row['Subject3'].",".
         $row['TotalMarks'].",".
         $row['Percentage']."\n";
}

ob_end_flush(); // buffer end
?>