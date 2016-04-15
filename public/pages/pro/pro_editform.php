<?php

//** EDIT BUSINESS NAME **
if (isset($_POST['edit_businessname'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessname = ($_POST['edit_businessname']);

    $output = $edit_businessname;

    $select_query_name = "SELECT * FROM businesses WHERE businesses_id = $_SESSION[b_id]";
    $select_result_name = mysqli_query($conn, $select_query_name);

    if (mysqli_num_rows($select_result_name)) {
        while ($row = mysqli_fetch_assoc($select_result_name)) {
            $update_query_name =
                "UPDATE businesses SET businesses_name='$edit_businessname' WHERE businesses_id = $_SESSION[b_id]";
            $update_result_name= mysqli_query($conn, $update_query_name);

            $bus_name = $edit_businessname;
        }
    }
}
