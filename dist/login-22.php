<?php
session_start();
include_once 'db_Connection.php';

if (isset($_POST['login'])) {
   
    $r = ['role'];
    $email = $_POST['email'];
    $id = ['ID'];
    $name = ['Name'];
//    $login = ['user'];
//    md5($password = $_POST['password']);
    $password = $_POST['password'];

    $add_rec = "SELECT * FROM registration WHERE Email = '" . $email . "' AND password = '" . $password . "'"; // query for the login
    $qryReturn = mysqli_query($conn, $add_rec) or die("Error in login " . mysqli_error($conn));
    while ($row = mysqli_fetch_assoc($qryReturn)) {
        $id = $row["ID"];
        $r = $row["role"];
        $email = $row["Email"];
        $name = $row['Name'];
    }
    
    if (mysqli_num_rows($qryReturn) > 0) { //validate the query
        echo "<center> Login sucessfully</center>";
    } else {
        echo $conn->error;
    }
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['Name'] = $name;
    $_SESSION['user'] = $r;
    if ($r == 'C') {
        $_SESSION['user'] = "CEO";
    } elseif ($r == 'M') {
        $_SESSION['user'] = "Manager";
    } else if ($r == 'E') {
        $_SESSION['user'] = "Employee";
    }

    $login = $_SESSION['user'];
    if ($login == "CEO") {
        header("Location:Admin_Dashboard.php");
    } else if ($login == "Manager") {
        header("Location:Manager-dashboard.php");
    } else if ($login == "Employee") {
        header("Location:Employee_dashboard.php");
    }
}
?>
<!doctype html>
<html class="no-js">


    <!-- Mirrored from affixtheme.com/html/xmee/demo/login-22.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 09:23:58 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="fonts/flaticon.css">
        <!-- Star Animation CSS -->
        <link rel="stylesheet" href="css/star-animation.css">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <div id="preloader" class="preloader">
            <div class='inner'>
                <div class='line1'></div>
                <div class='line2'></div>
                <div class='line3'></div>
            </div>
        </div>
        <section class="fxt-template-animation fxt-template-layout22" data-bg-image="img/figure/2.png">
            <!-- Star Animation Start Here -->
            <div class="star-animation">
                <div id="stars1"></div>
                <div id="stars2"></div>
                <div id="stars3"></div>
                <div id="stars4"></div>
                <div id="stars5"></div>
            </div>
            <!-- Star Animation End Here -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 fxt-none-991" >
                        <div class="fxt-header">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <a href="login-22.php" class="fxt-logo"><img src="img/task.png" alt="Logo"></a>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <h1>Welcome To Task Management System</h1>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-3">
                                <p>Task management is the process of monitoring your project's tasks through their various stages from start to finish. This involves actively making decisions for your tasks to accommodate changes that can occur real-time, with your end goal being the successful completion of your tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 fxt-bg-color">
                        <div class="fxt-content">
                            <div class="fxt-form">
                                <h2>Login</h2>
                                <p>Login into your pages account</p>
                                <form action method="POST">
                                    <div class="form-group">
                                        <label for="email" class="input-label">Email Address</label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" onchange="getVals(this, 'email');" required="required">
                                        <span style="color:red" for="name" id="iemail" class="error_msg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="input-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                    <div class="form-group">
                                        <div class="fxt-checkbox-area">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">Keep me logged in</label>
                                            </div>
                                            <a href="forgot-password-22.php" class="switcher-text">Forgot Password</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="login" class="fxt-btn-fill">Log in</button>
                                    </div>
                                </form>
                            </div>
                            <?php
                            $verify = "SELECT * FROM registration WHERE role = 'C' "; // query for the login
                            $verifyR = mysqli_query($conn, $verify);
                            if (mysqli_num_rows($verifyR) == 0) {
                                ?>
                                <div class="fxt-footer">
                                    <p>Don't have an account?<a href="register-22.php" class="switcher-text2 inline-text">Register</a></p>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- jquery-->
        <script src="js/jquery-3.5.0.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Validator js -->
        <script src="js/validator.min.js"></script>
        <!-- Custom Js -->
        <script src="js/main.js"></script>
        <script src="js/inputvalidation.js"></script>
    </body>


    <!-- Mirrored from affixtheme.com/html/xmee/demo/login-22.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 09:24:04 GMT -->
</html>