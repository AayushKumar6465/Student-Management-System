<?php
    error_reporting(0);
    session_start();

    $host = "localhost";    
    $username = "root";
    $password = "";
    $database = "sms-project";

    $data = mysqli_connect($host, $username, $password, $database);

    if ($data === false) 
    {
        die("Connection Error");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "select * from user where username='".$name."' AND password='".$pass."' ";

        $result = mysqli_query($data,$sql);

        $row = mysqli_fetch_array($result);
        
        if($row["usertype"] == "student")
        {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = $student;
            header("location:student_dashboard.php");
        }
        elseif($row["usertype"] == "admin")
        {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = $admin;
            header("location:dashboard.php");
        }
        else
        {
            $message = "Username Or Password Do Not Match";
            $_SESSION['loginMessage'] = $message;
            header("location:login.php");
        }
    }
?>