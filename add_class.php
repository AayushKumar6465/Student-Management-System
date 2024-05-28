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

if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $csection = $_POST['section'];

    $sql = "INSERT INTO tblclass (classname,section) VALUES ('$cname','$csection')";
    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "<script type='text/javascript'>
            alert('Class has been added');
            </script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Class</title>
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
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="cname" placeholder="Class Name" class="form-control" required='true'>
            </div>
            <br>
            <div class="form-group">
                <select name="section" class="form-control" required='true'>
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
            </div>
            <br>
            <button type="submit" name="submit">Add Class</button>
        </form>
    </main>
</body>

</html>