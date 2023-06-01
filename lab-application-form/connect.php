<!-- PHP CODES -->
<?php

    // Database connection codes.

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbn = "lab_application_form";


    $connect = mysqli_connect($host, $user, $password, $dbn);
    mysqli_set_charset($connect, "UTF8");

    

    // Database connection check

    /*

        if($connect){
            echo "CONNECTION SUCCESSFUL";
        }
        else
        {
            echo "CONNECTION FAILED";
        }

    */
    
?> <!-- END OF PHP CODE BLOCK -->