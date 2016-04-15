<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='title' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- *** expand on click - two different ways of doing it *** -->
<h1>Code Examples</h1>

<div>
    <h4>Expand on click</h4>
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Link with href
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-target
        </button>
    </p>
    <br>
    <div class="collapse" id="collapseExample">
        <div class="card card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
    </div>
</div>

<!-- *** primary block button *** -->
<div class="btn_container">
<a href="#">
    <button type="button" class="btn btn-primary btn-lg btn-block">Primary Block Button</button>
</a>
</div>

<!-- *** primary large button *** -->
<div class="btn_container">
<a href="#">
    <button type="button" class="btn btn-primary btn-lg">Primary Large Button</button>
</a>
</div>

<!-- *** primary standard button *** -->
<div class="btn_container">
<a href="#">
    <button type="button" class="btn btn-primary">Primary Standard Button</button>
</a>
</div>

<!-- *** Secondary block button *** -->
<div class="btn_container">
    <a href="#">
        <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary Block Button</button>
    </a>                 
</div>

<!-- *** Secondary large button *** -->
<div class="btn_container">
    <a href="#">
        <button type="button" class="btn btn-lg btn-secondary">Secondary Large Button</button>
    </a>                 
</div>

<!-- *** Secondary standard button *** -->
<div class="btn_container">
    <a href="#">
        <button type="button" class="btn btn-secondary">Secondary Standard Button</button>
    </a>                 
</div>

<!-- *** Return to Professional Home Page button *** -->
<div class="btn_container">
    <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
        <button type="button" class="btn btn-secondary">Return to Professional Home Page</button>
    </a>                 
</div>

<!-- *** Return to Clients Home Page button *** -->
<div class="btn_container">
    <a href="<?php echo $navPath . '/pages/clients/index.php'?>">
        <button type="button" class="btn btn-secondary">Return to Clients Home Page</button>
    </a>                 
</div>

<?php
//*** redirect page (uncomment the header code) ***
    //header('Refresh: 0; URL='.$navPath.'/pages/purchase/index.php');
    exit();

    //link using variables
    echo $navPath . '/pages/pro/pro_reporttwo.php'

 //SQL statement to check for username duplicates
        $compare_query = "SELECT * FROM clients WHERE clients_username = '$input_username'";
        $result_compare = mysqli_query($conn, $compare_query);
        $rowSelected   = mysqli_num_rows($result_compare);
        
           if ($rowSelected) {
                     $output = "<h2>That username is already in use - please use a different username.</h2>";
           }
       
//run SQL query with one or more conditions
    $clientlogin_query     = "SELECT * FROM clients WHERE clients_username = '$input_login' OR clients_email = '$input_login'";
    $clientlogin_result    = mysqli_query($conn, $clientlogin_query);  

?>

<!-- form method to pass a variable on button click (php) using a hidden button -->
<form method='POST' action='c_trtsearch.php'>
    <input class='btn btn-primary' value='Select Business' type='submit'>
    <input name='bus_btn1' value= '" . $_SESSION['b_id'] . "' type='hidden'>
</form>