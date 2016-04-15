<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Search by Location' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Search By Location or Business</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <form
                      class="form-horizontal"
                      role="form"
                      method="post"
                      action="c_bsresults.php"
                      data-toggle="validator">
                <div class="input-group">
                    <input
                           type="text"
                           class="form-control"
                           required
                           placeholder="Enter part of a postcode, location or business name"
                           name="business_search"
                           autocomplete="off"
                           data-error="Please enter a valid name">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" value="search">Go!</button>
                    </span>
                    
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div><!-- /input-group -->
                </form>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
    </div>
    
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>