<?php
// Check if the 'function' parameter is set in the URL
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
