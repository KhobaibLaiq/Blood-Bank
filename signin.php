<?php
require_once("include/db_connect.php");

if (isset($_POST['SignIn'])) {
    
    //input email check
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $emailError = '<div class="alert alert-danger alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Please fill the email field.</strong> 
                           </div>';
        }
        
        //input password check
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password'];
            $password =md5($_POST['password']);
        } else {
            $passwordError = '<div class="alert alert-danger alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Please fill the password field.</strong> 
                           </div>';
        }
        
        //login query
        if (isset($email) && ($password)){
             $sql = " SELECT * FROM `donor` WHERE `email`='$email' AND `password`= '$password'";
            $result= mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_array($result)) {
                 $_SESSION ['user_id'] = $row ['id'];
                 $_SESSION ['name'] = $row ['name'];
                 $_SESSION ['save_life_date'] = $row ['save_life_date'];
                 header("Location:http://localhost/bloodbank/user/userprofile.php");
                
            }
            }else {
            $submitError = '<div class="alert alert-danger alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Sorry! No record found. Please enter a valid email or password</strong> 
                           </div>';
            
        }  
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
                color: white;
                text-align: center;
                background: #d81e05;
                padding: 10px
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
                <h1>Donate The Blood.</h1> 

            </div>
            <div class="row " style="margin-top:10px;">
                <div class="col-md-3"></div>
                <div class="container">
                    <div class="col-md-6 offset-md-3 form-container">
                        <h3>SignIn</h3>
                        <p>Sign in to start your session</p>
                        <hr class="red-bar">

                        <!-- Error Messages -->
                          <?php if (isset($submitError)) echo $submitError; ?>
                        <form action="" method="post"  novalidate=""  >
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                                 <?php if (isset($emailError)) echo $emailError; ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" required class="form-control">
                                 <?php if (isset($passwordError)) echo $passwordError; ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-lg center-aligned" type="submit" id="SignIn" name="SignIn">SignIn</button>
                            </div>
                        </form>
                        <a href="donate.php" class="text-center">Register a new membership</a>

                    </div>
                </div>
                <div class="col-md-3"></div>

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