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
$sql = "SELECT * FROM tblclass";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Class</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 50%;
            margin-top: 100px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .table_th {
            border: 1px solid black;
            padding: 10px;
            font-size: 17px;
            text-align: center;
        }

        .table_td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
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
        <table>
            <thead>
                <tr>
                    <th class="table_th">Sno</th>
                    <th class="table_th">Class Name</th>
                    <th class="table_th">Section</th>
                    <th class="table_th">Creation Date</th>
                    <th class="table_th">Update</th>
                    <th class="table_th">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno=1;
                while ($info = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td class="table_td">
                            <?php echo $sno++; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "{$info['classname']}"; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "{$info['section']}"; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "{$info['creationdate']}"; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "<a onClick=\"javascript:return confirm('Are you sure to update this');\" class='btn btn-primary' href='update_class.php?class_id={$info['id']}'>Update</a>"; ?>
                        </td>
                        <td class="table_td">
                            <?php
                            echo "<a onClick=\"javascript:return confirm('Are you sure to delete this');\" class='btn btn-danger' href='delete_class.php?class_id={$info['id']}'>Delete</a>";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>