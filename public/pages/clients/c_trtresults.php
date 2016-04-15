<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Show Search Results' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");

    $b_id= $_SESSION['b_id'];
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    
    <!-- CODE TO PROCESS THE SEARCH TERM AND QUERY THE DATABASE -->
<<<<<<< HEAD
    <?php
    //if there is a value passed from a form input with a name of 'business_search', do the following...
    if (isset($_POST['trt_search_all'])) {
        //set the variable 'business_search' as the term input in the form
        $trt_search = ($_POST['trt_search']);

        //this is the query which matches the term held in the trt_search
        //variable to any terms within the columns listed from the table 'businesses'
        $query = "
            SELECT *
            FROM treatments
            WHERE businesses_id = $_SESSION[b_id]
        ";

        //run the query using the data from the $conn variable and set the value into the $rows variable
        $rows = mysqli_query($conn, $query);

        if (mysqli_num_rows($rows) == 0) {
            $result = 0;
        }

        //if the number of rows in the results is equal to 1 then assign the value 'result' to the variable
        //'result' otherwise the value will be 'results' (which is for any number of results other than 1)
        if (mysqli_num_rows($rows) == 1) {
            $result = 'result';
        } else {
            $result = 'results';
=======
     <?php
        //if there is a value passed from a form input with a name of 'business_search', do the following...
        if(isset($_POST['trt_search'])) {
            //set the variable 'business_search' as the term input in the form 
            $trt_search = ($_POST['trt_search']); 
            
            //this is the query which matches the term held in the trt_search variable to any terms within the columns listed from the table 'businesses'
            $query = "
                SELECT *
                FROM treatments
                WHERE businesses_id = $_SESSION[b_id]
                AND (treatments_name LIKE '%$trt_search%'
                OR treatments_desc LIKE '%$trt_search%')
                
            ";
            
            //run the query using the data from the $conn variable and set the value into the $rows variable
            $rows = mysqli_query($conn, $query); 
            
            if(mysqli_num_rows($rows) == 0){
                $result = 0;
            }

            //if the number of rows in the results is equal to 1 then assign the value 'result' to the variable 'result' otherwise the value will be 'results' (which is for any number of results other than 1)
            if (mysqli_num_rows($rows) == 1){
                $result = 'result';
            } else {
                $result = 'results';
            }
>>>>>>> origin/master
        }
    } elseif (empty($_POST['trt_search'])) {
        header('Refresh: 0; URL='.$navPath.'/pages/clients/c_trtsearch.php');
    } elseif (isset($_POST['trt_search'])) {
        //set the variable 'business_search' as the term input in the form
        $trt_search = ($_POST['trt_search']);

        //this is the query which matches the term held in the trt_search
        //variable to any terms within the columns listed from the table 'businesses'
        $query = "
            SELECT *
            FROM treatments
            WHERE businesses_id = $_SESSION[b_id]
            AND (treatments_name LIKE '%$trt_search%'
            OR treatments_desc LIKE '%$trt_search%')

        ";

        //run the query using the data from the $conn variable and set the value into the $rows variable
        $rows = mysqli_query($conn, $query);

        if (mysqli_num_rows($rows) == 0) {
            $result = 0;
        }

        //if the number of rows in the results is equal to 1 then assign the value 'result' to the variable 'result'
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
            <h4>Search term: <?php echo $trt_search?></h4>
            <h4>Found: <?php echo mysqli_num_rows($rows) . " " . $result?></h4>
        
            <a href="<?php echo $navPath . '/pages/clients/c_trtsearch.php'?>">
                <button type="button" class="btn btn-secondary">Search for Another Treatment</button>
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
                $_SESSION['t_id'] = $r->treatments_id;
                $_SESSION['t_name'] = $r->treatments_name;
                $_SESSION['t_desc'] = $r->treatments_desc;
                $_SESSION['t_duration'] = $r->treatments_duration;
                $_SESSION['t_price'] = $r->treatments_price;
                $_SESSION['business_id'] = $r->businesses_id;

                echo
                //display the name, address and email of the businesses in the results
                "<div class='row'" .
                "<p><br>Business ID: " . $_SESSION['b_id'] . "</p>" .
                "<p>ID: " . $_SESSION['t_id'] . "</p>" .
                "<p>NAME: " . $_SESSION['t_name'] . "</p>" .
                "<p>DESCRIPTION: " . $_SESSION['t_desc'] . "</p>" .
                "<p>DURATION: " . $_SESSION['t_duration'] . "</p>" .
                "<p>PRICE: £" . $_SESSION['t_price'] . "</p>" .

                //show a button to allow the user to book an appointment with the business
                "
                    <form method='POST' action='c_calendar.php'>
                        <input class='btn btn-primary' value='Select Treatment' type='submit'>
                        <input name='trt_btn1' value= '" . $_SESSION['t_id'] . "' type='hidden'>
                        <input name='trt_btn2' value= '" . $_SESSION['t_name']. "' type='hidden'>
                        <input name='trt_btn3' value= '" . $_SESSION['t_desc']. "' type='hidden'>
                        <input name='trt_btn4' value= '" . $_SESSION['t_duration']. " ' type='hidden'>
                        <input name='trt_btn5' value= '" . $_SESSION['t_price']. " ' type='hidden'>
                    </form>

                </div>
                ";
            }
        }
        ?>
        </div>
    </div>
</div> <!-- end of main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>