<style>
    h6{
        color: red;
        font-size: 30px;
    }
</style>

<?php
require_once("include/db_connect.php");
if ((isset($_GET['city']) && !empty($_GET['city']) ) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']) )) { 
    $city = $_GET['city'];
    echo "<h6> Your Search Result </h6>";
    $blood_group = $_GET['blood_group'];

    $sql = "SELECT * FROM donor WHERE city='$city' AND blood_group='$blood_group'";
    $result = mysqli_query($conn, $sql);
    
    //echo '<pre>';print_r($result);exit;

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['save_life_date'] == '0') {
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
    
    
}
echo "<hr>";
?>