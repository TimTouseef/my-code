<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

       /* $PostTitle = $_POST['PostTitle'];
        $Description = $_POST['Description'];
        $image = $_POST['image'];
        if (isset($_POST['image'])) {
            // Your code to handle $_POST['image']
        } else {
            echo "Image is not set!";
        }

        $postTitle = isset($_POST['postTitle']) ? $_POST['postTitle'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : '';

if (empty($postTitle) || empty($description) || empty($image)) {
    echo "PostTitle, Description, and image cannot be empty!";
} else {
    // Your code to process the form data
}

        if($PostTitle != "" && $Description != "" && $image != "" ){
            $sql = "INSERT INTO results (`PostTitle`, `Description`, `image`) VALUES ('$PostTitle', '$Description', $image)";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "PostTitle, Description and image cannot be empty!";
        }
    }*/


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the necessary fields are set and not empty
        $postTitle = isset($_POST['postTitle']) ? $_POST['postTitle'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $image = isset($_POST['image']) ? $_POST['image'] : '';
    
        if (empty($postTitle) || empty($description) || empty($image)) {
            echo "PostTitle, Description, and image cannot be empty!";
        } else {
            // Process the form data
            // For example, you might insert the data into a database here
    
            // You can use the $postTitle, $description, $image variables here
            // ...
    
            // Redirect or display a success message
            header("Location: success.php");
            exit();
      
        }
    
   

?>