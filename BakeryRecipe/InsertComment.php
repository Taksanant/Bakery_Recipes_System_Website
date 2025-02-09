<?php
session_start();
include_once('DatabaseConnect.php');

function currentreviewId($conn){
    $sql = "SELECT MAX(ReviewId) AS MaxId FROM review";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    if($data['MaxId'] === null){
        return 1;
    }
    return $data['MaxId'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
}

$userid = $_SESSION['UserId'];
$reviewId = currentreviewId($conn) + 1;
$bakeid = $_SESSION['BakeCommentInsert'];

if($comment != ""){
    echo $reviewId . "==" . $comment . "==". $userid . "==". $bakeid;
    $sql = "INSERT INTO review (ReviewId, Comment, DateReview, UserId, BakeryId) VALUES ($reviewId, '$comment', NOW(), '$userid', $bakeid)";
    if ($conn->query($sql) === TRUE) {
        echo "Comment inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// $comment = "";
    
$conn->close();
header('Location: Recipe_post.php?id='.$bakeid);
echo "123";
?>