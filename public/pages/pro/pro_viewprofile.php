<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='View Business Profile' ;
$output = "";
$_SESSION['b_id'];

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

//get input values from registration form and assign them to local variables
$query = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $bus_name = $row["businesses_name"];
        $bus_address = $row["businesses_address"];
        $bus_postcode = $row["businesses_postcode"];
        $bus_email = $row["businesses_email"];
        $bus_mobile = $row["businesses_mobile"];
        $bus_phone = $row["businesses_phone"];
        $bus_bio = $row["businesses_bio"];
        $bus_url = $row["businesses_url"];
    }
}

//** EDIT BUSINESS NAME **
if (isset($_POST['edit_businessname'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessname = ($_POST['edit_businessname']);

    $select_query_name = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_name = mysqli_query($conn, $select_query_name);

    if (mysqli_num_rows($select_result_name)) {
        while ($row = mysqli_fetch_assoc($select_result_name)) {
            $update_query_name =
                "UPDATE businesses SET businesses_name='$edit_businessname' 
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_name= mysqli_query($conn, $update_query_name);

            $bus_name = $edit_businessname;
        }
    }
}

//** EDIT BUSINESS ADDRESS **
if (isset($_POST['edit_businessaddress'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessaddress = ($_POST['edit_businessaddress']);

    $select_query_address = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_address = mysqli_query($conn, $select_query_address);

    if (mysqli_num_rows($select_result_address)) {
        while ($row = mysqli_fetch_assoc($select_result_address)) {
            $update_query_address =
                "UPDATE businesses SET businesses_address='$edit_businessaddress'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_address= mysqli_query($conn, $update_query_address);

            $bus_address = $edit_businessaddress;
        }
    }
}

//** EDIT BUSINESS POSTCODE **
if (isset($_POST['edit_businesspostcode'])) {
    //get input values from registration form and assign them to local variables
    $edit_businesspostcode = ($_POST['edit_businesspostcode']);

    $select_query_postcode = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_postcode = mysqli_query($conn, $select_query_postcode);

    if (mysqli_num_rows($select_result_postcode)) {
        while ($row = mysqli_fetch_assoc($select_result_postcode)) {
            $update_query_postcode =
                "UPDATE businesses SET businesses_postcode='$edit_businesspostcode'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_postcode= mysqli_query($conn, $update_query_postcode);

            $bus_postcode = $edit_businesspostcode;
        }
    }
}

//** EDIT BUSINESS EMAIL **
if (isset($_POST['edit_businessemail'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessemail = ($_POST['edit_businessemail']);

    $select_query_email = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_email = mysqli_query($conn, $select_query_email);

    if (mysqli_num_rows($select_result_email)) {
        while ($row = mysqli_fetch_assoc($select_result_email)) {
            $update_query_email =
                "UPDATE businesses SET businesses_email='$edit_businessemail'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_email= mysqli_query($conn, $update_query_email);

            $bus_email = $edit_businessemail;
        }
    }
}

//** EDIT BUSINESS MOBILE **
if (isset($_POST['edit_businessmobile'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessmobile = ($_POST['edit_businessmobile']);

    $select_query_mobile = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_mobile = mysqli_query($conn, $select_query_mobile);

    if (mysqli_num_rows($select_result_mobile)) {
        while ($row = mysqli_fetch_assoc($select_result_mobile)) {
            $update_query_mobile =
                "UPDATE businesses SET businesses_mobile='$edit_businessmobile'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_mobile= mysqli_query($conn, $update_query_mobile);

            $bus_mobile = $edit_businessmobile;
        }
    }
}

//** EDIT BUSINESS PHONE **
if (isset($_POST['edit_businessphone'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessphone = ($_POST['edit_businessphone']);

    $select_query_phone = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_phone = mysqli_query($conn, $select_query_phone);

    if (mysqli_num_rows($select_result_phone)) {
        while ($row = mysqli_fetch_assoc($select_result_phone)) {
            $update_query_phone =
                "UPDATE businesses SET businesses_phone='$edit_businessphone'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_phone= mysqli_query($conn, $update_query_phone);

            $bus_phone = $edit_businessphone;
        }
    }
}

//** EDIT BUSINESS BIO **
if (isset($_POST['edit_businessbio'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessbio = ($_POST['edit_businessbio']);

    $select_query_bio = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_bio = mysqli_query($conn, $select_query_bio);

    if (mysqli_num_rows($select_result_bio)) {
        while ($row = mysqli_fetch_assoc($select_result_bio)) {
            $update_query_bio =
                "UPDATE businesses SET businesses_bio='$edit_businessbio'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_bio= mysqli_query($conn, $update_query_bio);

            $bus_bio = $edit_businessbio;
        }
    }
}

//** EDIT BUSINESS url **
if (isset($_POST['edit_businessurl'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessurl = ($_POST['edit_businessurl']);

    $select_query_url = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_url = mysqli_query($conn, $select_query_url);

    if (mysqli_num_rows($select_result_url)) {
        while ($row = mysqli_fetch_assoc($select_result_url)) {
            $update_query_url =
                "UPDATE businesses SET businesses_url='$edit_businessurl'
                WHERE businesses_id = $_SESSION[b_id]";
            $update_result_url= mysqli_query($conn, $update_query_url);

            $bus_url = $edit_businessurl;
        }
    }
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            
            <!-- *** Return to Professional Home Page button *** -->
            <div class="btn_container">
                <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
                    <button type="button" class="btn btn-secondary">Return to Professional Home Page</button>
                </a>                 
            </div>
            
            <h2>Business Profile</h2>
            
            <p><span class="strong">PRO ID: </span><?php echo $_SESSION['pro_id'];?> </p>
            <p><span class="strong">BUSINESS ID: </span><?php echo $_SESSION['b_id'];?></p>
            
            <!-- DISPLAY CURRENT BUSINESS NAME & EDIT BUSINESS NAME-->
            <div>
                <p><span class="strong">BUSINESS NAME: </span></p>
                <p><?php echo $bus_name;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseExample">
                    <div class="card card-block">
                        <form
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form" method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business name"
                                           name="edit_businessname"
                                           data-error="Please enter a valid name"
                                           maxlength="30"
                                           pattern="^[_A-z ]{1,}$">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS ADDRESS & EDIT BUSINESS ADDRESS-->
            <div>
                <p><span class="strong">BUSINESS ADDRESS: </span></p>
                <p><?php echo $bus_address;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseAddress">
                    <div class="card card-block">
                        <form
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business address"
                                           name="edit_businessaddress"
                                           data-error="Please enter a valid name"
                                           maxlength="30"
                                           pattern="[a-zA-Z0-9\s]+">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS POSTCODE & EDIT BUSINESS POSTCODE-->
            <div>
                <p><span class="strong">BUSINESS POSTCODE: </span></p>
                <p><?php echo $bus_postcode;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapsePostcode">
                    <div class="card card-block">
                        <form 
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business postcode"
                                           name="edit_businesspostcode"
                                           data-error="Please enter a valid name"
                                           maxlength="30"
                                           pattern="[a-zA-Z0-9\s]+">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS EMAIL & EDIT BUSINESS EMAIL-->
            <div>
                <p><span class="strong">BUSINESS EMAIL: </span></p>
                <p><?php echo $bus_email;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseEmail">
                    <div class="card card-block">
                        <form 
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business email"
                                           name="edit_businessemail"
                                           data-error="Please enter a valid name"
                                           maxlength="30"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS MOBILE & EDIT BUSINESS MOBILE-->
            <div>
                <p><span class="strong">BUSINESS MOBILE: </span></p>
                <p><?php echo $bus_mobile;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseMobile">
                    <div class="card card-block">
                        <form 
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business mobile"
                                           name="edit_businessmobile"
                                           data-error="Please enter a valid number"
                                           pattern="^[ 0-9]{1,}$"
                                           data-minlength="11"
                                           maxlength="12">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
            <!-- DISPLAY CURRENT BUSINESS PHONE & EDIT BUSINESS PHONE-->
            <div>
                <p><span class="strong">BUSINESS PHONE: </span></p>
                <p><?php echo $bus_phone;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapsePhone">
                    <div class="card card-block">
                        <form 
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="text"
                                           class="form-control"
                                           placeholder="Edit business phone"
                                           name="edit_businessphone"
                                           data-error="Please enter a valid number"
                                           pattern="^[ 0-9]{1,}$"
                                           data-minlength="11"
                                           maxlength="12">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS BIO & EDIT BUSINESS BIO-->
            <div>
                <p><span class="strong">BUSINESS BIO: </span></p>
                <p><?php echo $bus_bio;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseBio">
                    <div class="card card-block">
                        <form 
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="textarea"
                                           class="form-control"
                                           placeholder="Business bio"
                                           data-error="Please enter a valid bio"
                                           name="edit_businessbio">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- DISPLAY CURRENT BUSINESS URL & EDIT BUSINESS URL-->
            <div>
                <p><span class="strong">BUSINESS URL: </span></p>
                <p><?php echo $bus_url;?>
                <button
                        class="glyphicon glyphicon-edit test purple strong"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample">EDIT</button>
                </p>

                <div class="collapse" id="collapseUrl">
                    <div class="card card-block">
                        <form
                              id="edit_business_form"
                              class="form-horizontal"
                              role="form"
                              method="post"
                              action="pro_viewprofile.php"
                              data-toggle="validator">
                            <div class="form-group has-feedback col-lg-6">
                                <div class="input-group">
                                    <input
                                           type="textarea"
                                           class="form-control"
                                           placeholder="Business URL"
                                           data-error="Please enter a valid URL"
                                           name="edit_businessurl"
                                           pattern="[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                    </span>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <p><?php echo $output;?></p>
  
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>