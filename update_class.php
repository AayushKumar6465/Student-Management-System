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

$id = $_GET['class_id'];
$sql = "SELECT * FROM tblclass WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $c_name = $_POST['classname'];
    $c_section = $_POST['section'];

    $query = "UPDATE tblclass SET classname='$c_name', section='$c_section' WHERE id='$id'";
    $result2 = mysqli_query($data, $query);

    if ($result2) {
        header("location:manage_class.php");
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
            <input type="text" name="classname" placeholder="Classname" value="<?php echo "{$info['classname']}"; ?>"
                required><br>
            <select name="section" placeholder="Section" value="<?php echo "{$info['section']}"; ?>" required>
                <option value="">Choose Section</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
            </select>
            <button type="submit" name="update">Update</button>
        </form>
    </main>
</body>

</html>