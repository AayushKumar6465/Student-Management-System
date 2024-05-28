<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sms-project";  
    
    $data = mysqli_connect($host, $user, $password, $database);
    
    if($_GET['notice_id'])
    {
        $user_id = $_GET['notice_id'];
        $sql = "DELETE FROM tblpublicnotice WHERE id = '$user_id'";
        $result = mysqli_query($data, $sql);

        if($result)
        {
            $_SESSION['message'] = 'Delete notice is successfully';
            header("location:manage_notice.php");
        }
    }
?>