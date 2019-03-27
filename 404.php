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
                text-align: center;
            }

            .err {
                border: 1px solid black;
            }

        </style>


        <!-- error404 start -->
        <div class="error404">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-error-wrapper">
                            <h1>404</h1>
                            <h2>PAGE NOT BE FOUND</h2>
                            <p class="home-link">Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                            <form action="#" class="error-form">
                                <div class="error-form-input">
                                    <input type="text" placeholder="Search..." class="error-input-text">
                                    <button type="submit" class="error-s-button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            <a href="/" class="home-bacck-button">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error404 end -->





        <!-- FOOTER SECTION -->
        <?php require ('includes/footer.php'); ?>
        <!-- END OF FOOTER -->


        <?php require ('includes/general_scripts.php');?>

</body>



</html>
