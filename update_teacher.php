<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$pass = "";
$database = "sms-project";

$data = mysqli_connect($host, $user, $pass, $database);

$id = $_GET['teacher_id'];
$sql = "SELECT * FROM teacher WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $t_name = $_POST['name'];
    $t_email = $_POST['email'];
    $t_phone = $_POST['phone'];
    $t_subject = $_POST['subject'];
    $t_occupation = $_POST['occupation'];

    $query = "UPDATE teacher SET name='$t_name', email='$t_email', phone='$t_phone', subject='$t_subject', occupation='$t_occupation' WHERE id='$id'";
    $result2 = mysqli_query($data, $query);

    if ($result2) {
        header("location:manage_teacher.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Name" value="<?php echo "{$info['name']}"; ?>" required><br>
            <input type="email" name="email" placeholder="Email" value="<?php echo "{$info['email']}"; ?>" required><br>
            <input type="number" name="phone" placeholder="Phone" value="<?php echo "{$info['phone']}"; ?>" required><br>
            <input type="text" name="subject" placeholder="Subject" value="<?php echo "{$info['subject']}"; ?>" required><br>
            <input type="text" name="occupation" placeholder="Occupation" value="<?php echo "{$info['occupation']}"; ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>
    </main>
</body>

</html>