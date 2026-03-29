<?php
include 'db.php';

if(isset($_POST['upload'])) {

    // File receive ho rahi hai
    $file = $_FILES['pdf']['name'];

    // Demo data (manual)
    $studentID = "101";
    $name = "Harsh";
    $semester = "5";

    $s1 = 80;
    $s2 = 75;
    $s3 = 85;

    // Calculation
    $total = $s1 + $s2 + $s3;
    $percentage = $total / 3;

    // Query
    $sql = "INSERT INTO Results 
    (StudentID, Name, Semester, Subject1, Subject2, Subject3, TotalMarks, Percentage, Class)
    VALUES ('$studentID','$name','$semester',$s1,$s2,$s3,$total,$percentage,'First')";

    // Execute
    $conn->query($sql);

    echo "Data Inserted Successfully!";
}
?>

<form method="post" enctype="multipart/form-data">
    Upload PDF: <input type="file" name="pdf">
    <button name="upload">Upload</button>
</form>