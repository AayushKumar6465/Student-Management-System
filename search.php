<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sms-project';

try {
    $data = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Student</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .table {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Search Student</h3>
                <form method="post">
                    <div class="form-group">
                        <input id="searchdata" type="text" name="searchdata" required="true" class="form-control"
                            placeholder="Enter Student ID">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="search">Search</button>
                </form>
                <div class="result mt-4">
                    <?php
                    if (isset($_POST['search'])) {
                        $sdata = $_POST['searchdata'];
                        
                        if ((int) $sdata == 1) {
                            $sql = "SELECT `username`, email, phone, `fathername`, dob, gender FROM `user` WHERE id = '1'";
                        } else {
                            $sql = "SELECT `username`, email, phone, `fathername`, dob, gender FROM `user` WHERE id = $sdata";
                        }

                        $query = $data->prepare($sql);
                        $query->execute();
                        $result = $query->fetch(PDO::FETCH_ASSOC);

                        if ($result) {
                            echo "<h5 >Result against \"$sdata\" keyword </h5>";
                            echo "<div class='table-responsive border rounded p-1'>";
                            echo "<table class='table'>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Father Name</th>
                                                        <th>DOB</th>
                                                        <th>Gender</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{$result['username']}</td>
                                                        <td>{$result['email']}</td>
                                                        <td>{$result['phone']}</td>
                                                        <td>{$result['fathername']}</td>
                                                        <td>{$result['dob']}</td>
                                                        <td>{$result['gender']}</td>
                                                    </tr>
                                                </tbody>
                                              </table>";
                            echo "</div>";
                        } else {
                            echo "No results found";
                        }
                    }
                    ?>
                </div>
                <!-- Back button -->
                <div class="text-center mt-3">
                    <a href="search.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>