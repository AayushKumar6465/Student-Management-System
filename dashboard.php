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
    <title>Admin Dashboard</title>
    <?php
    include 'admin_css.php';
    ?>
    <link rel="stylesheet" href="dashboardAdmin.css">
    <!-- Simple-Line-Icon CSS-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" />
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    include 'admin_sidebar.php';
    ?>
    <main class="main">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-sm-flex align-items-baseline report-summary-header">
                                            <h4 class="font-weight-semibold">Report Summary</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="row report-inner-cards-wrapper">

                                    <div class=" col-md -6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <?php
                                            $sql1 = "SELECT * from  tblclass";
                                            $query1 = $data->prepare($sql1);
                                            $query1->execute();
                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                            $totclass = $query1->rowCount();
                                            ?>
                                            <span class="report-title">
                                                <h5>Total Class</h5>
                                            </span>
                                            <h5><?php echo htmlentities($totclass); ?></h5>
                                            <a href="manage_class.php"
                                                style="text-decoration:none; color: aquared !important;"><span
                                                    class="report-count">View Classes</span></a>
                                        </div>
                                        <div class="inner-card-icon bg-success">
                                            <i class="icon-rocket"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <?php
                                            $sql1 = "SELECT * from  user WHERE usertype='student'";
                                            $query1 = $data->prepare($sql1);
                                            $query1->execute();
                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                            $totclass = $query1->rowCount();
                                            ?>
                                            <span class="report-title">
                                                <h5>Total Students</h5>
                                            </span>
                                            <h5><?php echo htmlentities($totclass); ?></h5>
                                            <a href="view_student.php" style="text-decoration:none"><span
                                                    class="report-count"> View Students</span></a>
                                        </div>
                                        <div class="inner-card-icon bg-danger">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <?php
                                            $sql1 = "SELECT * from  tblnotic";
                                            $query1 = $data->prepare($sql1);
                                            $query1->execute();
                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                            $totclass = $query1->rowCount();
                                            ?>
                                            <span class="report-title">
                                                <h5>Total Announcement</h5>
                                            </span>
                                            <h5><?php echo htmlentities($totclass); ?></h5>
                                            <a href="manage_announcement.php" style="text-decoration:none"><span
                                                    class="report-count"> View Announcement</span></a>
                                        </div>
                                        <div class="inner-card-icon bg-warning">
                                            <i class="icon-doc"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <?php
                                            $sql1 = "SELECT * from  tblpublicnotice";
                                            $query1 = $data->prepare($sql1);
                                            $query1->execute();
                                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                            $totclass = $query1->rowCount();
                                            ?>
                                            <span class="report-title">
                                                <h5>Total Public Notices</h5>
                                            </span>
                                            <h5><?php echo htmlentities($totclass); ?></h5>
                                            <a href="manage_notice.php" style="text-decoration:none"><span
                                                    class="report-count"> View PublicNotices</span></a>
                                        </div>
                                        <div class="inner-card-icon bg-primary">
                                            <i class="icon-doc"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once ('footer.php'); ?>
        </div>
    </main>
</body>

</html>