<!doctype html>
<html class="no-js" lang="en">


<head>
    <?php require('includes/general_styles.php'); ?>
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience. Thanks</p>
<![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper home-2">
        <!-- HEADER SECTION -->
        <?php require ('includes/header.php');?>
        <!-- END OF HEADER -->
        <style type="text/css">
            .header {
                color: #5f99f4;
            }

        </style>


        <!-- content-wraper start -->
        <div class="content-wraper login-register-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="customer-login-register">
                            <h3>Login</h3>
                            <p>Continue from where you left off...</p>
                            <div class="login-Register-info">
                                <form action="#">
                                    <p class="coupon-input form-row-first">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="text" name="email">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password" name="password">
                                    </p>
                                    <div class="clear"></div>
                                    <p>
                                        <button value="Login" name="login" class="button-login" type="submit">Login</button>
                                        <label><input type="checkbox" value="1"><span>Remember me</span></label>
                                        <a href="#" class="lost-password">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <div class="customer-login-register">
                            <h3>Register</h3>
                            <p>Create an account and have the Katargeo Experience!</p>
                            <div class="login-Register-info">
                                <form action="#">
                                    <p class="coupon-input form-row-first">
                                        <label>Full Name<span class="required">*</span></label>
                                        <input type="text" name="name">
                                    </p>
                                    <p class="coupon-input form-row-first">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="text" name="email">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password" name="password">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Confirm Password <span class="required">*</span></label>
                                        <input type="password" name="password">
                                    </p>
                                    <div class="clear"></div>
                                    <p>
                                        <button class="button-login" type="submit">Register</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->


        <!-- FOOTER SECTION -->
        <?php require ('includes/footer.php'); ?>
        <!-- END OF FOOTER -->


        <?php require ('includes/general_scripts.php');?>

</body>



</html>
