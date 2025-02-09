<?php
    session_start();
    $userId = $_SESSION['UserId'];

    include_once("DatabaseConnect.php");

    // echo "post";
    if (isset($_GET['BakeryId']) || isset($_GET['FavId'])) {
        $bakeId = urldecode($_GET['BakeryId']);
        $favId = urldecode($_GET['FavId']);
        $sql = "select * from bakeryfavorite where FavId = $favId and BakeryId = $bakeId ";
        $respone = $conn->query($sql);
        $data = $respone->fetch_assoc();
        if($data === null){
            $insert_sql = "INSERT INTO bakeryfavorite (FavId, BakeryId) VALUES ('$favId', '$bakeId')";
            if($conn->query($insert_sql)) {
                echo "Bakery added to favorites successfully.";

            } else {
                echo "Error: " . $conn->error;
            }
        }
        
    }
    header("Location: Recipe_post.php?id=".$bakeId."");


?>