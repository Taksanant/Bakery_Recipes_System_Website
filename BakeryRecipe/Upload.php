
<?php
session_start();
include_once "DatabaseConnect.php";
$userId = $_SESSION['UserId'];
$target_dir = "RecipeSystem/img/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if ($check !== false) {
        $_SESSION['update_error'] = "File is an image - " . $check["mime"] . ".";

        // Check if file already exists
        if (file_exists($target_file)) {
          $picPath = "http://localhost:3000/RecipeSystem/img/" . $_FILES["imageUpload"]["name"];
          $sql = "UPDATE user SET ProfilePicPath = '$picPath' WHERE UserId = '$userId'";
          $conn->query($sql);
          $_SESSION['update_success'] = "Your profile has been uploaded.";
          header('Location: Profile.php');
          $uploadOk = 0;
        }
        
        header('Location: Profile.php');
        $uploadOk = 1;
    } else {
        $_SESSION['update_error'] = "File is not an image.";
        header('Location: Profile.php');
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["imageUpload"]["size"] > 50000000) {
    $_SESSION['update_error'] = "Sorry, your file is too large. Sorry, your file was not uploaded.";
    header('Location: Profile.php');
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    $_SESSION['update_error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. Sorry, your file was not uploaded.";
    header('Location: Profile.php');
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['update_error'] = "Sorry, your file was not uploaded.";
    header('Location: Profile.php');

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        $_SESSION['update_success'] = "The file " . htmlspecialchars(basename($_FILES["imageUpload"]["name"])) . " has been uploaded.";
        $picPath = "http://localhost:3000/RecipeSystem/img/" . $_FILES["imageUpload"]["name"];
        $sql = "UPDATE user SET ProfilePicPath = '$picPath' WHERE UserId = '$userId'";
        $conn->query($sql);
        header('Location: Profile.php');

    } else {
        $_SESSION['update_error'] = "Sorry, there was an error uploading your file. Sorry, your file was not uploaded.";
        header('Location: Profile.php');
    }
}
?>