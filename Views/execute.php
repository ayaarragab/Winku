<?php
// Check if the 'function' parameter is set in the URL
// handle all types of arguments send what you need in the query string!!
if(isset($_GET['function'])) {
    // Get the value of the 'function' parameter
    $functionToExecute = $_GET['function'];

    // Check if the specified function exists
    if(function_exists($functionToExecute)) {
        // Call the specified function
        call_user_func($functionToExecute);
    } else {
        echo "Function does not exist.";
    }
}

// Define the PHP function to execute

