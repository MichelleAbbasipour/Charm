<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Show Search Results' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    
    <!-- CODE TO PROCESS THE SEARCH TERM AND QUERY THE DATABASE -->
        <?php
        //if there is a value passed from a form input with a name of 'business_search', do the following...
        if (empty($_POST['business_search'])) {
        
            
        } elseif (isset($_POST['business_search'])) {
            //set the variable 'business_search' as the term input in the form
            $business_search = ($_POST['business_search']);
            
            //this is the query which matches the term held in the business_search
            //variable to any terms within the columns listed from the table 'businesses'
            $query = "
                SELECT businesses_name, businesses_address, businesses_email, businesses_id
                FROM businesses
                WHERE businesses_postcode LIKE '%{$business_search}%'
                OR businesses_address LIKE '%{$business_search}%'
                OR businesses_name LIKE '%{$business_search}%'
            ";
            
            //run the query using the data from the $conn variable and set the value into the $rows variable
            $rows = mysqli_query($conn, $query);

            //if the number of rows in the results is equal to 1 then assign the
            //value 'result' to the variable 'result'
            //otherwise the value will be 'results' (which is for any number of results other than 1)
            if (mysqli_num_rows($rows) == 1) {
                $result = 'result';
            } else {
                $result = 'results';
            }
        }
        ?>

    <!-- DISPLAY SEARCH TERM & NUMBER OF RESULTS -->
    <div class="row">
        <div class="col-xs-12 centered">
            <h2>Search Results</h2>
            <h4>Search term: <?php echo $business_search?></h4>
            <h4>Found: <?php echo mysqli_num_rows($rows) . " " . $result?></h4>
        </div>
     
        <div class="col-xs-4 col-xs-offset-4">
            <a href="<?php echo $navPath . '/pages/clients/c_makeappt.php'?>">
                <button type="button" class="btn btn-secondary">Search Again</button>
            </a>
        </div>
    </div>

    <!-- LOOP TO SHOW BUSINESS RESULTS AND BOOK NOW BUTTON -->    
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">

        <?php
        //if there are any results, assign these to the variable 'r' as an object
        if (mysqli_num_rows($rows)) {
            while ($r = mysqli_fetch_object($rows)) {
                $_SESSION['b_id'] = $r->businesses_id;
                $_SESSION['b_name'] = $r->businesses_name;
                $_SESSION['b_address'] = $r->businesses_address;
                $_SESSION['b_email'] = $r->businesses_email;

                echo
                //display the name, address and email of the businesses in the results
                "<div class='row'" .
                "<p><br>ID: " . $_SESSION['b_id'] . "</p>" .
                "<p>NAME: " . $_SESSION['b_name'] . "</p>" .
                "<p>ADDRESS: " . $_SESSION['b_address'] . "</p>" .
                "<p>EMAIL: " . $_SESSION['b_email'] . "</p>" .

                //show a button to allow the user to book an appointment with the business
                "

                    <form method='POST' action='c_trtsearch.php'>
                        <input class='btn btn-primary' value='Select Business' type='submit'>
                        <input name='bus_btn1' value= '" . $_SESSION['b_id'] . "' type='hidden'>
                        <input name='bus_btn2' value= '" . $_SESSION['b_name']. "' type='hidden'>
                        <input name='bus_btn3' value= '" . $_SESSION['b_address']. "' type='hidden'>
                        <input name='bus_btn4' value= '" . $_SESSION['b_email']. " ' type='hidden'>
                    </form>

                </div>
                ";
            }
        }
        ?>
        </div>
    </div>
</div><!-- end of Main Content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>