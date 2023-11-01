<?php
require_once("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Blood Bank</title>
        <meta name="description" content="Blood Bank" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <!-- DataTables -->
        <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
        <!--        custom style-->
        <link rel="stylesheet" type="text/css" href="css/custom_style.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--banner-->
        <section id="banner" class="banner">
            <div class="bg-color">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="col-md-12">
                            <!-- navbar header -->
                            <?php include_once('include/header.php') ?>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <div class="banner-logo text-center">
                                <img src="img/logo-01.png" class="img-responsive" />
                            </div>
                            <div class="banner-text text-center">
                                <h1 class="white">
                                    Every <span style="font-weight: 300; font-style:italic; ">BLOOD</span> Donor Is A
                                    <span style="font-weight: 300; font-style:italic;">LIFE</span> Saver
                                </h1>
                                <p>
                                    You are not important because of how long you live, <br />
                                    you are important because of how effective you live.
                                </p>
                                <a href="donate.php" class="btn btn-donor">Donate Blood</a>
                                <a href="request.php" class="btn btn-acceptr">Blood Request</a>
                            </div>
                            <div class="overlay-detail text-center">
                                <a href="#service"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ banner-->

        <!--service-->
        <section id="service" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="ser-title">Our Service</h2>
                        <hr class="botm-line" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            cillum.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-stethoscope"></i>
                            </div>
                            <div class="icon-info">
                                <h4>24 Hour Support</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Emergency Services</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Medical Counseling</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="icon-info">
                                <h4>We Have Blood Donors.</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ service-->
<!-- Start Gallery -->
        <section  >
            <div class="container">
                <h2>
                    Blood Donation And Request Process
                    <hr class="botm-line" />
                    <img src="img/process.jpg" alt="" class="img-responsive" style="width: 1080px;"/>
                </h2>

               
            </div>
        </section>

        <!-- Start Gallery -->
        <section>
            <div class="container">
                <h2>
                    OUR BEST CAMPAIGN GALLERY
                    <hr class="botm-line" />
                </h2>

                <div class="gallery">
                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://cdn.pixabay.com/photo/2020/04/17/08/11/blood-5053770_960_720.jpg"
                            alt="Blood Donation Compaign"
                            />
                    </div>

                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://media.istockphoto.com/photos/young-male-donor-donating-blood-during-coronavirus-pandemic-picture-id1307735181?b=1&k=20&m=1307735181&s=170667a&w=0&h=yH22lIj2CytJiLH9jkoNnQ8w7Ao5XZVjkCAMy_0rU78="
                            alt="Blood Donation Compaign"
                            />
                    </div>

                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://cdn.pixabay.com/photo/2017/08/07/13/05/blood-donation-2603649_960_720.jpg"
                            alt="Blood Donation Compaign"
                            />
                    </div>

                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://images.pond5.com/nurse-working-blood-donor-hospital-footage-073544005_iconl.jpeg"
                            alt="Blood Donation Compaign"
                            />
                    </div>

                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://media.gettyimages.com/photos/blood-bank-picture-id71085855?s=612x612"
                            alt="Blood Donation Compaign"
                            />
                    </div>

                    <div class="gallery-item">
                        <img
                            class="gallery-image"
                            src="https://i0.wp.com/emcrit.org/wp-content/uploads/2017/06/US_Navy_090218-N-6326B-074_The_Naval_Medical_Center_San_Diego_NMCSD_Blood_Bank_confirms_the_blood_type_of_each_blood_product_donated_to_ensure_patients_receive_the_correct_specimen.jpg"
                            alt="Blood Donation Compaign"
                            />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery -->

        <!--about-->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="section-title">
                            <h2 class="head-title lg-line">
                                Who <br />We Are?
                            </h2>
                            <hr class="botm-line" />
                            <p class="sec-para">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua..
                            </p>
                            <a href="#" style="color: #0cb8b6; padding-top: 10px"
                               >Know more..</a
                            >
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div style="visibility: visible" class="col-sm-9 more-features-box">
                            <div class="more-features-box-text">
                                <div class="more-features-box-text-icon">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                                <div class="more-features-box-text-description">
                                    <h3>Our Mission:</h3>
                                    <p>
                                        Our mission is to save precious lives through timely delivery of Blood 
                                        for all the needy people regardless of their affiliation and to provide 
                                        safe distribution of blood to the individuals in need.
                                    </p>
                                </div>
                            </div>
                            <div class="more-features-box-text">
                                <div class="more-features-box-text-icon">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                                <div class="more-features-box-text-description">
                                    <h3>Our vision:</h3>
                                    <p>
                                        To have a reliable network of blood donors who are willing to donate blood 
                                        as and when needed.To have a database and platform for both donors and 
                                        blood seekers where they can easily access and get   blood.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ about-->


        <!--  our heros-->
        <section class="tbl-section section-padding">
            <div class="row">
                <div class="col-md-1"></div>
                 <div class="col-md-10">
                    <div class="box">
                        <div class="box-header">
                            <h2 >All Time Heros</h2>
                            <hr class="botm-line" />
                        </div>
                        <!-- /.box-header -->
                       
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Blood Group</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Save Life Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                            $query= "SELECT * FROM `donor` WHERE `save_life_date` != '0'";
                                            $result= mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>
                                        <td><?php echo $row ['name']; ?></td>
                                        <td><?php echo $row ['gender']; ?></td>
                                        <td><?php echo $row ['blood_group']; ?></td>
                                        <td><?php echo $row ['email']; ?></td>
                                        <td><?php echo $row ['city']; ?></td>
                                        <td><?php echo $row ['save_life_date']; ?></td>
                                        
                                        
                                    </tr>
                                   
                                    <?php } ?> 
                                </tbody>
                                <tfoot>
