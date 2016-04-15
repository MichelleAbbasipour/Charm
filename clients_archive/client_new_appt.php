<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    $title='Client Search' ;
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");

//can use this search method when there are under 1000 records. More than that and a more advanced indexing system such as Sphider, Sphinx or ElasticSearch
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
    
    <!-- business search form -->
    <form action="client_business_search.php" method="post">
        <label>
            <input type="type" name="bus_search" autocomplete="off" class="textbox" placeholder="enter part of postcode or address">
        </label>
    
        <input type="submit" value="Search" class="small_button">
    </form>
    
    <br><br>
    
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>