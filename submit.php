<?php
include 'db_conn.php';
if ((isset($_POST['submit']))) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $assess_name = validate($_POST['assess_name']);
    $date = validate($_POST['date']);
    $subject_id = validate($_POST['subject_id']);
    $assess_type = validate($_POST['assess_type']);


    // echo $assess_name .'<br>'. date("Y-m-d", strtotime($date)) .'<br>'. $subject_id .'<br>'. $assess_type;

    $sql = "INSERT INTO subject_assessment (assessment_name, date, subject_id, assessment_type)
    VALUES ('$assess_name', '$date', '$subject_id', '$assess_type')";

    $result = mysqli_query($conn, $sql);
    header('Location: index.html');
} 
?>