<!--                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>-->
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-1"></div>

        </section>




<!--        testimonial
        <section id="testimonial" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="ser-title">see what patients are saying?</h2>
                        <hr class="botm-line" />
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                             Paragraph 
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="testi-info">
                            
                            <h3>Ali<span>Waqar</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                             Paragraph 
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="testi-info">
                           
                            <h3>Saqib<span>Butt</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="testi-details">
                             Paragraph 
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="testi-info">
                             User Image 
                            
                            <h3>Wajid<span>Ali</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        / testimonial-->

        <!--contact-->
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="ser-title">Contact us</h2>
                        <hr class="botm-line" />
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3>Contact Info</h3>
                        <div class="space"></div>
                        <p>
                            <i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>CS Department
                            UET Mardan<br />
                            Kpk, Pakistan
                        </p>
                        <div class="space"></div>
                        <p>
                            <i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>
                            <a href="mailto:info@bloodbank.com" title="Send me an email">info@bloodbank.com</a>
                        </p>

                        <div class="space"></div>
                        <p>
                            <i class="fa fa-phone fa-fw pull-left fa-2x"></i>
                            <a href="tel:+923109762055" title="Give me a call">+92 310 976 2055</a>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8 marb20">
                        <div class="contact-info">
                            <h3 class="cnt-ttl">Having Any Query! Or Request For Blood</h3>
                            <div class="space"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text"
                                           name="name"
                                           class="form-control br-radius-zero"
                                           id="name"
                                           placeholder="Your Name"
                                           data-rule="minlen:4"
                                           data-msg="Please enter at least 4 chars"
                                           />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control br-radius-zero"
                                        name="email"
                                        id="email"
                                        placeholder="Your Email"
                                        data-rule="email"
                                        data-msg="Please enter a valid email"
                                        />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control br-radius-zero"
                                        name="subject"
                                        id="subject"
                                        placeholder="Subject"
                                        data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject"
                                        />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea
                                        class="form-control br-radius-zero"
                                        name="message"
                                        rows="5"
                                        data-rule="required"
                                        data-msg="Please write something for us"
                                        placeholder="Message"
                                        ></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div class="form-action">
                                    <button type="submit" class="btn btn-form">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ contact-->

        <!--footer-->
        <?php include_once('include/footer.php') ?>
        <!--/ footer-->




        <!-- jQuery 3 -->
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="assets/plugins/iCheck/icheck.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- DataTables -->
        <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="contactform/contactform.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
       
        <script>
            $(function () {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
            })
        </script>
    </body>
</html>