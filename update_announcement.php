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

$id = $_GET['announcement_id'];
$sql = "SELECT * FROM tblnotic WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $a_title = $_POST['noticetitle'];
    $a_classid = $_POST['classid'];
    $a_message = $_POST['noticemessage'];

    $query = "UPDATE tblnotic SET noticetitle='$a_title',classid='$a_classid', noticemessage='$a_message' WHERE id='$id'";
    $result2 = mysqli_query($data, $query);

    if ($result2) {
        header("location:manage_announcement.php");
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
        <form action="#" method="POST">
            <input type="text" name="noticetitle" placeholder="Announcement Title" value="<?php echo "{$info['noticetitle']}"; ?>" required><br><br>
            <div class="form-group">
                <select name="classid" class="form-control" required='true'>
                    <option value="">Select Class</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div><br>
            <input type="text" name="noticemessage" placeholder="Announcement Message" value="<?php echo "{$info['noticemessage']}"; ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>
    </main>
</body>

</html>