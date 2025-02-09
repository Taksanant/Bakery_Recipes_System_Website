<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakinglist Detail</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="./bakinglist.css">
    <link rel="stylesheet" type="text/css" href="./navbar.css">
</head>
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
    .card-container {
        padding: 50px 75px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
    }

    .card {
        box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
        border-radius: 30px;
        background-image: linear-gradient(#e8c68e34, #e89a8e61, #e89a8e8a, #E89A8E);
        margin: 12px;
        padding: 10px;
        width: 190px;
        height: 280px;
        overflow: auto;

        .namebakery {
            font-size: 18px;
            margin-left: 10px;
        }

        .namebakery,
        .image {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        a {
            text-decoration: none;
            /* padding: 15px; */

            img {
                height: 140px;
                width: 140px;
                object-fit: cover;
                border-radius: 7%;
                margin-bottom: 5px;
            }
        }

        a:hover {
            transition: .5s;
            color: #A2673B;
        }

        img:hover {
            opacity: 0.7;
            transition: .5s;
        }
    }
    .heading{
        font-family: "Poller One", serif;
        font-size: 30px;
        padding: 40px 0 0 80px;
    }
</style>

<body>
    <nav class="navbar">
        <a href="./home.php" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./recipes.php">Recipes</a></li>
                <li><a href="./community.php">Community</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="leftbar">
            <a href="./bakinglist.php">
                <i class='bx bxs-heart-circle'></i>
            </a>
            <div class="dropdown">
                <i class='bx bxs-user-circle'></i>
                <div class="dropdown-content">
                    <a href="./profile.php">Profile</a>
                    <a href="./sign-in.php">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>
 <?php
            if(isset($_GET['FavLisName'])) {
                $favLisName = urldecode($_GET['FavLisName']);
                $favlisId = urldecode($_GET['FavId']);
                $fid = intval($favlisId);
                echo "<div class= \"heading\">" . $favLisName . "";
                
                //echo "<h1>$favLisName</h1>"; // Displaying the FavLisName dynamically

            } else {
                echo "FavLisName parameter not found in the URL.";
            }

            include("DatabaseConnect.php");

            $sql = "SELECT * FROM favoritelist";
            $result = $conn->query($sql);

            $db = "SELECT * FROM databaseproject.`all-bakery`";
            $dbbake = $conn->query($db);

            // Fetch all rows from $dbbake into an array
            $dbbake_rows = [];
            while ($row_dbbake = $dbbake->fetch_assoc()) {
                $dbbake_rows[] = $row_dbbake;
            }

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $postfavid = $row['FavId'];
                $pfid = intval($postfavid);

                if ($pfid === $fid) {
                    $sql_bakery = "SELECT * FROM bakeryfavorite WHERE FavId = $pfid";
                    $result_bakery = $conn->query($sql_bakery);

                    if ($result_bakery->num_rows > 0) {
                        while ($row_bakery = $result_bakery->fetch_assoc()) {
                            $bakeid = $row_bakery['BakeryId'];
                            $bid = intval($bakeid);
                            foreach ($dbbake_rows as $row_db) {
                                $postBekeryid = $row_db['BakeryId'];
                                $postTitle = $row_db['BakeryName'];
                                $postImage = $row_db['BakeryPicPath'];
                                $pbid = intval($postBekeryid);
                                if ($bid === $pbid) {
                                    echo '<div class="card-container"></div>';
                                }
                            }
                        }
                    }
                    break;
                }
            }
        }
?> 
    <footer></footer>

    <script>

        const cardData = [<?php
            $sql = "select BakeryName,BakeryPicPath, bakeryrecipe.BakeryId as B from bakeryrecipe,bakeryfavorite where bakeryrecipe.BakeryId = bakeryfavorite.BakeryId 
            and FavId = ".$_GET['FavId']."";
            $respone = $conn->query($sql);
            while($data = $respone->fetch_assoc()){
                echo" {
                    image: '".$data['BakeryPicPath']."',
                    namebakery: '".$data['BakeryName']."',
                    BakeryId: '".$data['B']."'
                },";
            }
        ?>
        ]

        const postContainer = document.querySelector('.card-container');
        const postMethods = () => {
            cardData.map((postData) => {
                const postElement = document.createElement('div');
                postElement.classList.add('card');
                postElement.innerHTML = `
        <div class="image">
                        <a href="./Recipe_post.php?id=${postData.BakeryId}" class="image-link">
                        <img src=${postData.image}
                alt="Baking list album picture">
                            
                        </a>
                    </div>
                    <div class="namebakery">
                        <a href="./Recipe_post.php" class="name-link">
                            ${postData.namebakery}
                        </a>
                    </div>
                    `
                postContainer.appendChild(postElement)
            })
        }
        postMethods()
    </script>

</body>

</html>
