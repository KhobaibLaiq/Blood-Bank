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
        <style>

            .form-container{
                background-color: white;
                border: .5px solid #eee;
                border-radius: 5px;
                padding: 20px 10px 20px 30px;
                -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
                -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
                box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
            }
            .form-group{
                text-align: left;
            }
            h1{
                color: #d81e05;

            }
            h3{
                color: #d81e05;
                text-align: center;
                padding: 10px
            }
            h1,h3{
                display: inline-block;
                padding: 10px;
            }
            .red-bar{
                width: 25%;
            }
            .bg{
                background-color: #ffffffb3;
                height: auto;
                text-align: center;
                padding: 50px;
                box-shadow: 2px 2px 10px #d9d9d9c4;
            }
            p{
                text-align: center;
            }
            label{
                color: black;
                font-weight: 500;
            }
            .name{
                color: #e74c3c;
                font-size: 22px;
                font-weight: 700;

            }
            .donors_data{
                background-color: white;
                border-radius: 5px;
                margin: 25px;
                -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
                -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
                box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
                padding: 20px 10px 20px 30px;
            }
        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
            <div class="row bg container">
                <h3>Who wants blood? </h3>
                <p>The following are requests for blood.</p>
            </div>
        </section>




        <!--  view request-->
        <section class="tbl-section section-padding">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box">

                        <!-- /.box-header -->

                        <div class="box-body" style="margin:30px">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Blood Group</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Till Required Date</th>
                                        <th>Contact No</th>
                                        <th>Detail</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM `blood_request`";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row ['req_id']; ?></td>
                                            <td><?php echo $row ['name']; ?></td>
                                            <td><?php echo $row ['blood_group']; ?></td>
                                            <td><?php echo $row ['gender']; ?></td>
                                            <td><?php echo $row ['email']; ?></td>
                                            <td><?php echo $row ['city']; ?></td>
                                            <td style="color:black"><?php echo $row ['till_req']; ?></td>
                                            <td><?php echo $row ['contact_no']; ?></td>
                                            <td><?php echo $row ['detail']; ?></td>




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