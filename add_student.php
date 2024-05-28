<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$passw = "";
$database = "sms-project";

$data = mysqli_connect($host, $user, $passw, $database);

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_gender = $_POST['gender'];
    $user_dob = $_POST['dob'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_fname = $_POST['fname'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM user WHERE username = '$username'";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        echo "<script type='text/javascript'>
        alert('Username Already Exist. Try Another One');
        </script>";
    } else {

        $sql = "INSERT INTO user (username,email,phone,usertype,password,gender,dob,fathername) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password','$user_gender','$user_dob','$user_fname')";

        $result = mysqli_query($data, $sql);

        if ($result) {
            echo "<script type='text/javascript'>
                alert('Add Student Successfully');
                </script>";
        } else {
            echo "Upload Failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Student</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        form {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        input {
            margin-bottom: 10px;
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <?php
    include 'admin_css.php';
    ?>
</head>

<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <main class="main">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name"required><br>
                <select name="gender" class="form-control" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input style="margin-top:10px;" type="date" id="date" name="dob" required>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="number" name="phone" placeholder="Phone" required><br>
                <input type="text" name="fname" placeholder="Father's Name" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit" name="add_student">ADD Student</button>
            </div>
        </form>
    </main>
</body>

</html>