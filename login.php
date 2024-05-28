<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        html, body {
            height: 100%;
        }

        body {
            background-color: #ECF0F4;
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 30px;
            margin: auto;
            color: #4070f4;
            border: 4px solid #4070f4;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
    <div class="form-signin bg-light">
        <form action="login_check.php" method="POST">
            
            <img class="mb-4" src="images/utthaan.jpg" alt="" width="100" />
            <p>
                <h3 class="h3 mb-3 fw-normal">Login To Continue!</h3>
                <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                ?>
            </p>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username"/>
                <label for="floatingInput">Username</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"/>
                <label for="floatingPassword">Password</label>
            </div>
            <br>
            <button class="w-100 btn btn-lg btn-dark" type="submit">LOGIN</button>
            <br>
            <button style="width:100%; margin-top: 20px;"><a href="index.php"
                    class="btn btn-block btn-facebook auth-form-btn">BACK HOME</a></button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>