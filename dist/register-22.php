
<!doctype html>
<html class="no-js" lang="">
    <!-- Mirrored from affixtheme.com/html/xmee/demo/register-22.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 09:24:16 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Create Your Account</title>
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
                    <div class="col-lg-6 col-12 fxt-none-991" style="margin-bottom: 650px;">
                        <div class="fxt-header">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <a href="login-22.php" class="fxt-logo"><img src="img/task.png" alt="Logo"></a>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <h1>Welcome To Task Management System</h1>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-3">
                                <p> Task management is the process of monitoring your project's tasks through their various stages from start to finish. This involves actively making decisions for your tasks to accommodate changes that can occur real-time, with your end goal being the successful completion of your tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 fxt-bg-color">
                        <div class="fxt-content">
                            <div class="fxt-form">
                                <h2>Register</h2>
                                <p>Create an account</p>
                                <form method="POST" action = "view.php">

                                    <div class="form-group">
                                        <label for="Name" class="input-label">Name</label>
                                        <input type="tetx" id="Name" class="form-control" name="username" onkeypress="return (event.charCode > 64 &&
                                                        event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="user Name" onchange="getVals(this, 'fName');" required="required">
                                        <span style="color:red" for="fName" id="iname" class="error_msg"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="input-label">Email-id</label>
                                        <input type="email" id="Email" class="form-control" name="Email-id" placeholder="user Email" onchange="getVals(this, 'email');" required="required">
                                        <span style="color:red" for="name" id="iemail" class="error_msg"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="conatactNo" class="input-label">ContactNo</label>
                                        <input type="tel" id="contact" maxlength="10" class="form-control" name="ContactNO"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"placeholder="user contact" onchange="getVals(this, 'phone');" autocomplete="nope" required="required">
                                        <span style="color:red" for="name" id="iphone" class="error_msg"></span>

                                    </div>

                                    <div class="form-group">
                                        <label for="date" class="input-label">Date of joinging</label>
                                        <input type="date" id="txtDate" class="form-control" name="jdate"  required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="input-label">Password</label>
                                        <input type="password" id="password1"  class="form-control" name="password" placeholder="********" onchange="getVals(this, 'password');"  required="required">

                                    </div>
<!--                                    <div class="form-group">
                                        <label for="password" class="input-label">Conform-password</label>
                                        <input type="password" id="password2"  class="form-control" name="Conform-password" placeholder="********" autocomplete="new-password" required="required">
                                    </div>	
                                    <div id="pass-info" class="clearfix"></div>
                                                                        <div class="form-group">
                                                                            <label for="input-label" class="input-label">Gender</label>
                                                                            <select name="gender" class="form-select form-select-lg form-select-solid" required="required"s> 
                                                                                <option value="gender">select</option>
                                                                                <option value="M">Male</option>
                                                                                <option value="F">Female</option>
                                                                                <option value="O">Others</option>
                                                                            </select>
                                    
                                                                        </div>

                                    <div class="form-group">
                                        <label for="Address" class="input-label">Address</label>
                                        <textarea name="address" class="form-control" rows="3" required="required"></textarea>									
                                    </div>-->
                                    <div class="form-group">
                                        <button type="submit" name="Register" class="fxt-btn-fill">Register</button> 
                                    </div>
                                </form>
                            </div>
                            <div class="fxt-footer">
                                <p>Have an account?<a href="login-22.php" class="switcher-text2 inline-text">Log in</a></p>
                            </div>
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

        <script>
                                            $(function () {
                                                var dtToday = new Date();
                                                var month = dtToday.getMonth();
                                                var day = dtToday.getDate();
                                                var year = dtToday.getFullYear() - 1;
                                                if (month < 10)
                                                    month = '0' + month.toString();
                                                if (day < 10)
                                                    day = '0' + day.toString();
                                                var maxDate = year + '-' + month + '-' + day;
                                                $('#txtDate').attr('max', maxDate);
                                                console.log(year);
                                                console.log(maxDate);
                                            });
        </script>

    </body>


    <!-- Mirrored from affixtheme.com/html/xmee/demo/register-22.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Mar 2022 09:24:16 GMT -->
</html>