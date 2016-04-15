<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='View All Treatments' ;
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

$query = "SELECT * FROM treatments WHERE businesses_id LIKE $_SESSION[b_id]";
$rows = mysqli_query($conn, $query);
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
            
            <h2>Treatments</h2>
        
            <h4>Found: <?php echo mysqli_num_rows($rows)?></h4>
        
            <?php echo $output;?>
            
            <?php
            //if there are any results, assign these to the variable 'r' as an object
            if (mysqli_num_rows($rows)) {
                while ($r = mysqli_fetch_object($rows)) {
                    $_SESSION['t_name'] = $r->treatments_name;
                    $_SESSION['t_desc'] = $r->treatments_desc;
                    $_SESSION['t_duration'] = $r->treatments_duration;
                    $_SESSION['t_price'] = $r->treatments_price;

                    echo
                    //display the name, address and email of the businesses in the results
                    "<div class='row'" .
                    "<p><br>Treatment Name: " . $_SESSION['t_name'] . "</p>" .
                    "<p>Description: " . $_SESSION['t_desc'] . "</p>" .
                    "<p>Duration: " . $_SESSION['t_duration'] . "</p>" .
                    "<p>Price: £" . $_SESSION['t_price'] . "</p>" .

                    //show a button to allow the user to book an appointment with the business
                    "
                        <form method='POST' action='c_trtsearch.php'>
                            <input class='btn btn-primary' value='Edit treatment' type='submit'>
                            <input name='bus_btn1' value= '" . $_SESSION['b_id'] . "' type='hidden'>
                        </form>

                    </div>
                    ";
                }
            }
        ?>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>