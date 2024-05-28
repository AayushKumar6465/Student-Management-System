<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <?php
  include 'student_css.php';
  ?>
  <style>
    main-panel {
      -webkit-transition: width 0.25s ease, margin 0.25s ease;
      transition: width 0.25s ease, margin 0.25s ease;
      width: calc(100% - 240px);
      min-height: calc(100vh - 70px);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    @media (max-width: 991px) {
      .main-panel {
        margin-left: 0;
        width: 100%;
      }
    }

    .content-wrapper {
      background: #ecf0f4;
      padding: 2.75rem 1.5rem 0;
      width: 100%;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }
  </style>
</head>

<body>
  <?php
  include 'student_sidebar.php';
  ?>
  <main class="main">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row purchace-popup">
          <div class="col-12 stretch-card grid-margin">
            <div class="card card-secondary">
              <span class="card-body d-lg-flex align-items-center">
                <p class="mb-lg-0">Announcement from the school kindly check!</p>
                <a href="view_announcement.php" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">View
                  Announcement</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>