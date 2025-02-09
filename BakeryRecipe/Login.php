<?php
session_start();
require_once "DatabaseConnect.php";

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($userId, $password) {
       
        $userId = $this->validateInput($userId);
        $password = $this->validateInput($password);

        if (empty($userId) || empty($password)) {
            $error = "Username or password is required.";
            header("Location: index.php?error=$error");
            exit();
        }

        $sql = "SELECT * FROM user WHERE UserId = '$userId' AND Password = '$password'";
        $stmt = $this->conn->query($sql);
        
        if (mysqli_num_rows($stmt) === 1) {
            $row = mysqli_fetch_assoc($stmt);
            $_SESSION['UserId'] = $row['UserId'];
            header("Location: home.php");

            exit();
        } else {
            $error = "Incorrect username or password.";
            header("Location: index.php?error=$error");
            exit();
        }

        $stmt->close();
    }

    private function validateInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function getId(){
        return $userId;
    }
}

$user = new User($conn);
if (isset($_POST['userId']) && isset($_POST['password'])) {
    $user->login($_POST['userId'], $_POST['password']);
} else {
    header("Location: index.php");
    exit();
}
