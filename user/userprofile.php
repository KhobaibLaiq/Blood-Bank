<?php
require_once("include/db_connect.php");

if (isset($_POST['date'])) {
    $showform = '<div class="alert alert-danger alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Are You Sure?</strong> 
                    <form target="" method="post">
                <br>
                <input type="hidden" name="userID" value="' . $_SESSION['user_id'] . '">
                <button type="submit" name="delete" class="btn btn-success">Yes</button>

                <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
                </button>      
            </form>
                     </div>
                     ';
}
if (isset($_POST['userID'])) {
    $userID = $_POST['userID'];
    $crntDate = date_create();
    $crntDate = date_format($crntDate, 'y-m-d');

    $sql = "UPDATE donor SET save_life_date = '$crntDate' WHERE id='$userID'";
    if (mysqli_query($conn, $sql)) {
        
        $_SESSION ['save_life_date'] = $crntDate;
        header("Location:userprofile.php");
    } else {
        $submitError = '<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Data not inserted, Try again.</strong> 
                     </div>';
    }
}
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
            <div class="row bg container">
                <h3>Wellcome </h3><h1><?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1> 
                <p>Here you can menage your account and update your profile. </p>
            </div>
        </section>

        <section>
            <div class="test-success text-center container" id="data" style="margin-top: 20px;"><!-- Display Message here-->
             <?php   if (isset($submitError)) echo $submitError; ?>          
                <?php if (isset($showform)) echo $showform; ?>

            </div>
            <?php
            $safedate = $_SESSION ['save_life_date'];

            if ($safedate == '0') {
                echo '<div class="row" style="text-align:center;">
                <form target="" method="post">
                    <button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
                </form>
                
            </div>';
            } else {

                $start = date_create("$safedate");
                $end = date_create();
                $diff = date_diff($start, $end);


                $diffMonth = $diff->m;

                if ($diffMonth >= 3) {

                    echo '<div class="row" style="text-align:center;">
                <form target="" method="post">
                    <button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
                </form>
                
            </div>';
                } else {
                    echo '<div class="donors_data">
                <span class="name">Congratulation!</span>
                <span>You Already Safe The Life. You Will Donate The Blood After
                    Three Months. We Are Very Thanking Full To You.</span>
            </div>';
                }
            }
            ?>





        </section>
        <div class="row" style="margin:20px;">
            
        </div>

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