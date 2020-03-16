<?php
// Define variables and initialize with empty values
$message ="";
$message_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate message
    $message = htmlentities($_POST['message']);
    if(empty(trim($_POST["message"]))){
        $message_err = "Please enter a message.";
    }
    // Check input errors before inserting in database
    if(empty($message_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO nhl_stenden_messages (message, userId) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_message, $param_userId);
            
            // Set parameters
            session_start();
            $param_userId = $_SESSION["id"]; 
            $param_message = $message;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
       
        // Close statement
        mysqli_stmt_close($stmt);
    }
   
    // Close connection
    mysqli_close($conn); 
}
?>