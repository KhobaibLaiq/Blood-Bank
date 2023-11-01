<?php
require_once("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Error 404</title>
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
        <style>
            .error{
                color: #e74c3c; 
                font-size: 20em;
                font-weight: 700;
            }
            a{
                padding: 20px 0 0 0;
            }
            .head-para{
                padding: 15px 0;

            }

            .container {
                margin-bottom: 30px; 
            }
        </style>
    </head>



    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <!--banner-->
        <section class="banner" style="margin-bottom: 70px !important;">
            <div class="row" >
                <nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#d81e05; padding: 0px; " >
                    <div class="container">
                        <div class="col-md-12">
                            <!-- navbar header -->
<?php include_once('include/header.php') ?>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section id="bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 offset-md-3">


                        <h1 class="text-center error">404</h1>
                        <div class="head-para">
                            <h3 class="text-center">OOPS, SORRY WE CAN'T FIND THAT PAGE!</h3>
                            <p class="text-center">Either something went wrong or that page dosent exist anymore.</p>
                        </div>	



                    </div>
                                        <div class="col-md-3"></div>

                </div>
            </div>
        </section>
        <section style="margin-bottom: 0px !important">
<?php
//include footer file
include ('include/footer.php');
?>  
        </section>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>