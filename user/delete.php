<?php
require_once("include/db_connect.php");

/***************************************************************************************************************/
if (isset($_POST['delete_account'])) {
    if (isset($_POST['account_password']) && !empty('account_password')) {
        
        $sql = "SELECT * FROM donor WHERE id=".$_SESSION['user_id'];
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0) {
            $result = mysqli_fetch_assoc($query);
        }
      
        if ( md5($_POST['account_password']) == $result['password']) {
            $sql = "UPDATE donor SET delete_status = '1' WHERE  id='{$_SESSION['user_id']}'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("Location:http://localhost/bloodbank/index.php");
            } else {
                $updateError = '<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Your Account Deletion Failled, Please Try again.</strong> 
                     </div>';
            }
        } else {
            $passwordError = '<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Please enter correct password.</strong> 
                     </div>';
        }
    } else {
        $emptyPasswordError = '<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Please fill password field.</strong> 
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
        <title>Delete Profile</title>
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
            .form-group{
                text-align: left;
            }
            .form-container{

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
        <div class="container" style="padding: 60px 0;">
            <div class="row">




                <!--account delete-->
                <div class="panel panel-default" style="padding: 20px;">
                    <?php
                    if (isset($updateError))
                     echo   $updateError;
                    ?>

                    <form action="" method="post" class="form-group form-container" novalidate="">

                        <div class="form-group">
                            <label for="account_password">Password</label>
                            <input type="password" required name="account_password" placeholder="Current Password" class="form-control">
                        </div>
                        <?php
                        if (isset($passwordError))
                            echo    $passwordError;
                        if (isset($emptyPasswordError))
                            echo $emptyPasswordError;
                        ?>

                        <div class="form-group">
                            <button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <?php
//include footer file
        include ('include/footer.php');
        ?>