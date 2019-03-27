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
        <div class="content-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="contact-form">
                            <div class="contact-title">
                                <h3 class="header">Any issues? Want us to give you a call?</h3>
                                <p>Request a callback here</p>
                            </div>
                            <form id="contact-form" action="http://demo.devitems.com/palora-v1/email.php" method="POST">
                                <div class="contact-page-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="name" type="text" placeholder="First Name *" id="first-name">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="lastname" type="text" placeholder="Last Name *" id="last-name">
                                        </div>
                                        <div class="contact-inner">
                                            <input type="text" placeholder="Email *" id="email" name="email">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="subject" type="text" placeholder="Subject *" id="subject">
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message" type="text" placeholder="Phone Number & Message *"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn">
                                        <button class="submit-btn" type="submit">Send Email</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <div class="contact-infor">
                            <div class="contact-title">
                                <h3 class="header">CONTACT US</h3>
                            </div>
                            <div class="contact-dec">
                                <p>You could also visit us at our physical location, send a message or give us a call</p>
                            </div>
                            <div class="contact-address">
                                <ul>
                                    <li><i class="fa fa-fax"> </i> Address : Address here Accra, Ghana</li>
                                    <li><i class="fa fa-phone">&nbsp;</i> support@katergioenterprise.com</li>
                                    <li><i class="fa fa-envelope-o">&nbsp;</i> 0(1234) 567 890</li>
                                </ul>
                            </div>
                            <div class="work-hours">
                                <h3><strong>Working hours</strong></h3>
                                <p><strong>Monday &ndash; Saturday</strong>: &nbsp;08AM &ndash; 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper start -->






        <!-- FOOTER SECTION -->
        <?php require ('includes/footer.php'); ?>
        <!-- END OF FOOTER -->


        <?php require ('includes/general_scripts.php');?>

</body>



</html>
