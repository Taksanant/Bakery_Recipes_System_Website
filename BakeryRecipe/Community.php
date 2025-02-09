<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        font-family: 'Poller One', serif;
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
        content: '\003E';
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

    .post {
        display: flex;
        justify-content: flex-start;
        margin: 45px 80px;
    }

    .add-post-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 500px;
        border: 1px solid #A2673B;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 15px;
    }

    .bi-plus-square {
        font-size: 25px;
        cursor: pointer;
    }

    .filter {
        display: flex;
        justify-content: end;
        margin: 0 80px;
    }

    #filter {
        border-radius: 5px;
        border-color: #A2673B;
        background-color: #F5F5F5;
    }

    .bi-arrow-down-up {
        font-size: 25px;
        margin: 0 10px 0 0;
    }

    .drop-filter {
        font-size: 20px;
        padding: 10px;
    }

    .name-bakery {
        margin-bottom: 10px;
    }

    .name-bakery a:hover {
        color: #A2673B;
        transition: .5s;
    }

    .image-bakery {
        width: 320px;
        height: 320px;
        object-fit: cover;
        border-radius: 7%;
    }

    .save-5,
    .save-6 {
        cursor: pointer;
        position: absolute;
        z-index: 2;
        top: 46.5%;
        left: 31.4%;
        stroke: #000;
        width: 35px;
        fill: red;
        fill-opacity: 0;
        transition: transform .5s;
    }

    .bi-bookmark-fill-click-5,
    .bi-bookmark-fill-click-6 {
        animation: anim-click .6s ease-out forwards;
        stroke: red;
    }

    .circle {
        position: absolute;
        z-index: 1;
        top: 45%;
        left: 30.5%;
        background-color: #fff;
        border-radius: 50%;
        width: 60px;
        height: 60px;
    }

    .line-1,
    .line-2 {
        border: 1px solid #A2673B;
        width: 100%;
        height: 0;
    }

    .line-2 {
        margin: 10px 0 30px 0;
    }

    .box-4 {
        display: flex;
        align-items: center;
        background-color: #F0D3CF;
        border-radius: 10px;
        margin: 10px 0;
        height: 300px;
        width: 100%;
    }

    .comments {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        margin: 10px 20px;
        height: 300px;
        width: 100%;
        overflow-y: auto;
    }

    .comment {
        display: flex;
        flex-direction: column;
        padding: 15px;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .detail-bar {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .detail-bar i {
        font-size: 32px;
        margin-right: 10px;
    }

    .comment-content {
        flex: 1;
    }

    .name-time {
        display: flex;
        align-items: center;
    }

    .name-comments {
        margin-right: 10px;
    }

    .time-comments {
        font-style: italic;
    }


    #viewMoreBtn {
        display: none;
    }

    .post-container {
        padding: 1% 5.5% 0 5.5%;
        width: 100%;
    }

    .recipe-image {
        width: 450px;
        height: 320px;
        border-radius: 7%;
        margin: 10px 0;
        object-fit: cover;
    }

    .recipe-image:hover {
        opacity: 0.7;
        transition: .5s;
    }

    .post-box {
        display: flex;
    }

    .left {
        display: flex;
        flex-direction: column;
        width: 37%;
        font-size: 20px;
    }

    .text {
        text-overflow: ellipsis;
        max-height: 100px;
    }

    .date-time {
        text-align: left;
        font-size: 15px;
    }

    .right {
        font-size: 20px;
        margin: 15px 0 0 0;
        width: 63%;
    }

    .bi-person-circle {
        font-size: 35px;
    }

    .comment-icon {
        margin: 0 0 0 10px;
    }

    .name-baker {
        margin: 10px 20px;
    }

    .bi-chat {
        font-size: 30px;
        margin-right: 20px;
        cursor: pointer;
        margin-left: 50px;
    }

    .box-1,
    .box-3,

    .box-4 {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .heart-1,
    .heart-2 {
        cursor: pointer;
        pointer-events: all;
        fill: red;
        fill-opacity: 0;
        margin: 10px 10px 0 -15px;
        stroke: #000;
        stroke-width: 3px;
        transition: transform .5s;
        width: 70px;
    }

    .heart-click-1,
    .heart-click-2 {
        animation: anim-click .6s ease-out forwards;
        stroke: red;
    }

    @keyframes anim-click {
        0% {
            transform: scale(1);
            fill-opacity: 0;
        }

        25% {
            fill-opacity: 1;
        }

        45% {
            transform: scale(0.8);
        }

        70% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
            fill-opacity: 1;
        }
    }
</style>


<body>
    <nav class="navbar">
        <a href="Home.php" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Recipes.php">Recipes</a></li>
                <li><a href="Community.php" class="active">Community</a></li>
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

    <div class="post">
        <search>
            <form action="AddPost.php">
                <button class="add-post-container">Share your recipe here.
                    <i class="bi bi-plus-square"></i>
                </button>
            </form>
        </search>
    </div>

<script>
        const Favorite1 = document.querySelector('.heart-1');

        document.querySelector('.heart-1').addEventListener('click', () => {
            Favorite1.classList.toggle('heart-click-1');
        });

        const Favorite2 = document.querySelector('.heart-2');

        document.querySelector('.heart-2').addEventListener('click', () => {
            Favorite2.classList.toggle('heart-click-2');
        });

        const Save = document.querySelector('.bi-bookmark-fill');

        document.querySelector('.bi-bookmark-fill').addEventListener('click', () => {
            Save.classList.toggle('bi-bookmark-fill-click');
        });

        function leverJobsInit() {
            var pageUrl = window.location.href;

            var pageSize = 10;
            var lastPage;

            var pathArray = pageUrl.split('/');
            var lastSegment = pathArray[pathArray.length - 2];

            function getLeverTeam(pageSlug) {
                var pageTeamMap = {
                    'advertising': 'advertising',
                    'client-services': 'Client Success&team=Services',
                    'finance': 'finance',
                    'information-technology': 'it',
                    'legal': 'legal',
                    'marketing': 'marketing',
                    'people-and-talent': 'people and talent',
                    'sales': 'sales',
                    'research-and-development': 'engineering',
                    'default': ''
                };
                return (pageTeamMap[pageSlug] || pageTeamMap['default']);
            }
            var leverTeam = getLeverTeam(lastSegment);
            // Checking for potential Lever source or origin parameters
            var leverParameter = '';
            var trackingPrefix = '?lever-';

            // Selectors
            var $jobsLocation = $('.jobs-sort .jobs-locations');
            var $jobsTeam = $('.jobs-sort .jobs-teams');
            var $jobsSort = $('#jobs-container .jobs-sort');
            var $jobsListContainer = $('#jobs-container .jobs-list');
            var $noJobResult = $('#jobs-container .jobs-list .no-job-result');
            var $job = $('#jobs-container .jobs-list .job');

            if (pageUrl.indexOf(trackingPrefix) >= 0) {
                // Found Lever parameter
                var pageUrlSplit = pageUrl.split(trackingPrefix);
                leverParameter = '?lever-' + pageUrlSplit[1];
            }

            /**
             * Functions
             ****************************/

            // Functions for checking if the variable is unspecified
            function cleanString(string) {
                if (string) {
                    var cleanString = string.replace(/\s+/ig, "");
                    return cleanString;
                } else {
                    return "Uncategorized";
                }
            }

            function nullCheck(string) {
                if (!string) {
                    return 'Uncategorized';
                } else {
                    return string;
                }
            }

            function renderJobs(_data) {
                // Adding individual job postings
                console.log('renderJobs', _data);
                if (!_data.length) {
                    $jobsListContainer.html('<p class="no-job-result bg-info">No positions available.</p>');
                } else {
                    var jobsList = [];
                    for (i = 0; i < _data.length; i++) {
                        var posting = _data[i]
                        var title = posting.text
                        var location = nullCheck(posting.categories.location);
                        var locationCleanString = cleanString(location);
                        var commitment = nullCheck(posting.categories.commitment);
                        var commitmentCleanString = cleanString(commitment);
                        var team = nullCheck(posting.categories.team);
                        var teamCleanString = cleanString(team);
                        var link = posting.hostedUrl + leverParameter;
                        var jobPosting = '<a class="job ' + teamCleanString + ' ' + locationCleanString + ' ' +
                            commitmentCleanString + '" data-location="' + locationCleanString + '" data-team="' +
                            teamCleanString + '" href="' + link + '"><span class="job-title">' + title +
                            '</span><span class="tag">' + team + '</span><span class="tag">' + location + '</span></a>'
                        jobsList.push(jobPosting);
                    }
                    $jobsListContainer.html(jobsList.join(''));
                }
            } // END createJobs

            function renderFilters(_data) {
                console.log('renderFilters');
                // Adding Team values to Team Sort select drop-downs
                var teams = [];
                for (i = 0; i < _data.length; i++) {
                    var team = nullCheck(_data[i].categories.team);
                    var teamCleanString = cleanString(team);
                    var teamOption = '<option class="job-team ' + teamCleanString + '">' + team + '</option>';
                    // Check for duplicates
                    if (teams.indexOf(teamOption) === -1) {
                        teams.push(teamOption);
                    }
                    teams.sort();
                }
                $jobsTeam.append(teams.join(''));

                // Adding Location values to Location Sort select drop-downs
                var locations = [];
                for (i = 0; i < _data.length; i++) {
                    var location = nullCheck(_data[i].categories.location)
                    var locationCleanString = cleanString(location);
                    var locationOption = '<option class="job-location ' + locationCleanString + '">' + location +
                        '</option>';
                    // Check for duplicates
                    if (locations.indexOf(locationOption) === -1) {
                        locations.push(locationOption);
                    }
                    locations.sort();
                }
                $jobsLocation.append(locations.join(''))
            };

            function fetchData(options, callback) {
                console.log('fetchData');
                var leverUrl = 'https://api.lever.co/v0/postings/bazaarvoice?mode=json';
                if (options.page) {
                    leverUrl += '&limit=' + pageSize + '&skip=' + ((options.page - 1) * pageSize);
                    if (!options.noCheckPagination) {
                        lastPage = options.page;
                    }
                }
                if (options.team) {
                    leverUrl += '&team=' + options.team;
                }
                if (options.location) {
                    leverUrl += '&location=' + options.location;
                }
                $.ajax({
                    dataType: "json",
                    url: leverUrl,
                    success: function(data) {
                        if (!options.noCheckPagination && options.page) {
                            checkPagination(options);
                        }
                        callback(data);
                    },
                    error: function() {
                        $jobsListContainer.html(
                            '<p class="no-job-result bg-info">Content is not available.</p>');
                    }
                });
            }

            function checkPagination(options) {
                console.log('checkPagination');
                // Prev needs to be disabled on page 1.
                $('.jobs-pagination .prev').attr("disabled", lastPage <= 1);
                options.noCheckPagination = true;
                options.page += 1;
                fetchData(options, function(data) {
                    if (!data.length) {
                        $('.jobs-pagination .next').attr("disabled", true);
                    } else {
                        $('.jobs-pagination .next').attr("disabled", false);
                    }
                });
            }


            // Handlers for pagination buttons
            function prevButton() {
                console.log('prevButton');
                if (!$(this).attr('disabled') && lastPage > 1) {
                    getLeverTeam(lastSegment);
                    if (leverTeam == '') {
                        var teamValue = $jobsTeam.val();
                    } else {
                        var teamValue = leverTeam;
                    }
                    var locationValue = $jobsLocation.val();
                    if (teamValue == "All") {
                        teamValue = null;
                    }
                    if (locationValue == "All") {
                        locationValue = null;
                    }
                    $('html, body').animate({
                        scrollTop: $("#jobs-container").offset().top - 150
                    }, 500);
                    fetchData({
                        team: teamValue,
                        location: locationValue,
                        page: lastPage -= 1
                    }, function(data) {
                        renderJobs(data);
                    });
                }
            }

            function nextButton() {
                console.log('nextButton');
                if (!$(this).attr('disabled')) {
                    getLeverTeam(lastSegment);
                    if (leverTeam == '') {
                        var teamValue = $jobsTeam.val();
                    } else {
                        var teamValue = leverTeam;
                    }
                    var locationValue = $jobsLocation.val();
                    if (teamValue == "All") {
                        teamValue = null;
                    }
                    if (locationValue == "All") {
                        locationValue = null;
                    }
                    $('html, body').animate({
                        scrollTop: $("#jobs-container").offset().top - 150
                    }, 500);
                    fetchData({
                        team: teamValue,
                        location: locationValue,
                        page: lastPage += 1
                    }, function(data) {
                        renderJobs(data);
                    });
                }
            }

            // === Sorting/Filters job postings triggered from select drop downs (team & location)
            function filterJobs() {
                console.log('filterJobs');
                var teamValue = $jobsTeam.val();
                var locationValue = $jobsLocation.val();
                page = 1;
                if (teamValue == "All") {
                    teamValue = null;
                }
                if (locationValue == "All") {
                    locationValue = null;
                }
                fetchData({
                    team: teamValue,
                    location: locationValue,
                    page: 1
                }, function(data) {
                    renderJobs(data);
                });
            }

            // Event Handlers (for pagination btns and drop-down filters)
            $('.jobs-pagination .prev').click(prevButton);
            $('.jobs-pagination .next').click(nextButton);
            $('.jobs-sort select').change(filterJobs);

            // Init render filters
            fetchData({}, function(data) {
                renderFilters(data);
            });

            // Init render jobs
            fetchData({
                page: 1,
                team: leverTeam
            }, function(data) {
                renderJobs(data);
            });

        } // END leverJobsInit

        $(function() {
            leverJobsInit();
        });
</script>
</body>

</html>


<!--
<div class="post-container">
    <div class="post-detail">
        <div class="name-bakery">
            <a href="./recipes_post.html">
            <?php
            include("DatabaseConnect.php");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM databaseproject.`all-bakery`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $postTitle = $row['BakeryName'];
                    echo "<h2>$postTitle</h2>";
                }
            }
            else {
                echo "0 results";
            }
            ?>
            </a>
        </div>
    </div>
