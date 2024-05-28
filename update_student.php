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

$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $s_name = $_POST['name'];
    $s_gender = $_POST['gender'];
    $s_dob = $_POST['dob'];
    $s_fname = $_POST['fname'];
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $s_password = $_POST['password'];

    $query = "UPDATE user SET username='$s_name', email='$s_email', phone='$s_phone', password='$s_password', gender='$s_gender', dob='$s_dob', fathername='$s_fname' WHERE id='$id'";

    $result2 = mysqli_query($data, $query);

    if ($result2) {
        header("location:view_student.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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
            <input type="text" name="name" placeholder="Name" value="<?php echo "{$info['username']}"; ?>" required><br>
            <select name="gender" class="form-control" required>
                <option value="<?php echo "{$info['gender']}"; ?>"><?php echo "{$info['gender']}"; ?></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <input style="margin-top:10px;" type="date" id="date" name="dob" value="<?php echo "{$info['dob']}" ?>"
                required>
            <input type="text" name="fname" placeholder="Father Name" value="<?php echo "{$info['fathername']}" ?>"
                required><br>
            <input type="email" name="email" placeholder="Email" value="<?php echo "{$info['email']}"; ?>" required><br>
            <input type="number" name="phone" placeholder="Phone" value="<?php echo "{$info['phone']}"; ?>"
                required><br>
            <input type="password" name="password" placeholder="Password" value="<?php echo "{$info['password']}"; ?>"
                required><br>
            <button type="submit" name="update">Update</button>
        </form>
    </main>
</body>

</html>