<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <!-- <link rel="stylesheet" type="text/css" href="./recipes_all.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

footer {
    height: 100px;
}

.search {
    display: flex;
    justify-content: flex-end;
    margin: 45px 80px;
}

.bi-search {
    width: 25px;
    height: 25px;
    margin: 8px 0 0 -40px;
    position: absolute;
}

button {
    background-color: #FBF7F4;
    border: none;
    cursor: pointer;
}

div#app {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

    .search-wrapper {
        position: relative;
        margin: 20px 0 10px 0;
        width: 85%;

        input {
            border: 1px solid #A2673B;
            border-radius: 30px;
            padding: 10px 15px;
            background-color: #FBF7F4;
            font-size: 15px;
            width: 100%;
        }
    }

    .wrapper {
        display: flex;
        max-width: 85%;
        flex-wrap: wrap;
        padding-top: 12px;
    }

    .card {
        box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
        border-radius: 30px;
        background-image: linear-gradient(#e8c68e34, #e89a8e61, #e89a8e8a, #E89A8E);
        margin: 12px;
        padding: 10px;
        width: 190px;
        height: 280px;

        a {
            text-decoration: none;
            padding: 15px;
            /* color: #03A9F4; */
            font-size: 18px;
            /* font-weight: 600; */
            display: flex;
            flex-direction: column;
            align-items: center;

            img {
                height: 140px;
                width: 140px;
                object-fit: cover;
                border-radius: 7%;
                margin-bottom: 10px;
            }
        }

        a:hover {
            opacity: 0.7;
            transition: .5s;
        }
    }
}
</style>

<body>
    <nav class="navbar">
        <a href="./Home.php" class="sweetmade" style="text-decoration: none;">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="./Home.php">Home</a></li>
                <li><a href="./Recipes.php">Recipes</a></li>
                <li><a href="./Community.php">Community</a></li>
                <li><a href="./Aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="leftbar" style="text-decoration: none;">
            <a href="./Bakinglist.php">
                <i class='bx bx-heart-circle'></i>
            </a>
            <div class="dropdown">
                <i class='bx bxs-user-circle'></i>
                <div class="dropdown-content">
                    <a href="./Profile.php">Profile</a>
                    <a href="./Login.php">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>
    <div id="app">
        <div class="search-wrapper">
            <input type="text" vmodel="search" id="search" placeholder="Find the recipes" autocomplet=off />
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            <!-- <label>Search title:</label> -->
        </div>
        <div id="searchresult">
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                var input = $(this).val();
                //alert(input);

                if (input != "") {
                    $.ajax({
                        url: "LiveSearch.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            $("#searchresult").css("display", "block");
                        }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }
            });
        });
        </script>
</body>

</html>
