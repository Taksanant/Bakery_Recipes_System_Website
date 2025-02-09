<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poller+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Croissant+One&family=Nova+Square&display=swap');
    .search{
    display: flex;
    justify-content: flex-end;
    margin: 45px 80px;
        }
        .search-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 500px;
    border: 1px solid #A2673B;
    border-radius: 30px;
    padding: 10px 15px;
    background-color: #FBF7F4;
    font-size: 15px;
    cursor: pointer;
}
        .search-icon{
            position: absolute;
            margin: 7px 20px;
        }
        .bi-search{
            width: 25px;
            height: 25px;
        }
        button{
            background-color: #FBF7F4;
            border: none;
            cursor: pointer;
        }
        .button-nav{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px;
            /* width: 100%; */
        }
        .recipes-button{
            display: flex;
            margin: 15px;
            padding: 10px 30px;
            border: 2px solid lightgrey;
            background-color: #F5F5F5;
            font-family: "Croissant One", serif;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }
        a{
            text-decoration: none;
        }
        .recipes-button a{
            text-align: center;
        }

        a:link, a:visited{
            color: #000;
        }
        .recipes-button:hover{
            /* color: #E89A8E; */
            background-color: lightgrey;
            border-color: #A2673B;
            transition: .3s;
        }
        .image-link:hover{
            opacity: 0.7;
            transition: .5s;
        }
        .name-link:hover{
            color: #A2673B;
            transition: .5s;
        }

        .recipes-container .title{
            margin: 2.5% 0 0 6%;
            font-size: 20px;
        }
        .recipes-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section {
            position: relative;
            height: 550px;
            max-width: 1350px;
            width: 100%;
            display: flex;
            align-items: center;
        }
        .swiper {
            max-width: 1200px;
            width: 100%;
            height: 500px;
        }
        .container {
            border-radius: 20px;
        }
        .card .image {
            width: 320px;
            height: 320px;
            /* border-radius: 15px; */
            margin-bottom: 15px;
        }
        .card .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 7%;
        }
        .card {
            position: relative;
            background: #fff;
            box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
            border-radius: 30px;
            background-image: linear-gradient(#e8c68e34, #e89a8e61, #e89a8e8a, #E89A8E);
        }
        .card .card-content {
            position: relative;
            display: flex;
            /* align-items: center; */
            flex-direction: column;
            padding: 30px;
        }
        .card .name-bakery {
            display: flex;
            flex-direction: column;
            /* margin-left: -100px; */
            /* text-align: center; */
            color: #000;
            margin-bottom: 10px;
            line-height: 25px;
        }
        .name-bakery .name {
            font-size: 15px;
            font-weight: 600;
        }
        .name-bakery .baker {
            font-size: 15px;
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: lightgrey;
        }

        @media screen and (max-width:576px){
            .swiper {
                width: 85%;
            }
            .card .image {
                width: 350px;
                height: 350px;
            }
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }


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
            color: #A2673B;
            transition: .3s;
        }

        footer{
            height: 100px;
        }
            @import url('https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap');

        .container-header{
            background-image:
                linear-gradient(to bottom, #dfaba4ef, #ffffff99),
                url('https://img.freepik.com/free-photo/sweet-pastry-assortment-top-view_23-2148516578.jpg?w=740&t=st=1679021978~exp=1679022578~hmac=30ff4eac15ba95166571f950590e818ff713761860257a2d0be63eb26e24cedd');
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 95%;
            height: 300px;
            margin: 1% 2.5%;
            border: 1px solid #A2673B;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
        }
        .title-header{
            margin: 60px 0 0 0;
        }
        .title-header, .title{
            font-family: "Croissant One", serif;
        }
        .title h2{
            margin: 80px 0 20px 0;
        }
        .recommend-container .title{
            margin: 2.5% 0 0 6%;
            font-size: 20px;
        }
        .bi-search{
            position: absolute;
            margin: -18px -25px;
            width: 25px;
            height: 25px;
        }
        p{
            margin-bottom: 50px;
        }
        .center{
            text-align: center;
        }
        .box-1{
            display: flex;
            justify-content: space-between;
        }
        <?php 
        include_once("DatabaseConnect.php");
        $sql = "SELECT * FROM bakeryrecipe";
        $result = $conn->query($sql);$i =1;
        while($data = $result->fetch_assoc()){
            echo".save-".$i."{
                cursor: pointer;
                position: absolute;
                z-index: 2;
                top: 17%;
                left: 77%;
                stroke: #000;
                width: 35px;
                fill: red;
                fill-opacity: 0;
                transition: transform .5s;
            }";
            $i++;
        }?> 
        .bi-bookmark-fill-click-1, .bi-bookmark-fill-click-2, .bi-bookmark-fill-click-3, .bi-bookmark-fill-click-4{
            animation: anim-click .6s ease-out forwards;
            stroke: red;
        }
        .circle{
            position: absolute;
            z-index: 1;
            top: 15%;
            left: 73.5%;
            background-color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
        }
        .bi-star{
            font-size: 30px;
            margin: 0 5px 0 0;
        }
        .recommend{
            background-image:
                linear-gradient(to bottom, #cff0d4a2, #cff0d41f),
                url('https://miro.medium.com/v2/resize:fit:828/format:webp/0*3F3js8_Oq7EwbbCu');
            background-size: cover;
            width: 90%;
            margin: auto;
            border-radius: 20px;
            border: 1px solid #A2673B;
            box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
        }
        .title-festival{
            margin: 10px 0 0 0;
            padding: 70px 0 0 0;
            text-align: center;
            font-family: "Rammetto One", sans-serif;
            font-weight: 400;
            font-size: 35px;
            color: #fff;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #A2673B;
            text-transform: uppercase;
        }
        .in-recommend-container{
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
        }
        .recommend-card{
            margin: 50px 30px 50px 30px;
            /* border: 1px solid black; */
            border-radius: 15px;
        }
        .recommend-card img{
            width: 350px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            border: 1px solid #A2673B;
        }
        .recommend-card p{
            font-weight: 600;
            text-transform: capitalize;
            background-color: #e89a8ec1;
            padding: 10px;
            margin-top: -50px;
            border-radius: 15px;
            position: absolute;
            width: 350px;
        }
        .recommend-card img:hover{
            opacity: 0.8;
            transition: .5s;
        }
        .recommend-card p:hover{
            color: #A2673B;
            transition: .3s;
        }

        @keyframes anim-click{
            0%{
                transform: scale(1);
                fill-opacity: 0;
            }
            25%{
                fill-opacity: 1;
            }
            45%{
                transform: scale(0.8);
            }
            70%{
                transform: scale(1.2);
            } 
            100%{
                transform: scale(1);
                fill-opacity: 1;
            } 
        }
</style>

<body>
    <nav class="navbar" style="border-bottom: none;">
        <a href="Home.php" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="Home.php" class="active">Home</a></li>
                <li><a href="Recipes.php">Recipes</a></li>
                <li><a href="Community.php">Community</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>
        </div>
        <div class="leftbar">
            <a href="Bakinglist.php">
                <i class='bx bx-heart-circle'></i>
            </a>
            <div class="dropdown">
                <i class='bx bxs-user-circle'></i>
                <div class="dropdown-content">
                    <a href="Profile.php">Profile</a>
                    <a href="index.php">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-header">
        <div class="title-header">
            <h1>What do you want to eat ?</h1>
        </div>
        <div class="search">
            <a href="Search.php">
                <search>
                    <form action="">
                        <input type="search" id="recipes-search" name="recipes-search" placeholder="Find the recipes"
                            class="search-container" readonly>
                    </form>
                    <script>
                    document.getElementById("recipes-search").readOnly = true;
                    </script>
                </search>
            </a>
            <form action="Search.php" class="search-icon">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </form>
        </div>
        <p>Search any recipes e.g: cake, sugar, bread.</p>
    </div>

    <div class="recipes-container">
        <div class="title">
            <h2>Recommend Recipes</h2>
        </div>
    <div class="recipes-box">
    <section>
        <div class="swiper mySwiper-7 container">

        <div class="swiper-wrapper content">
            <?php
            include_once("DatabaseConnect.php");
            $sql = "SELECT * FROM bakeryrecipe";
            $result = $conn->query($sql);
            $i = 1;
            while($data = $result->fetch_assoc()){
                echo'        
                <div class="swiper-slide card">
                <div class="card-content">
                    <div class="name-bakery center">
                        <a href="Recipe_post.php" class="name-link">
                            <span class="name">'.$data['BakeryName'].'</span>
                        </a>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-bookmark-fill save-'.$i.'" viewBox="0 0 16 16">
                        <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                    <canvas class="circle"></canvas>
                    <div class="image">
                        <a href="Recipe_post.php?id='.$data['BakeryId'].'" class="image-link">
                            <img src="'.$data['BakeryPicPath'].'" alt="Rainbow Donuts">
                        </a>
                    </div>
                    <div class="box-1">
                        <span class="by-baker">By '.$data['Fname'].'</span>
                        <span class="like">420 Likes</span>
                    </div>
                    <div class="box-2">
                        <i class="bi bi-star"></i>
                        <span class="rate">4.8 out of 5 stars!</span>
                    </div>
                </div>
            </div>';$i++;
            }
            ?>
        </div>
        </div>
    <div class="swiper-button-next swiper-button-next-7"></div>
    <div class="swiper-button-prev swiper-button-prev-7"></div>
    </section>
    </div>
    </div>

    <div class="recommend-container">
        <div class="title">
            <h2>Holidays’ Recommend</h2>
        </div>
        <div class="recommend">
        <div class="title-festival">Merry Christmas</div>
        <div class="in-recommend-container">
            <div class="recommend-card">
                <a href="Recipe_post.php">
                    <img src="https://petitandsmall.com/wp-content/uploads/2017/12/Christmas-treats-snowman-cupcakes.jpg" alt="Nepali spiced fruit and nut tart">
                </a>
                <a href="Recipe_post.php"><p>Nepali spiced fruit and nut tart</p></a>
            </div>
            <div class="recommend-card">
                <a href="Recipe_post.php">
                    <img src="https://preppykitchen.com/wp-content/uploads/2022/03/Chocolate-Lava-Cake-Feature.jpg" alt="Chocolate Lava">
                </a>
                <a href="Recipe_post.php"><p>Chocolate Lava</p></a>
            </div>
            <div class="recommend-card">
                <a href="Recipe_post.php">
                    <img src="https://preppykitchen.com/wp-content/uploads/2022/05/Strawberry-Cake-Feature.jpg" alt="Strawberry Cake">
                </a>
                <a href="Recipe_post.php"><p>Strawberry Cake</p></a>
            </div>
        </div>
        </div>
    </div>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script-home.js"></script>
    <script>
        <?php
        while($data = $result->fetch_assoc()){
            echo"const Save1 = document.querySelector('.save-".$i."');
            document.querySelector('.save-".$i."').addEventListener('click', () => {
                Save1.classList.toggle('bi-bookmark-fill-click-".$i."');
            });";
            $i++;
        }?>
            var swiper = new Swiper(".mySwiper-7", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                grabCursor: 'true',
                centerSlide: 'true',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next-7",
                    prevEl: ".swiper-button-prev-7",
                },

                breakpoints:{
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    },
                },
            });
    </script>
    
</body>

</html>

<?php

?>