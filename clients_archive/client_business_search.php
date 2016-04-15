<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    $title='Client Search' ;
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">

    <?php
        //if there is a value passed from a form input with a name of 'keywords', do the following...
        if(isset($_POST['bus_search'])) {
            //set the variable 'keywords' as the term input in the form 
            $bus_search = ($_POST['bus_search']); 
            
            //this is the query which matches the term held in the keywords variable to any terms within the columns listed from the table 'businesses'
            $query = "
                SELECT businesses_name, businesses_address, businesses_email, businesses_id
                FROM businesses
                WHERE businesses_postcode LIKE '%{$bus_search}%'
                OR businesses_address LIKE '%{$bus_search}%'
                OR businesses_name LIKE '%{$bus_search}%'
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
            echo "<p id='search_term'>Search term: " . $bus_search . "</p>" .
        
            //display the number of results found
            "<p>Found " . mysqli_num_rows($rows) . " " . $result . "</p>" .
            
            //show the 'search again' button to allow the user to return to the search page
            "<a href='client_new_appt.php'><button class='small_button'>Search Again</button></a>";
        ?>
    </div>

    <?php
        //if there are any results, assign these to the variable 'r' as an object
        if(mysqli_num_rows($rows)) {
            while($r = mysqli_fetch_object($rows)) 
            { 
                
                $_SESSION['b_id'] = $r->businesses_id;;
                $_SESSION['b_name'] = $r->businesses_name;
                $_SESSION['b_address'] = $r->businesses_address;
                $_SESSION['b_email'] = $r->businesses_email;
                
            echo
            //display the name, address and email of the businesses in the results
            "<div class='result'>
                <p>" .
                "<p>ID: " . $_SESSION['b_id'] . "</p>" .
                "<p>NAME: " . $_SESSION['b_name'] . "</p>" .
                "<p>ADDRESS: " . $_SESSION['b_address'] . "</p>" . 
                "<p>EMAIL: " . $_SESSION['b_email'] . "</p>" . 
                
                
                //show a button to allow the user to book an appointment with the business
                "
                <form method='POST' action='after_business_search.php'>
                    <input class='small_button' value='Book Now!' type='submit'>
                    <input name='bus_btn1' value= '" . $_SESSION['b_id'] . "' type='hidden'>
                    <input name='bus_btn2' value= '" . $_SESSION['b_name']. "' type='hidden'>
                    <input name='bus_btn3' value= '" . $_SESSION['b_address']. "' type='hidden'>
                    <input name='bus_btn4' value= '" . $_SESSION['b_email']. " ' type='hidden'>
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