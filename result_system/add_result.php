<?php
include 'db.php';

if(isset($_POST['submit'])){

    $id = $_POST['studentID'];
    $name = $_POST['name'];
    $sem = $_POST['semester'];

    $s1 = $_POST['subject1'];
    $s2 = $_POST['subject2'];
    $s3 = $_POST['subject3'];

    $total = $s1 + $s2 + $s3;
    $percentage = $total / 3;

    $sql = "INSERT INTO Results 
    (StudentID, Name, Semester, Subject1, Subject2, Subject3, TotalMarks, Percentage, Class)
    VALUES ('$id','$name','$sem',$s1,$s2,$s3,$total,$percentage,'First')";

    if($conn->query($sql)){
        echo "Record Added Successfully!";
    } else {
        echo "Error!";
    }
}
?>

<form method="post">
    <h2>Add Student Result</h2>

    Student ID: <input type="text" name="studentID"><br><br>
    Name: <input type="text" name="name"><br><br>
    Semester: <input type="text" name="semester"><br><br>

    Subject1: <input type="number" name="subject1"><br><br>
    Subject2: <input type="number" name="subject2"><br><br>
    Subject3: <input type="number" name="subject3"><br><br>

    <button name="submit">Add Result</button>
</form>