<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sms-project";  
    
    $data = mysqli_connect($host, $user, $password, $database);
    
    if($_GET['class_id'])
    {
        $c_id = $_GET['class_id'];
        $sql = "DELETE FROM tblclass WHERE id = '$c_id'";
        $result = mysqli_query($data, $sql);

        if($result)
        {
            $_SESSION['message'] = 'Delete class is successfully';
            header("location:manage_class.php");
        }
    }
?>