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

if (isset($_POST['add_announcement'])) {
    $a_title = $_POST['title'];
    $a_classid = $_POST['classid'];
    $a_message = $_POST['message'];
    
    $sql = "INSERT INTO tblnotic (noticetitle,classid,noticemessage) VALUES ('$a_title','$a_classid','$a_message')";

    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "<script type='text/javascript'>
                alert('Add Announcement Successfully');
                </script>";
    } else {
        echo "Upload Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Announcement</title>
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
                <input type="text" name="title" placeholder="Announcement Title" class="form-control" required='true'>
            </div>
            <br>
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
            </div>
            <br>
            <div class="mb-3">
                <textarea class="form-control" name="message" rows="3" placeholder="Announcement Message"></textarea>
            </div>
            <button type="submit" name="add_announcement">Add Announcement</button>
        </form>
    </main>
</body>

</html>