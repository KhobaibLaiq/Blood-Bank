<?php
require_once("include/db_connect.php");
if (isset($_POST['submit'])) {


   
//input name check
        if (isset($_POST['name']) && !empty($_POST['name'])) {

            if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {

                $name = $_POST['name'];
            } else {
                $nameError = '<div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Only lower and upper case and space characters are allow.</strong> 
                               </div>';
            }
        } else {
            $nameError = '<div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Please fill the name field.</strong> 
                          </div>';
        }
//input gender check
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $genderError = '<div class="alert alert-danger alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Please select your gender.</strong> 
                           </div>';
        }
//input blood group check
        if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
            $blood_group = $_POST['blood_group'];
        } else {
            $blood_groupError = '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <strong>Please select your blood group.</strong> 
                                 </div>';
        }
        //input day check
        if (isset($_POST['day']) && !empty($_POST['day'])) {
            $day = $_POST['day'];
        } else {
            $dayError = '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Please select date input.</strong> 
                        </div>';
        }

//input contact no check
        if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {

            if (preg_match('/\d{11}/', $_POST['contact_no'])) {

                $contact_no = $_POST['contact_no'];
            } else {
                $contact_noError = '<div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Contact should be consist of 11 characters.</strong> 
                                    </div>';
            }
        } else {
            $contact_noError = '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Please fill the contact field.</strong> 
                                </div>';
        }
//input city check
        if (isset($_POST['city']) && !empty($_POST['city'])) {

            if (preg_match('/^[A-Za-z\s]+$/', $_POST['city'])) {

                $city = $_POST['city'];
            } else {
                $cityError = '<div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Only lower and upper case and space characters are allow.</strong> 
                              </div>';
            }
        } else {
            $cityError = '<div class="alert alert-danger alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <strong>Please fill the city field.</strong> 
                         </div>';
        }


       //input emailcheck
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            if (preg_match($pattern, $_POST['email'])) {

               
                    $email = $_POST['email'];
                
            } else {
                $emailError = '<div class="alert alert-danger alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <strong>Please enter the valid email address.</strong> 
                               </div>';
            }
        } else {
            $emailError = '<div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Please fill the email field.</strong> 
                          </div>';
        }

        //insert Data into database
        if (isset($name) && isset($blood_group) && isset($gender) && isset($email) && isset($city) && isset($contact_no) && isset($day) && isset($detail) ) {
           
            $sql = "INSERT INTO blood_request (name,blood_group,gender,email,city,till_req,contact_no,detail) VALUES ('$name','$blood_group','$gender','$email','$city','$day','$contact_no','$detail')";
            
            if (mysqli_query($conn, $sql)) {
          
                $submitSuccess = '<div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Request Send successfully.</strong> 
                     </div>';
            } else {
              
                $submitError = '<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Request Not Send, Try again.</strong> 
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
                <h1>Request For Blood.</h1> 
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="container">
                    <div class="col-md-6 offset-md-3 form-container">
                        <h3>Send Your Request</h3>
                        <a href="donate.php" class="text-center">Click Here! If You Are Blood Donor.</a>

                        <?php
                        if (isset($termError)) echo $termError;
                        if (isset($submitSuccess)) echo $submitSuccess;
                        if (isset($submitError)) echo $submitError;
                        
                        ?>
                        <!-- Error Messages -->
                        <br>
                        <br>
                        <form class="form-group" action="" method="post" novalidate="" >
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control"
                                value="<?php if (isset($name)) echo $name; ?>">

                                <?php if (isset($nameError)) echo $nameError; ?>
                            </div>
                            <!--full name-->
                            <div class="form-group">
                                <label for="blood_group">Blood Group</label><br>
                                <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                                    <option value="">---Select Your Blood Group---</option>
                                    <?php if (isset($blood_group)) echo '<option selected=""value"'.$blood_group.'">'.$blood_group.'</option>';?>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                <?php if (isset($blood_groupError)) echo $blood_groupError; ?>

                            </div>
                            <!--End form-group-->
                            <div class="form-group">
                                <label for="gender">Gender</label><br>
                                Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked >
                                Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if (isset($gender)) { if($gender == "Female") echo "checked";}?>>
                                <?php if (isset($genderError)) echo $genderError; ?>
                            </div>
                            <!--gender-->
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if (isset($email)) echo $email; ?>">
                                <?php if (isset($emailError)) echo $emailError; ?>
                            </div>
                            
                              <div class="form-group">
                                <label for="city">City</label>
                                <select name="city" id="city" class="form-control demo-default" required>
                                    <option value="">-- Select --</option>
                                    <?php if (isset($city)) echo '<option selected=""value"'.$city.'">'.$city.'</option>';?>
                                    <optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
                                <?php if (isset($cityError)) echo $cityError; ?>
                            </div>

                            <!--city end-->
                            <div class="form-group">
                                <label for="contact_no">Contact No</label>
                                <input type="text" name="contact_no"  placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11" value="<?php if (isset($contact_no)) echo $contact_no; ?>">
                                <?php if (isset($contact_noError)) echo $contact_noError; ?>
                            </div>

                            <!--End form-group-->
                          
                            <div class="form-inline">
                                <label for="day">Till Required Date</label><br>
                                <input class="form-control demo-default" type="date" id="day" name="day" style="margin-bottom:10px;" value ="<?php if (isset($day)) echo $day;?>"required >                         
                                 <?php if (isset($dayError)) echo $dayError; ?>
                             
                            </div>
                            <!--End form-group-->
                            <div class="form-inline">
                                <label for="detail">Detail (optional)</label><br>                    
                                <textarea class="form-control demo-default" id="detail" name="detail" style="margin-bottom:10px;" placeholder="Enter detail here...." cols="60" rows="4"></textarea>
                             
                            </div>
                           

                            <div class="form-group">
                                <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Send Request</button>
                            </div>
                        </form>
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