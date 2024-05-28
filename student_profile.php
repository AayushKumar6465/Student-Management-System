<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == 'admin') {
    header("location:login.php");
}

$host = "localhost";
$username = "root";
$pass = "";
$database = "sms-project";

$data = mysqli_connect($host, $username, $pass, $database);

$name = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$name' ";
$result = mysqli_query($data, $sql);
$info = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $s_gender = $_POST['gender'];
    $s_dob = $_POST['dob'];
    $s_fname = $_POST['fname'];
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $s_password = $_POST['password'];

    $query = "UPDATE user SET email='$s_email', phone='$s_phone', password='$s_password', gender='$s_gender', dob='$s_dob', fathername='$s_fname' WHERE username='$name'";

    $result2 = mysqli_query($data, $query);

    if ($result2) {
        header("location:student_profile.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include ("student_css.php");
    ?>
</head>

<body>
    <?php
    include ("student_sidebar.php");
    ?>
    <main class="main">
        <form action="#" method="POST">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div><h3>Students Details</h3></div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                style="margin-bottom: 10px; margin-top: 10px;" placeholder="Name"
                                value="<?php echo "{$info['username']}" ?>" required>
                        </div>

                        <select name="gender" class="form-control" style="margin-bottom: 10px; margin-top: 10px;"
                            required>
                            <option value="<?php echo "{$info['gender']}"; ?>"><?php echo "{$info['gender']}"; ?>
                            </option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                        <input style="width: 100%; padding: 5px;" type="date" id="date" name="dob"
                            value="<?php echo "{$info['dob']}" ?>" required>

                        <div class="form-group">
                            <input type="text" name="fname" class="form-control"
                                style="margin-bottom: 10px; margin-top: 10px;" placeholder="Father Name"
                                value="<?php echo "{$info['fathername']}" ?>" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control"
                                style="margin-bottom: 10px; margin-top: 10px;" placeholder="Email"
                                value="<?php echo "{$info['email']}" ?>" required>
                        </div>

                        <div class="form-group">
                            <input type="number" name="phone" class="form-control"
                                style="margin-bottom: 10px; margin-top: 10px;" placeholder="Phone"
                                value="<?php echo "{$info['phone']}" ?>" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="password" class="form-control"
                                style="margin-bottom: 10px; margin-top: 10px;" placeholder="Password"
                                value="<?php echo "{$info['password']}" ?>">
                        </div><br>

                        <button type="submit" name="submit" class="btn btn-primary">Update</button>

                    </div>
                </div>
            </div>
        </form>
    </main>
</body>

</html>