<?php 
session_start();
include_once("DatabaseConnect.php");


        if(isset($_POST['addlist'])){
            $list = $_POST['list'];
            $timezone = date("Y-d-m");
            require_once "DatabaseConnect.php";
            $userid = $_SESSION['UserId'];
            $id = "SELECT * FROM user WHERE UserId = '$userid'";
            $result = $conn->query($id);
            $row = mysqli_fetch_assoc($result);
            $user = $row['UserId'];
            $favid = getcurrentFavId($conn)+1;
            $sql = "INSERT INTO favoritelist(FavId,FavLisName,DateCreate,UserId) VALUES ('$favid','$list','$timezone','$user')";
            // $sql = "INSERT INTO role VALUES (4,'$list')";
            $conn->query($sql);
            echo"success !!!";
            echo $list;
            echo $timezone;
            echo $user;
            echo $favid;
            echo gettype(12);
            header("Location: Bakinglist.php");
            // $sql1 = SELECT * FROM FavLisName;
            // $result1 = $conn->query($sql1);
        }else if(isset($_POST['delete']) && $_POST['deleteClicked'] === 'true'){
            $id = intval($_POST['FavId']); // Make sure the id is an integer
            $sql = "DELETE FROM favoritelist WHERE FavId = $id";
            if ($conn->query($sql) === TRUE ) {
                header("Location: Bakinglist.php");
            } else {
                echo "Error deleting entry: " . $conn->error;
            }
        }else if(isset($_POST['delete_history'])){
            $conn->query("SET FOREIGN_KEY_CHECKS=0");
            // Check if BakeryId is set in the POST data
            if(isset($_POST['BakeryId'])) {
                // Sanitize and retrieve the BakeryId from POST data
                $id = intval($_POST['BakeryId']); // Make sure the id is an integer
                
                // Prepare and execute the SQL DELETE query
                $sql = "DELETE FROM bakeryrecipe WHERE BakeryId = $id";
                if ($conn->query($sql) === TRUE ) {
                    // If deletion is successful, you can redirect or output a success message
                    header("Location: Profile.php");
                    echo "delete success";
                } else {
                    // If there's an error with the deletion, output the error message
                    echo "Error deleting entry: " . $conn->error;
                }
            $conn->query("SET FOREIGN_KEY_CHECKS=1");
            } else {
                // If BakeryId is not set in the POST data, output an error message
                echo "BakeryId not found in POST data";
            }
        }
        

    function getcurrentFavId($conn){
        $sql = "SELECT MAX(FavId) as maxId FROM favoritelist";
        $respone = $conn->query($sql);
        $data = $respone->fetch_assoc();
        if($data['maxId'] === null){
            return 1;
        }
        return  $data['maxId'];

    }

?>



<style>
        @import url('https://fonts.googleapis.com/css2?family=Poller+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Croissant+One&family=Nova+Square&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        body{
            background-color: #FBF7F4;
            font-family: 'Poppins', sans-serif;
        }

        .navbar{
            border-bottom: 1px solid #000;
        }
        .topbar{
            /* background-color: #666; */
            display: flex;  /* Make Flex container */
            justify-content: center; /* Center horizontally */
        }
        .topbar ul{
            list-style-type: none;
            margin: 10px;
            padding: 0;
            font-size: 20px;
        }
        .topbar li{
            display: inline-block;
            /* float: left; */
        }
        a{
            text-decoration: none;
        }
        a:link, a:visited{
            color: #000;
        }
        .topbar a{
            padding: 15px 20px;
            text-decoration: none;
            display: inline-block;
            color: #000;
        }
        .topbar a:hover{
            color: #A2673B;
            transition: .3s;
        }
        .active{
            font-weight: bold;
        }

        .sweetmade{
            /* float: left; */
            position: absolute;
            margin: 20px 40px;
            font-family: "Poller One", serif;
            font-size: 35px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .leftbar{
            /* position: absolute; */
            float: right;
            margin: -60px 40px;
        }

        .bx{
            font-size: 50px;
            cursor: pointer;
        }
        
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: lightgrey;}
        
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            transition: .5s;
            display: block;
            right: 5%;
        }

        .breadcrumb{
            margin: 2% 0 0 5%;
        }

        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
        }
        
        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }
        
        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: #000;
            content: "\003E";
        }
        
        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #000;
            text-decoration: none;
        }
        
        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #E89A8E;
            transition: .3s;
        }

        footer{
            height: 100px;
        }
            
        .title-text{
            margin: 50px;
        }
        h2{
            font-family: "Poller One", serif;
            font-size: 30px;
        }
        .title-text h2{
            margin: 0 0 0 25px;
        }

        .text2 h3{
            font-size: 20px;
            padding: 15px 0 0 15px;
        }

        p{
            font-size: 16px;
            margin-left: 15px;
        }

        .text1{
            font-size: 16px;
            margin-left: 15px;
            margin-top: 45px;
        
        }

        img{
            border-radius: 20px;
            width: 130px;
            height: 130px;
            object-fit: cover;
            margin: 10px;
        }
        .container{
            display: flex;
            justify-content: space-between;
        }

        .container-1{
            background-color: #f0d3cf;
            height: 150px;
            margin: auto;
            width: 90%;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
        }

        .addBakingListButton {
            background-color: #a2683bb6;
            /* width: fit-content; */
            height: fit-content;
            border-radius: 20px;
            display: flex;
            align-items: center;
            /* padding: 5px; */
            margin: 50px 80px 10px 70px;
            cursor: pointer;
        }

        .add-bakinglist{
            font-size: 20px;
            margin: 0 15px 0 0;
        }

        .popup {
            box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
            position: absolute;
            background-color: #FBF7F4;
            display: none;
            position: absolute;
            /* Not rocket science here */
            top: 25%;
            left: 25%;
            width: 50%;
            height: 40%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 20px;
            z-index:20010;
            overflow: auto;
            /* color: pink; */
        
            /* Animation */
            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            -ms-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
            opacity: 1;

            /* Phone number */
            .popup-text {
                margin: 6% 5%;
                color: #000;
                /* text-align: center; */
            }
        }

        /* Close button */
        .popup-close {
            text-align: right;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.0em;
        }

        a:hover{
            transition: .5s;
        }
        .bakinglistname{
            background-color: #f0d3cfbf;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            width: 350px;
            height: 50px;
            padding: 0 15px;
        }
        .add{
            font-size: 20px;
            display: block;
            margin: auto;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            background-color: #a2683bb6;
            cursor: pointer;
        }
</style>
