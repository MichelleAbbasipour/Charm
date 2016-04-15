<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    $title='Show Treatments' ;
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">

    <?php
        //if there is a value passed from a form input with a name of 'keywords', do the following...
        if(isset($_POST['treatment'])) {
            //set the variable 'keywords' as the term input in the form 
            $treatment = ($_POST['treatment']); 
            
            //this is the query which matches the term held in the keywords variable to any terms within the columns listed from the table 'businesses'
            $query = "
                SELECT treatments_name, treatments_desc, treatments_duration, treatments_price, treatments_id 
                FROM treatments
                WHERE treatments_name LIKE '%{$treatment}%'
                OR treatments_desc LIKE '%{$treatment}%'
            ";
            
            //run the query using the data from the $conn variable and set the value into the $rows variable
            $rows = mysqli_query($conn, $query); 

            //if the number of rows in the results is equal to 1 then assign the value 'result' to the variable 'result' otherwise the value will be 'results' (which is for any number of results other than 1)
            if (mysqli_num_rows($rows) == 1){
                $result = 'result';
            } else {
                $result = 'results';
            }
        }
    ?>

    <div class="result_count">
        <?php 
                
            //display the value of the variable 'keywords'
            echo "<p id='search_term'>Search term: " . $treatment . "</p>" .
        
            //display the number of results found
            "<p>Found " . mysqli_num_rows($rows) . " " . $result . "</p>" .
            
            //show the 'search again' button to allow the user to return to the search page
            "<a href='after_business_search.php'><button class='small_button'>Search Again</button></a>";
        ?>
    </div>

    <?php
        //if there are any results, assign these to the variable 'r' as an object
        if(mysqli_num_rows($rows)) {
            while($r = mysqli_fetch_object($rows)) {
                
                $_SESSION['t_id'] = $r->treatments_id;;
                $_SESSION['t_name'] = $r->treatments_name;
                $_SESSION['t_desc'] = $r->treatments_desc;
                $_SESSION['t_duration'] = $r->treatments_duration;
                $_SESSION['t_price'] = $r->treatments_price;
                
                echo
                //display the name, address and email of the businesses in the results
                "<div class='result'>
                <p>" .
                "<p>ID: " . $_SESSION['t_id'] . "</p>" .
                "<p>NAME: " . $_SESSION['t_name'] . "</p>" .
                "<p>DESC: " . $_SESSION['t_desc'] . "</p>" .
                "<p>DURATION: " . $_SESSION['t_duration'] . "</p>" .
                "<p>PRICE: £" . $_SESSION['t_price'] . "</p>" .

                //show a button to allow the user to book an appointment with the business
                "<form method='POST' action='client_book_appt.php'>
                    <input class='small_button' value= 'Book Now!' type='submit'>
                    <input name='trt_btn1' value= '" . $_SESSION['t_id'] . "' type='hidden'>
                    <input name='trt_btn2' value= '" . $_SESSION['t_name'] . "' type='hidden'>
                    <input name='trt_btn3' value= '" . $_SESSION['t_desc'] . "' type='hidden'>
                    <input name='trt_btn4' value= '" . $_SESSION['t_duration'] . "' type='hidden'>
                    <input name='trt_btn5' value= '" . $_SESSION['t_price'] . "' type='hidden'>
                </form>

                </div>";
            }
        }
    ?>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>