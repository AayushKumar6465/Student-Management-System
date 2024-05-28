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

if (isset($_POST['add_teacher'])) {
    $t_name = $_POST['name'];
    $t_email = $_POST['email'];
    $t_phone = $_POST['phone'];
    $t_subject = $_POST['subject'];
    $t_occupation = $_POST['occupation'];

    $check = "SELECT * FROM teacher WHERE name = '$t_name'";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        echo "<script type='text/javascript'>
        alert('Username Already Exist. Try Another One');
        </script>";
    } else {

        $sql = "INSERT INTO teacher (name,email,phone,subject,occupation) VALUES ('$t_name','$t_email','$t_phone','$t_subject','$t_occupation')";

        $result = mysqli_query($data, $sql);

        if ($result) {
            echo "<script type='text/javascript'>
                alert('Add Teacher Successfully');
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
    <title>Add Teacher</title>
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
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="number" name="phone" placeholder="Phone" required><br>
            <input type="text" name="subject" placeholder="Subject" required><br>
            <input type="text" name="occupation" placeholder="Occupation" required><br>
            <button type="submit" name="add_teacher">Add Teacher</button>
        </form>
    </main>
</body>

</html>