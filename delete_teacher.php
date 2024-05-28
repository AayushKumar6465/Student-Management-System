<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sms-project";  
    
    $data = mysqli_connect($host, $user, $password, $database);
    
    if($_GET['teacher_id'])
    {
        $teacher_id = $_GET['teacher_id'];
        $sql = "DELETE FROM teacher WHERE id = '$teacher_id'";
        $result = mysqli_query($data, $sql);

        if($result)
        {
            $_SESSION['message'] = 'Delete teacher is successfully';
            header("location:manage_teacher.php");
        }
    }
?>