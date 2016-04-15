<div class="row">

    <form 
          class="form-horizontal"
          role="form"
          name='eventform'
          method='POST' 
          action=
            "<?php $_SERVER['PHP_SELF']; ?>
            ?month=
            <?php echo $month;?>
            &day=
            <?php echo $day;?>
            &year=
            <?php echo $year;?>
            &v=true&add=true#cal_jump" 
          data-toggle="validator">
    <br>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 centered">

                <!-- First name input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           placeholder="First name"
                           required name="txtFName"
                           data-error="Please enter a valid name"
                           maxlength="30" pattern="^[_A-z]{1,}$">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Last name input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="inputName"
                           placeholder="Last name"
                           required
                           name="txtLName"
                           data-error="Please enter a valid name">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <!-- Email input -->
                <div class="form-group has-feedback">
                    <input
                           type="email"
                           class="form-control"
                           id="inputEmail"
                           placeholder="Email"
                           data-error="Please enter a valid email address"
                           required
                           name="txtEmail">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Phone number input -->
                <div class="form-group has-feedback">
                    <input
                           type="type"
                           class="form-control"
                           id="inputName"
                           placeholder="Phone (XXXXX XXXXXX)"
                           name="txtPhone"
                           autocomplete="off"
                           pattern="^[ 0-9]{1,}$"
                           required
                           data-minlength="12"
                           maxlength="12"
                           data-error="Please enter a valid phone number">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class='col-xs-12 centered'>
                    <br><button type='submit' class='btn btn-primary' name='btnadd'>Send Request</button>
                </div>
            </div>
        </div>
    </form>
    
</div>