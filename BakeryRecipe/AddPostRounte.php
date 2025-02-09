<?php
include_once("DatabaseConnect.php");
session_start(); 

class addPost {
    private $db;
    private $runningIdBakeryId;
    private $runningIngreId;
    private $runningIdCategory;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function addpostBake($nameBakery, $Desc, $bakeryPic, $processDesc, $cookTime, $prepTime, $serving) {
        $this->runningIdBakeryId = $this->getCurrentBakeryId()+1;
        $userid = $_SESSION['UserId'];
        $sql = "INSERT INTO bakeryrecipe VALUES($this->runningIdBakeryId, '$nameBakery','$bakeryPic','$Desc' , CURDATE() , '$serving', '$cookTime', '$prepTime','$processDesc','$userid')";
        if ($this->db->query($sql) === TRUE) {
            echo "New bakery record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
        $_SESSION['BakeryId'] = $this->runningIdBakeryId;

    }

    public function addIngre($ingreName){
        $this->runningIngreId = $this->getCurrentIngreId() + 1;
        $sql = "SELECT IngreName,IngreId FROM databaseproject.ingrediants WHERE IngreName = '$ingreName'";
        $respone = $this->db->query($sql);
        $data = $respone->fetch_assoc();
        if($data === null){
            $sql = "INSERT INTO ingrediants VALUES($this->runningIngreId,'$ingreName')";
            $this->db->query($sql);
            $_SESSION['IngreId'] = $this->runningIngreId;
            echo" . . . !!!!! True in if !!!!! . . .  .";
        }else{
            
            $_SESSION['IngreId'] = $data['IngreId'];
            echo" . . . !!!!! false in else !!!!! . . .  .";
            return;
        }
        
    }
    public function getCategory(){
            $sql = "SELECT * FROM category where CategoryName = '".$_POST['category']."'";
            $respone = $this->db->query($sql);
            $data = $respone->fetch_assoc();
            $_SESSION['CategoryId'] = $data['CategoryId'];
        }

    public function addHaveIngre($unit){
        $bakeryId = $_SESSION['BakeryId'];
        $ingreId = $_SESSION['IngreId'];
        $sql = "SELECT * FROM haveingredients WHERE BakeryId = $bakeryId and IngreId = $ingreId and UnitAndDesc = '$unit'";
        $respone = $this->db->query($sql);
        $data = $respone->fetch_assoc();
        if($data === null ){
            $sql = "INSERT INTO haveingredients VALUES($bakeryId , $ingreId, '$unit')";
            $this->db->query($sql);
        }
    }

    public function addhaveCategory(){
        $this->getCategory();
        $bakeryId = $_SESSION['BakeryId'];
        $categoryId = $_SESSION['CategoryId'];
        $sql = "INSERT INTO havecategorytag VALUES($bakeryId,$categoryId)";
        $this->db->query($sql);
    } 

    private function getCurrentBakeryId(){
        $result=$this->db->query("SELECT MAX(BakeryId) as maxId FROM bakeryrecipe");
        $row = $result->fetch_assoc();
        if($row['maxId'] === null){
            return 0;
        }
        else{
            return $row['maxId'];
        }
    }
    private function getCurrentIngreId(){
        $result = $this->db->query("SELECT MAX(IngreId) as maxId FROM ingrediants");
        $row = $result->fetch_assoc();
        if($row['maxId'] === null){
            return 0;
        }
        else{
            return $row['maxId'];
        }
    }
    private function getCurrentCategoryId(){
        $result = $this->db->query("SELECT MAX(CategoryId) as maxId FROM Category");
        $row = $result->fetch_assoc();
        if($row['maxId'] === null){
            return 0;
        }
        else{
            return $row['maxId'];
        }
    }

}


$addPost = new addPost($conn);
$number = count($_POST["ingre"]);

$target_dir = "RecipeSystem/img/";
$target_file = $target_dir.basename($_FILES["inputImg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo"\nThis is cooking hour = \n".$_POST['cookinghour'];
if(isset($_POST["submitPost"])) {
    $check = getimagesize($_FILES["inputImg"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
            $picPath = "http://localhost:3000/RecipeSystem/img/".$_FILES["inputImg"]["name"];
            $cookingTime = $_POST['cookinghour'].":".$_POST['cookingmin'].":00";
            $prepTime = $_POST['prephour'].":".$_POST['prepmin'].":00";
            $addPost->addpostBake($_POST['bakeryName'], $_POST['desc'], $picPath, $_POST['method'],  $cookingTime,  $prepTime ,$_POST['serving']);
            $addPost->addhaveCategory();

            if($number > 0)  
            {  
                for($i=0;$i<$number;$i++){
                    $ingreName = $_POST['ingre'][$i];
                    $unit = $_POST['unit'][$i];
                    $addPost->addIngre($ingreName);
                    $addPost->addHaveIngre($unit);
                }
                echo "\nData Inserted\n";
                header("Location: Home.php");
                exit();
            }  
            else  
            {  
                echo "Please Enter Ingrediants Name";
                header("Location: Home.php");
                exit();  
            }
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["inputImg"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        header("Location: Home.php");
        exit();

    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["inputImg"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["inputImg"]["name"])). " has been uploaded.";
            $picPath = "http://localhost:3000/RecipeSystem/img/".$_FILES["inputImg"]["name"];
            $cookingTime = $_POST['cookinghour'].":".$_POST['cookingmin'].":00";
            $prepTime = $_POST['prephour'].":".$_POST['prepmin'].":00";
            $addPost->addpostBake($_POST['bakeryName'], $_POST['desc'], $picPath, $_POST['method'],  $cookingTime,  $prepTime ,$_POST['serving']);
            // $addPost->addCategory($_POST['category']);
            $addPost->addhaveCategory();

            if($number > 0)  
            {  
                for($i=0;$i<$number;$i++){
                    $ingreName = $_POST['ingre'][$i];
                    $unit = $_POST['unit'][$i];
                    $addPost->addIngre($ingreName);
                    $addPost->addHaveIngre($unit);
                }
                echo "\nData Inserted\n";
                header("Location: Home.php");
                exit();
            }  
            else  
            {  
                echo "Please Enter Ingrediants Name"; 
                header("Location: Home.php");
                exit(); 
            }

            // header("Location: Profile.php");

        } else {
            echo "Sorry, there was an error uploading your file.";
            header("Location: Home.php");
            exit();
        }
    }

?> 
