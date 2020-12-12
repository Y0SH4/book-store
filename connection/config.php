<?php

    $dbserver   = "localhost";
    $dbname     = "root";
    $dbpass     = "koplek90";
    $db         = "book_store";

    // create connection
    $conn = mysqli_connect($dbserver, $dbname, $dbpass, $db);

    //check connection
    if (!$conn){

        die("connection failed: " . mysqli_connect_error());

    }

    echo "Connection Success!!";


 ?>