<?php
require_once('./connect.php');

$project_name = $_POST['project_name'];
$project_category = $_POST['project_category'];
$project_desc = $_POST['project_disc'];
$project_date = $_POST['project_date'];
$project_seo = $_POST['project_seo'];

// File upload handling
$targetDir = "./assets/images/projects/";  // Specify your upload folder
$targetFile = $targetDir . basename($_FILES['project_image']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES['project_image']['tmp_name']);
if ($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES['project_image']['size'] > 1000000) {
    echo "Sorry, your file is too large. It should be 1 MB or smaller.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // Move the file to the specified folder
    $project_img = $project_name . "." . $imageFileType; // Set image name using $project_name
    if (move_uploaded_file($_FILES['project_image']['tmp_name'], $targetDir . $project_img)) {
        // echo "The file " . basename($_FILES['project_image']['name']) . " has been uploaded.";

        // Insert image information into MySQL database
        mysqli_query($conn, "
        INSERT INTO project(
            project_name,
            project_category_id,
            project_desc,
            project_date,
            project_img,
            project_seo
        ) VALUES (
            '$project_name',
            '$project_category',
            '$project_desc',
            '$project_date',
            '$project_img',
            '$project_seo'
        )") or die(mysqli_error($conn));
      
    } 
}

 echo ("<script LANGUAGE='JavaScript'>
        window.history.go(-2);
        </script>");
        

// Close database connection
mysqli_close($conn);
?>