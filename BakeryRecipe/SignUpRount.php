<?php
    session_start();
    include ("DatabaseConnect.php");

    class SignUp{
        private $db; 
        
        public function __construct($conn) {
            $this->db = $conn; 
        }

        public function register($fname,$lname,$email, $phone, $username, $pass) {
            $sql = "INSERT INTO user (Fname, Lname, Email, PhoneNumber, UserId, Password, RoleId) VALUES ('$fname','$lname','$email','$phone','$username','$pass',2)";
            $this->db->query($sql);
            $_SESSION['UserId'] = $username;
            $this->db->close();
        }
    }

    $SignUp = new SignUp($conn);
    if(isset($_POST['signup'])){
        if(empty($_POST['fname'] || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['useername']) || empty($_POST['pass']))){
            $_POST['signup'] = null;
            exit();
        }else{
            $SignUp->register($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phone'],$_POST['username'],$_POST['pass']);
            header("Location: Home.php");
        }
    }
    else{
        exit();
    }
?>