</div>

<div class="post-box">
    <div class="left">
        <a href="./recipes_post.html">
            <?php
                include("DatabaseConnect.php");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM databaseproject.`all-bakery`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $postImage = $row['BakeryPicPath'];
                        $postTitle = $row['BakeryName'];
                        echo "<img src='$postImage' alt='$postTitle' class='recipe-image'>";
                    }
                }
                else {
                    echo "0 results";
                }
            ?>
        </a>
    </div>
</div> -->

<?php
include("DatabaseConnect.php");

        echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/png"
            href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
        </head>
        <style>

        @import url("https://fonts.googleapis.com/css2?family=Poller+One&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Croissant+One&family=Nova+Square&display=swap");
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
    
        body {
            background-color: #FBF7F4;
            font-family: "Poppins", sans-serif;
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
    
        .post {
            display: flex;
            justify-content: flex-start;
            margin: 45px 80px;
        }
    
        .add-post-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 500px;
            border: 1px solid #A2673B;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 15px;
        }
    
        .bi-plus-square {
            font-size: 25px;
            cursor: pointer;
        }
    
        .filter {
            display: flex;
            justify-content: end;
            margin: 0 80px;
        }
    
        #filter {
            border-radius: 5px;
            border-color: #A2673B;
            background-color: #F5F5F5;
        }
    
        .bi-arrow-down-up {
            font-size: 25px;
            margin: 0 10px 0 0;
        }
    
        .drop-filter {
            font-size: 20px;
            padding: 10px;
        }
    
        .name-bakery {
            margin-bottom: 10px;
        }
    
        .name-bakery a:hover {
            color: #A2673B;
            transition: .5s;
        }
    
        .image-bakery {
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 7%;
        }
    
        .save-5,
        .save-6 {
            cursor: pointer;
            position: absolute;
            z-index: 2;
            top: 46.5%;
            left: 31.4%;
            stroke: #000;
            width: 35px;
            fill: red;
            fill-opacity: 0;
            transition: transform .5s;
        }
    
        .bi-bookmark-fill-click-5,
        .bi-bookmark-fill-click-6 {
            animation: anim-click .6s ease-out forwards;
            stroke: red;
        }
    
        .circle {
            position: absolute;
            z-index: 1;
            top: 45%;
            left: 30.5%;
            background-color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
        }
    
        .line-1,
        .line-2 {
            border: 1px solid #A2673B;
            width: 100%;
            height: 0;
        }
    
        .line-2 {
            margin: 10px 0 30px 0;
        }
    
        .box-4 {
            display: flex;
            align-items: center;
            background-color: #F0D3CF;
            border-radius: 10px;
            margin: 10px 0;
            height: 300px;
            width: 100%;
        }
    
        .comments {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 10px 0px;
            height: 300px;
            width: 100%;
            overflow-y: auto;
        }
    
        .comment {
            display: flex;
            flex-direction: column;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 5px;
        }
    
        .detail-bar {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
    
        .detail-bar i {
            font-size: 32px;
            margin-right: 10px;
        }
    
        .comment-content {
            flex: 1;
        }
    
        .name-time {
            display: flex;
            align-items: center;
        }
    
        .name-comments {
            margin-right: 10px;
        }
    
        .time-comments {
            font-style: italic;
        }
    
    
        #viewMoreBtn {
            display: none;
        }
    
        .post-container {
            padding: 1% 5.5% 0 5.5%;
            width: 100%;
        }
    
        .recipe-image {
            width: 450px;
            height: 320px;
            border-radius: 7%;
            margin: 10px 0;
            object-fit: cover;
        }
    
        .recipe-image:hover {
            opacity: 0.7;
            transition: .5s;
        }
    
        .post-box {
            display: flex;
            margin-bottom:100px;
        }
    
        .left {
            display: flex;
            flex-direction: column;
            width: 37%;
            font-size: 20px;
        }
    
        .text {
            text-overflow: ellipsis;
            max-height: 100px;
        }
    
        .date-time {
            text-align: left;
            font-size: 15px;
        }
    
        .right {
            font-size: 20px;
            margin: -40px 0 0 0;
            width: 63%;
        }
    
        .bi-person-circle {
            font-size: 35px;
        }
    
        .comment-icon {
            margin: 0 0 0 10px;
        }
    
        .name-baker {
            margin: 10px 20px;
        }
    
        .bi-chat {
            font-size: 30px;
            margin-right: 20px;
            cursor: pointer;
            margin-left: 50px;
        }
    
        .box-1,
        .box-3,
        .box-4 {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .box-3 a {
            margin-bottom: 10px;
        }
    
        .heart-1,
        .heart-2 {
            cursor: pointer;
            pointer-events: all;
            fill: red;
            fill-opacity: 0;
            margin: 10px 10px 0 -15px;
            stroke: #000;
            stroke-width: 3px;
            transition: transform .5s;
            width: 70px;
        }
    
        .heart-click-1,
        .heart-click-2 {
            animation: anim-click .6s ease-out forwards;
            stroke: red;
        }
    
        @keyframes anim-click {
            0% {
                transform: scale(1);
                fill-opacity: 0;
            }
    
            25% {
                fill-opacity: 1;
            }
    
            45% {
                transform: scale(0.8);
            }
    
            70% {
                transform: scale(1.2);
            }
    
            100% {
                transform: scale(1);
                fill-opacity: 1;
            }
        }
    </style>';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM databaseproject.`all-bakery`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $postTitle = $row['BakeryName'];
            $postImage = $row['BakeryPicPath'];
            $postDateTime = $row['DateAdd'];
            $postAuthor = $row['UserId'];
            $postDescription = $row['Description'];
            $postBekeryid = $row['BakeryId'];

            $sql2 = "CALL CountComments(?)";
            $stmt = $conn->prepare($sql2);

            $stmt->bind_param("s", $postBekeryid); // 's' indicates string

            $stmt->execute();

            $stmt->bind_result($commentCount);

            $stmt->fetch();

            $stmt->close();

            $stmt = $conn->prepare("SELECT @outAllComment AS outAllComment, @outAllUserId AS outAllUserId");
            $stmt->execute();
            $stmt->bind_result($outAllComment, $outAllUserId);
            $stmt->fetch();
            $stmt->close();

            $sql3 = "CALL `databaseproject`.`All-Detail-Comment`(?)";
            $stmt = $conn->prepare($sql3);
            $stmt->bind_param("i", $postBekeryid);
            $stmt->execute();

            $result2 = $stmt->get_result();
            $stmt->close();

        // Display bakery name
        echo "<div class='post-container'>
        <div class='post-detail'>
        <div class='name-bakery'>
            <h2>$postTitle</h2>
        </div>
        <div class='post-box'>
            <div class='left'>
                <form action='Recipe_post.php' method='post'>
                    <a href='Recipe_post.php?id=". $postBekeryid . "'>
                        <img src='$postImage'alt='$postTitle' class='recipe-image'>
                    </a>
                </form>
                <span class='date-time'>Published: $postDateTime </span>

                <div class='box-3'>
                    <svg class='heart-1' xmlns='http://www.w3.org/2000/svg'
                        xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px'
                        viewBox='0 0 100 125' enable-background='new 0 0 100 100' xml:space='preserve'>
                        <g class=>
                            <path
                                d='M50.001,68.908c-0.127,0-0.252-0.031-0.365-0.094c-0.915-0.512-22.395-12.631-22.395-24.62   c0-7.593,5.09-13.104,12.104-13.104c3.89,0,8.203,2.599,10.656,5.261c2.451-2.662,6.765-5.261,10.655-5.261   c7.014,0,12.104,5.511,12.104,13.104c0,11.989-21.479,24.108-22.394,24.62C50.253,68.877,50.126,68.908,50.001,68.908z' />
                        </g>
                    </svg>

                    <span>0 Likes</span>

                    <a href='#comment'>
                        <i class='bi bi-chat'></i>
                        <span>$commentCount Comments</span>
                    </a>
                </div>
            </div>

            <div class='right'>
                <div class='box-1'>
                    <i class='bi bi-person-circle'></i>
                    <div class='name-baker'>
                        <span>$postAuthor</span>
                    </div>
                </div>
                <div class='box-2'>
                    <div class='text'>
                        $postDescription
                    </div>
                </div>
                <canvas class='line-1'></canvas>

                <div class='box-4' style='height: 300px;'>
                    <div class='comments'>";
                    while ($row2 = $result2->fetch_assoc()) {
                        $userId = $row2['userId'];
                        $comment = $row2['Comment'];
                        $dataReviewYears = $row2['years'];
                        $dataReviewMonths = $row2['months'];
                        $dateReviewWeeks = $row2['weeks'];
                        $dateReviewDays =$row2['days'];
                        $dateReviewHours = $row2['hours'];
                        $dateReviewMinutes = $row2['minutes'];

                        if($dateReviewMinutes < 60){
                            $timeshow = $dateReviewMinutes;
                            $timeunit = 'minutes';
                        }else if($dateReviewHours < 24){
                            $timeshow = $dateReviewHours;
                            $timeunit = 'hours';
                        }else if($dateReviewDays < 7){
                            $timeshow = $dateReviewDays;
                            $timeunit = 'days';
                        }else if($dataReviewMonths < 1){
                            $timeshow = $dateReviewWeeks;
                            $timeunit = 'weeks';
                        }
                        else if($dataReviewMonths < 12){
                            $timeshow = $dataReviewMonths;
                            $timeunit = 'months';
                        }else {
                            $timeshow = $dataReviewYears;
                            $timeunit = 'years';
                        }
                        echo "<div class='comment'>
                            <div class='detail-bar'>
                                <i class='bi bi-person-circle'></i>
                                <div class='name-comments'><span>$userId</span></div>
                                <span class='time-comments'>$timeshow $timeunit ago</span>
                            </div>
                            <div class='describe-comments'><span>$comment</span></div>
                        </div>";
                    }
                    echo "</div>
                </div>
            </div>
        </div>
    </div>
    </div>";

    }
    } else {
    echo "0 results";
    }

$conn->close();
?>
