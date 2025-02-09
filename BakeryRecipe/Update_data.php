<?php
    session_start();
    include "DatabaseConnect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $newUsername = $_POST["username"];
        $newEmail = $_POST["email"];
        $newPassword = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        $newFname = $_POST["fname"];
        $newLname = $_POST["lname"];
        $newConfirmPassword = $_POST["confirm_password"];
        $newConfirmPassword = htmlspecialchars(trim($newConfirmPassword));

        // Validate and sanitize the data
        $newUsername = htmlspecialchars(trim($newUsername));
        $newFname = htmlspecialchars(trim($newFname));
        $newLname = htmlspecialchars(trim($newLname));
        $newEmail = filter_var($newEmail, FILTER_VALIDATE_EMAIL) ? $newEmail : null;
        $newPassword = htmlspecialchars(trim($newPassword));

        // Update the user data in the database
        if ($newUsername !== null && $newEmail !== null && $newFname != null && $newLname != null) {
            // Check if the password and confirm password match
            if (!$newPassword || ($newPassword && $newPassword === $newConfirmPassword)) {
                $sql = "UPDATE user
                    SET  Fname = '$newFname',
                        Lname = '$newLname',
                        Email = '$newEmail',
                        Password = '$newPassword'
                    WHERE UserId = '$newUsername'";

                if ($conn->query($sql) === true) {
                    $_SESSION['update_success'] = "User data updated successfully";
                    header('Location: Profile.php');
                } else {
                    $_SESSION['update_error'] = "Error updating user data: " . $conn->error;
                    header('Location: Profile.php');
                }
            } else {
                $_SESSION['update_error'] = "Password and confirm password do not match.";
                header('Location: Profile.php');
            }
        } else {
            $_SESSION['update_error'] = "Invalid data submitted.";
            header('Location: Profile.php');
        }
    } else {
        echo "Invalid request.";
    }

    // Close the database connection (assuming $conn is defined in DatabaseConnect.php)
    $conn->close();
?>