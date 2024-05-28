<!doctype html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #c39d72 !important;
            color: white;
            height: 85px !important;
        }

        .navbar-brand {
            font-size: 35px;
            margin-left: 30px;
        }

        .image {
            margin-left: 0px !important;
            margin-right: 0px !important;
            width: 100%;
            height: 225px;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: justify;
        }

        .footer {
            background-color: grey;
            color: #fff;
            padding: 20px 0;
        }

        .social-icons {
            list-style: none;
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons li:last-child {
            margin-right: 0;
        }

        .social-icons a {
            color: #343a40;
            font-size: 20px;
        }

        .contact {
            padding: 2em 0;
        }

        .contact-info h3.c-text {
            font-size: 31px;
            margin: 0;
            font-weight: 100;
            padding-bottom: .5em;
            text-align: left;
            color: #2793FD;
        }

        .contact-grids {
            margin-top: 3em;
            display: flex;
            justify-content: center;
        }

        .contact-grid-left h3 {
            font-size: 23px;
            margin: 0 0 1em 0;
            color: #868686;
            padding-bottom: .5em;
            border-bottom: 2px solid #868686;
        }

        .col-md-4.contact-grid-left {
            padding-left: 0px;
            padding-right: 25px;
        }

        .col-md-4.contact-grid-right {
            padding-right: 0px;
            padding-left: 25px;
        }

        .contact-grid-left p {
            font-size: 14px;
            margin: 0.5em 0;
            line-height: 1.8em;
        }

        .contact-grid-middle h3 {
            font-size: 23px;
            margin: 0 0 1em 0;
            color: #868686;
            padding-bottom: .5em;
            border-bottom: 2px solid #868686;
        }

        .contact-grid-right h3 {
            font-size: 23px;
            margin: 0 0 1em 0;
            color: #868686;
            padding-bottom: .5em;
            border-bottom: 2px solid #868686;
        }

        .contact-info {
            margin-top: 5em;
        }
    </style>
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">UTTHAAN</a>
    </nav>

    <div class="position-relative">
        <img src="images/pencil.jpg" class="image" alt="pencil image" />
    </div>

    <!-- contact -->
    <div class="contact">
        <!-- container -->
        <div class="container">
            <div class="contact-info">
                <h3 class="c-text">Feel free to Contact with us!!!</h3>
            </div>

            <div class="contact-grids">
                <div class="col-md-4 contact-grid-left">
                    <h3>Address :</h3>
                    <p>University Road, Ganpati Nagar, Udaipur, <br> Rajasthan 313001</p>
                </div>
                <div class="col-md-4 contact-grid-middle">
                    <h3>Phones :</h3>
                    <p>+919376880580</p>
                </div>
                <div class="col-md-4 contact-grid-right">
                    <h3>E-mail :</h3>
                    <p>utthaaan@gmail.com </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="color: white">
                        &copy; 2024 Student Management System. All rights reserved.
                    </p>
                </div>
                <div class="col">
                    <ul class="social-icons" style="text-align: right;">
                        <li>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>