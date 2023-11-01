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
            .size{
                min-height: 0px;
                padding: 60px 0 40px 0;

            }
            .btn-defaultt{
                background-color: #d81e05;
                color: #fff;
                border-color: #ddd;
            }
            .loader{
                display:none;
                width:69px;
                height:89px;
                position:absolute;
                top:25%;
                left:50%;
                padding:2px;
                z-index: 1;
            }
            .loader .fa{
                color: #e74c3c;
                font-size: 52px !important;
            }
            .form-group{
                text-align: left;
            }
            h1{
                color: white;
            }
            h3{
                color: #e74c3c;
                text-align: center;
            }
            .red-bar{
                width: 25%;
            }
            span{
                display: block;
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
            .red-background{
                background-color: #e74c3c;
                min-height: 460px;
                height: auto;
                padding: 10px
            }
            hr{
                margin-top: 20px;
                margin-bottom: 20px;
                border: 0;
                border-top: 1px solid #eee;
                width: 183px;
            }
            h4{
                padding-top: 5px;
                color: green;
            }

        </style>


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
                            <div class="banner-text text-center">
                                <div class="row">
                                    <div class="ccol-md-6 offset-md-3">
                                        <h1 class="text-center">Search Donors</h1>
                                        <hr >
                                        <br>
                                        <form  action="" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                                            <div class="form-group text-center justify-content-center">

                                                <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                                                    <option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
                                            </div>
                                            <div class="form-group center-aligned">
                                                <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>

                                                </select>
                                            </div>
                                            <div class="form-group center-aligned">
                                                <button type="button" class="btn btn-lg btn-danger" id="search" >Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--/ banner-->


    <section>
        <div class="container" style="padding: 60px 0 60px 0;">
            <div class="row " id="data">

                <!-- Display The Search Result -->

                <div id="data-display"></div>

            </div>
        </div>
        <div class="container" style="padding: 60px 0;">
            <div class="row data">
                <h1 style="color: red">All Donors</h1>
                <?php
                $sql = "SELECT * FROM donor WHERE `delete_status` = '0'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['save_life_date'] == '0' ) {
                            echo '
                                      <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                                      <span class="name">' . $row['name'] . '</span>
                                      <span >' . $row['blood_group'] . '</span>
                                      <span >' . $row['gender'] . '</span>
                                      <span >' . $row['email'] . '</span>
                                      <span >' . $row['contact_no'] . '</span>
                                      <span >' . $row['city'] . '</span>
                                      </div>
                                   ';
                        } else {
                            echo '
                                      <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                                      <span class="name">' . $row['name'] . '</span>
                                      <span >' . $row['blood_group'] . '</span>
                                      <span >' . $row['gender'] . '</span>
                                      <span >' . $row['city'] . '</span>
                                       <h4 class=" text-center">Already Donated</h4>
                                      </div>
                                   ';
                        }
                    }
                } else {

                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Data not found.</strong> 
                                </div>';
                }
                ?>

            </div>
        </div>

    </section>

    <?php
//include footer file
    include ('include/footer.php');
    ?>

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
    <script type="text/javascript">


        $("#search").on('click', function () {

            var city = $("#city").val();
            var blood_group = $("#blood_group").val();

            $.ajax({
                url: 'ajaxsearch.php',
                type: 'GET',
                dataType: "html",
                data: {city: city, blood_group: blood_group},
                success: function (data) {
                    if (!data.error) {
                        $("#data").html(data);
                    }
                }

            });


        });



    </script>

</body>