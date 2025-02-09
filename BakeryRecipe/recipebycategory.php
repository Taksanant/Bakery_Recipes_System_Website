<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="./recipes.css">
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

    body {
        background-color: #FBF7F4;
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        border-bottom: 1px solid #000;
    }

    .topbar {
        /* background-color: #666; */
        display: flex;
        /* Make Flex container */
        justify-content: center;
        /* Center horizontally */
    }

    .topbar ul {
        list-style-type: none;
        margin: 10px;
        padding: 0;
        font-size: 20px;
    }

    .topbar li {
        display: inline-block;
        /* float: left; */
    }

    a {
        text-decoration: none;
    }

    a:link,
    a:visited {
        color: #000;
    }

    .topbar a {
        padding: 15px 20px;
        text-decoration: none;
        display: inline-block;
        color: #000;
    }

    .topbar a:hover {
        color: #A2673B;
        transition: .3s;
    }

    .active {
        font-weight: bold;
    }

    .sweetmade {
        /* float: left; */
        position: absolute;
        margin: 20px 40px;
        font-family: "Poller One", serif;
        font-size: 35px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .leftbar {
        /* position: absolute; */
        float: right;
        margin: -60px 40px;
    }

    .bx {
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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
    .dropdown-content a:hover {
        background-color: lightgrey;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        transition: .5s;
        display: block;
        right: 5%;
    }

    .breadcrumb {
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

    footer {
        height: 100px;
    }

    .search {
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

    .search-icon {
        position: absolute;
        margin: 7px 20px;
    }

    .bi-search {
        width: 25px;
        height: 25px;
    }

    button {
        background-color: #FBF7F4;
        border: none;
        cursor: pointer;
    }

    .button-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px;
        /* width: 100%; */
    }

    .recipes-button {
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

    a {
        text-decoration: none;
    }

    .recipes-button a {
        text-align: center;
    }

    a:link,
    a:visited {
        color: #000;
    }

    .recipes-button:hover {
        /* color: #E89A8E; */
        background-color: lightgrey;
        border-color: #A2673B;
        transition: .3s;
    }

    .image-link:hover {
        opacity: 0.7;
        transition: .5s;
    }

    .name-link:hover {
        color: #A2673B;
        transition: .5s;
    }

    .recipes-container .title {
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
        font-size: 25px;
        font-weight: 600;
    }

    .name-bakery .baker {
        font-size: 15px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: lightgrey;
    }

    @media screen and (max-width:576px) {
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
</style>

<body>
    <nav class="navbar">
        <a href="Home.php" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Recipes.php" class="active">Recipes</a></li>
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

    </div>
    <div class="search">
        <a href="Search.php">
        <search>
            <form action="./Search.php">
            <input type="search" id="recipes-search" name="recipes-search"
       placeholder="Find the recipes" class="search-container" readonly>
                </form>
                <script>
                    document.getElementById("recipes-search").readOnly = true;
                    </script>
            </form>
        </search>
</a>
        <form action="./Search.php" class="search-icon">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </form>
    </div>
    <div class="button-nav">
    <div class="recipes-button">
            <a href="recipebycategory.php?id=Breads">Breads</a>
        </div>
        <div class="recipes-button">
            <a href="recipebycategory.php?id=Cakes">Cakes</a>
        </div>
        <div class="recipes-button">
            <a href="recipebycategory.php?id=Cookies">Cookies</a>
        </div>
        <div class="recipes-button">
            <a href="recipebycategory.php?id=Cupcakes">Cupcakes</a>
        </div>
        <div class="recipes-button">
            <a href="recipebycategory.php?id=Doughnuts">Doughnuts</a>
        </div>
        <div class="recipes-button">
            <a href="recipebycategory.php?id=Gluten-free">Gluten-free</a>
        </div>
    </div>
    <div class="recipes-container">
        <div class="title" id="Breads">
            <?php $Category = $_GET['id'];?>
            <h2><?php echo $Category?></h2>
        </div>
        <div class="recipes-box">
            <section>
                <div class="swiper mySwiper-1 container">
                    <div class="swiper-wrapper content">
                    <?php
            $Category = $_GET['id'];
            include_once("DatabaseConnect.php");
            $sql = "SELECT * FROM user, bakeryrecipe, havecategorytag, category WHERE user.UserId = bakeryrecipe.UserId
            AND bakeryrecipe.BakeryId = havecategorytag.BakeyId 
            AND havecategorytag.CategoryId = category.CategoryId
            AND category.categoryName = '$Category' ";
            $result = $conn->query($sql);
            $i = 1;
            while($data = $result->fetch_assoc()){
                $BakeryName = $data['BakeryName'];
                $UserId = $data['UserId'];
                $Picpath = $$data['BakeryPicPath'];
                $BakeryId = $data['BakeryId'];
                echo"       
                <div class='swiper-slide card'>
                            <div class='card-content'>
                                <div class='image'>
                                    <a href='Recipe_post.php?id=".$BakeryId."' class='image-link'>
                                        <img src='$Picpath'
                                            alt='$BakeryName'>
                                    </a>
                                </div>
                                <div class='name-bakery'>
                                    <a href='Recipe_post.php?id=".$BakeryId."' class='name-link'>
                                        <span class='name'>$BakeryName</span>
                                    </a>
                                    <span class='baker'>$UserId</span>
                                </div>
                            </div>
                        </div>";
            };
            ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next-1"></div>
                <div class="swiper-button-prev swiper-button-prev-1"></div>
            </section>
        </div>
    </div>


    

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script-recipes.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper-1", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                grabCursor: 'true',
                centerSlide: 'true',
                // loopFillGroupWithBlank: true,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
                navigation: {
                nextEl: ".swiper-button-next-1",
                prevEl: ".swiper-button-prev-1",
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

            var swiper = new Swiper(".mySwiper-2", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            grabCursor: 'true',
            centerSlide: 'true',
            // loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-2",
                prevEl: ".swiper-button-prev-2",
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

            var swiper = new Swiper(".mySwiper-3", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            grabCursor: 'true',
            centerSlide: 'true',
            // loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-3",
                prevEl: ".swiper-button-prev-3",
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

            var swiper = new Swiper(".mySwiper-4", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            grabCursor: 'true',
            centerSlide: 'true',
            // loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-4",
                prevEl: ".swiper-button-prev-4",
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

            var swiper = new Swiper(".mySwiper-5", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            grabCursor: 'true',
            centerSlide: 'true',
            // loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-5",
                prevEl: ".swiper-button-prev-5",
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

            var swiper = new Swiper(".mySwiper-6", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            grabCursor: 'true',
            centerSlide: 'true',
            // loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-6",
                prevEl: ".swiper-button-prev-6",
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script-home.js"></script>

</body>

</html>
<?php

?>