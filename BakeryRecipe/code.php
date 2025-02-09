<?php

    
    session_start();
    $userId = $_SESSION['UserId'];

    $_SESSION['BakeCommentInsert'] = $_GET['id'];
    echo $_SESSION['BakeCommentInsert'];

    include_once("DatabaseConnect.php");

    if(isset($_POST['report-sent'])){
        $userRequested =  $_POST['title'];

        foreach($userRequested as $reportId) {
            $dupesql = "SELECT * FROM userreport where (UserId = '$userId' AND reportId = '$reportId' AND BakeryId = ".$_GET['id'].")";

            $duperaw = mysqli_query($conn,$dupesql);

            if (mysqli_num_rows($duperaw) > 0) {
                //your code ...
                $_SESSION['status'] = "You have already reported.!!";
                header("Location: Recipe_post.php?id=".$_SESSION['BakeCommentInsert']);
            }else{

                $sql = "INSERT INTO userreport (UserId, reportId, BakeryId) VALUES ('$userId', '$reportId',".$_GET['id'].")";
                
                if($conn -> query($sql)){
                    $_SESSION['status'] = "Report Successfully.!!";
                    header("Location: Recipe_post.php?id=".$_SESSION['BakeCommentInsert']);
                }
                else{
                    break;
                    $_SESSION['status'] = "Report failed.!!";
                    header("Location: Recipe_post.php?id=".$_SESSION['BakeCommentInsert']);
                }
            }

        }
    }
    header("Location: Recipe_post.php?id=".$_SESSION['BakeCommentInsert']);


?>

