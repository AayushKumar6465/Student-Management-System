<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$database = "sms-project";

$data = mysqli_connect($host, $user, $password, $database);
$sql = "SELECT * FROM user WHERE usertype='student'";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View All Students</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 50%;
            margin-top: 100px;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .table_th {
            border: 2px solid black;
            font-size: 18px;
            text-align: center;
        }

        .table_td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
    <?php
    include 'student_css.php';
    ?>
</head>

<body>
    <?php
    include 'student_sidebar.php';
    ?>
    <main class="main">
        <div class="table-responsive-sm">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="table_th">Id</th>
                        <th class="table_th">Name</th>
                        <th class="table_th">Gender</th>
                        <th class="table_th">Dob</th>
                        <th class="table_th">Father Name</th>
                        <th class="table_th">Email</th>
                        <th class="table_th">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sno = 1;
                    while ($info = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="table_td"><?php echo $sno++; ?></td>
                            <td class="table_td">
                                <?php echo "{$info['username']}"; ?>
                            </td>
                            <td class="table_td">
                                <?php echo "{$info['gender']}"; ?>
                            </td>
                            <td class="table_td">
                                <?php echo "{$info['dob']}"; ?>
                            </td>
                            <td class="table_td">
                                <?php echo "{$info['fathername']}"; ?>
                            </td>
                            <td class="table_td">
                                <?php echo "{$info['email']}"; ?>
                            </td>
                            <td class="table_td">
                                <?php echo "{$info['phone']}"; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>