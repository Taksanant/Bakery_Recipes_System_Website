
<?php

date_default_timezone_set('America/Los_Angeles');

include("DatabaseConnect.php");
session_start();

echo "<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Recipes Post</title>
<link rel='icon' type='image/png' href='https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0'>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
<link rel='stylesheet' type='text/css' href='https://demo.plantpot.works/assets/css/normalize.css'>
<link rel='stylesheet' href='https://use.typekit.net/opg3wle.css'>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel='stylesheet' type='text/css' href='./navbar.css'>
<link rel='stylesheet' type='text/css' href='./recipes_post.css'>

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
font-family: 'Poller One', serif;
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


.dropdown2-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    width: 300px;
    max-height:250px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    overflow: auto;
}
.dropdown-content a, .dropdown2-content a {
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
content: '>';
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
.post-container{
margin: 1% 0 0 6%;
}
.recipe-image{
width: 320px;
height: 320px;
border-radius: 7%;
margin: 10px 0;
object-fit: cover;
}
.post-box{
display: flex;
font-size: 15px;
}
.left{
display: flex;
flex-direction: column;
}
.date-time{
text-align: right;
}
.right{
font-size: 20px;
padding-left: 50px;
padding-top: 15px;
padding-right:50px;
}
.box-1, .box-3, .box-4, .box-5, .box-6{
display: flex;
align-items: center;
margin-bottom: 20px;
}
.description-1, .comment-box{
background-color: #F0D3CF;
width: 90%;
padding: 25px;
border-radius: 10px;
margin: 2% 0 0 6%;
}
.bowl{
width: 40px;
margin: 0 0 0 20px;
transform: scaleX(-1);
}
.in-box-6{
display: flex;
flex-direction: column;
}
.ingredients{
margin: 5px 150px 5px 40px;
}
.bi-person-circle{
font-size: 35px;
}
.comment-icon{
margin: 0 0 0 10px;
}
.name-baker{
margin: 10px 20px;
}
.bi-chat{
font-size: 30px;
margin-right: 20px;
cursor: pointer;
margin-left: 50px;
}
.bi-clock{
font-size: 30px;
}
ul.prep{
margin: 0 70px 0 50px;
font-size: 15px;
}
.cooking{
width: 40px;
margin-right: 20px;
}
ol{
margin: 10px 50px 40px 25px;
}
.description-2{
    width: 90%;
    padding: 25px;
    margin: 2% 0 0 6%;
}
.box-7{
margin-top: 20px;
}
li{
line-height: 25px;
}
.rate{
display: flex;
margin: 10px 0 0 0;
}
.rate-all-1{
margin: 0 20px 0 0;
}
.rate-all-2{
margin: 0 0 0 20px;
}
.box-8{
display: flex;
}
.comment-date-time{
float: right;
margin: 0 20px 0 0;
font-size: 15px;
}
.name-comment{
margin: 10px 15px;
font-weight: 600;
}
.comment-detail{
margin: 0 15px 10px 60px;
text-align: left;
}

#comment{
background-color: #F5E7E5;
border-radius: 5px;
margin: 15px 0 0 0;
padding: 10px;
width: 100%;
}

.list {
margin: 0px auto;
width: 100%;
box-sizing: border-box;
}
.list-element {
width: 100%;
margin: 25px 0px;
border-radius: 5px;
padding: 10px 0px;
color: #000;
font-size: 20px;
text-align: center;
border: 1px solid #000;
/* box-shadow: 0px 0px 6px 0px #848484; */
background-color: #F5E7E5;
}
#loadmore {
margin: auto;
display: block;
padding: 10px 45px;
border-radius: 5px;
border: 2px solid #A2673B;
background-color: #DFABA4;
cursor: pointer;
}

.list .list-element:nth-child(1) {
display: block;
}
.list .list-element:nth-child(2) {
display: block;
}

.heart{
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

.heart-click{
animation: anim-click .6s ease-out forwards;
stroke: red;
}

.bi-bookmark-fill{
cursor: pointer;
margin: 0 20px 0 50px;
fill: red;
fill-opacity: 0;
stroke: #000;
/* stroke-width: 1px; */
transition: transform .5s;
width: 30px;
}

/* &:hover{
cursor: pointer;
transform: scale(1.1);
} */

.bi-bookmark-fill-click{
animation: anim-click .6s ease-out forwards;
stroke: red;
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

.popup {
    box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
    position: absolute;
    background-color: #FBF7F4;
    display: none;
    position: absolute;

    top: 10%;
    left: 35%;
    width: 30%;
    height: 80%;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 20px;
    z-index:20010;
    overflow: auto;

    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -ms-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    opacity: 1;

    .popup-text {
        margin: 20% 5% 6% 5%;
        color: #000;
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
.report-btn{
    font-size: 30px;
    margin-right: 80px;
    color: #ed2939;
    text-align: right;
}
.report-sent{
    color: #000;
    border: 1px solid #ed2939;
    background-color: #ed2939;
    padding: 10px;
    display:block;
    margin: 5px auto;
    border-radius: 5px;
    cursor: pointer;
}
.title-report{
    margin: 6% 5%;
    font-size: 20px;
}
.line{
    background-color: rgb(0,0,0,0.3);
    width: 100%;
    height:1px;
    margin: 5px 0;
}
.message{
    display:flex;
    justify-content:center;
    margin-top: 20px;
}
.message .success{
    color: green;
    display: none;
}
.message .danger{
    color: red;
    display:none;
}
</style>";

include("DatabaseConnect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_SESSION['BakeCommentInsert'] = $_GET['id'];

$bakeid = $_SESSION['BakeCommentInsert'];

$sql = "CALL `databaseproject`.`show-recipe`(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $bakeid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$userId = $row['UserId'];
$description = $row['Description'];
$bekeryname = $row['BakeryName'];
$bekerypicture = $row['BakeryPicPath'];

$tranform = str_replace("\n", "\n\n", $row['ProcessDesc']);
$medthod = $tranform;

$dateadd = $row['DateAdd'];

function formattime($time){
    $timeString = $time;
    list($hours, $minutes, $seconds) = explode(':', $timeString);
    $timeComponents = [];
    if ($hours > 0) {
        $timeComponents[] = $hours . " hour" . ($hours > 1 ? "s" : "");
    }
    if ($minutes > 0) {
        $timeComponents[] = $minutes . " minute" . ($minutes > 1 ? "s" : "");
    }
    if ($seconds > 0) {
        $timeComponents[] = $seconds . " second" . ($seconds > 1 ? "s" : "");
    }
    return implode(" ", $timeComponents);
};

$serving = $row['Serving'];
$cooktime = formattime($row['CookTime']);
$preptime = formattime($row['PrepTime']);

$stmt->close();

// $sqll = "SELECT * FROM databaseproject.havecategorytag, category WHERE categoty.CategoryId = havecategorytag.CategoryId and BakeId = $bakeid";
// $res = $conn->query($sqll);
// $data = $res->fetch_assoc();

echo "<body>
    <nav class='navbar'>
        <a href='Home.php' class='sweetmade'>Sweetmade</a>
        <div class='topbar'>
            <ul>
                <li><a href='Home.php'>Home</a></li>
                <li><a href='Recipes.php' class='active'>Recipes</a></li>
                <li><a href='Community.php'>Community</a></li>
                <li><a href='AboutUs.php'>About Us</a></li>
            </ul>
        </div>
        <div class='leftbar'>
            <a href='Bakinglist.php'>
                <i class='bx bx-heart-circle'></i>
            </a>
            <div class='dropdown'>
                <i class='bx bxs-user-circle'></i>
                <div class='dropdown-content'>
                    <a href='Profile.php'>Profile</a>
                    <a href='index.php'>Sign Out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- breadcrumb -->
    <ul class='breadcrumb'>
        <li><a href='Home.php'>Home</a></li>
        <li><a href='Recipes.php'>Recipes</a></li>
        <li><a href=''>Cookies</a></li>
        <li class='active'>$bekeryname</li>
    </ul>

    <script>
    document.addEventListener('DOMContentLoaded', function() {";
        // Check if a success message is set in the session
        if (isset($_SESSION['status'])) {
            echo 'alert("' . $_SESSION['status'] . '");';
            unset($_SESSION['status']); // Clear the session variable
        }
    echo "});
    </script>";

    if(isset($_SESSION['status'])){
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
    }

    echo " <!-- report -->
    <div class='popup'>
        <div class='popup-text'>
            <h1 style='text-align: center;'>Report Post</h1>
            <p>If the content doesn't match the post or the post is inappropriate, report us.</p>
        </div>
        <form id='reportForm' action='code.php?id=".$bakeid."' method='POST'>
            <div class='title-report'>
                <canvas class='line'></canvas>
                <input type='checkbox' id='badcontent' name='title[]' value=1>
                <label for='badcontent'>Bad Content</label>
                <canvas class='line'></canvas>
                <input type='checkbox' id='spam' name='title[]' value=2>
                <label for='spam'>Spam</label>
                <canvas class='line'></canvas>
                <input type='checkbox' id='violent' name='title[]' value=3>
                <label for='violent'>Violent</label>
                <canvas class='line'></canvas>
                <input type='checkbox' id='hatespeech' name='title[]' value=4>
                <label for='hatespeech'>Hate Speech</label>
                <canvas class='line'></canvas>
                <input type='checkbox' id='other' name='title[]' value=5>
                <label for='other'>Other</label>
                <canvas class='line'></canvas>
            </div>
            
            <button type='submit' name='report-sent' class='report-sent' onClick='message()'>Report Sent</button>

                <div class='message'>
                    <div class='success' id='success'>
                        Report Successfully Sent!
                    </div>
                    <div class='danger' id='danger'>
                        Please Select Report Title!
                    </div>
                </div>
                <a class='popup-close' href='#'><i class='bx bx-x'></i></a>
        </form>
    </div>

    <div class='post-container'>
        <div class='title'>
            <h2>$bekeryname</h2>
        </div>
        <div class='report-btn'>
            <i class='bx bxs-message-alt-error'></i>
        </div>
        <div class='post-box'>
            <div class='left'>
                <img src='$bekerypicture' alt='French Macaroon' class='recipe-image'>
                <span class='date-time'>Published: $dateadd</span>
            </div>
            <div class='right'>
                <div class='box-1'>
                    <i class='bi bi-person-circle'></i>
                    <div class='name-baker'>
                        <span>$userId</span>
                    </div>
                </div>
                <div class='box-2'>
                    <span>$description</span>
                </div>
                <div class='box-3'>
                    <svg class='heart' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' viewBox='0 0 100 125' enable-background='new 0 0 100 100' xml:space='preserve'><g class=>
                        <path d='M50.001,68.908c-0.127,0-0.252-0.031-0.365-0.094c-0.915-0.512-22.395-12.631-22.395-24.62   c0-7.593,5.09-13.104,12.104-13.104c3.89,0,8.203,2.599,10.656,5.261c2.451-2.662,6.765-5.261,10.655-5.261   c7.014,0,12.104,5.511,12.104,13.104c0,11.989-21.479,24.108-22.394,24.62C50.253,68.877,50.126,68.908,50.001,68.908z'/></g>
                    </svg>
                    
                    <span>Like</span>
                    
                    <a href='#comment'>
                        <i class='bi bi-chat'></i>
                        <span>Comment</span>
                    </a>
                    <div class='dropdown2'>
                    <svg xmlns='http://www.w3.org/2000/svg' class='bi bi-bookmark-fill' viewBox='0 0 16 16'>
                        <path d='M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2'/>
                    </svg>";
                    $userId = $_SESSION['UserId'];
                    // include_once("DatabaseConnect.php");

                        
                        $sql = "SELECT * FROM favoritelist WHERE UserId = '$userId'";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            echo "<div class=\"dropdown2-content\">";
                            while ($row = $result->fetch_assoc()) {
                                echo "<a href=\"savePost.php?BakeryId=" . $_SESSION['BakeCommentInsert'] . "&FavId=" . urlencode($row['FavId']) . "\">" . $row['FavLisName'] . "</a>";
                            }
                            echo "</div>";
                        } else {
                            echo "<div class=\"dropdown2-content\">";
                            echo "<a href=\"Bakinglist.php\">New</a>";
                            echo "</div>";
                        }

                    echo"
                    </div>
                    <span>Save</span>
                </div>
                <div class='box-4'>
                    <i class='bi bi-clock'></i>
                    <ul class='prep'>
                        <li>
                            Prep&nbsp;&nbsp;: $preptime
                        </li>
                        <li>
                            Cook : $cooktime
                        </li>
                    </ul>
                    <img src='./RecipeSystem/img/room-service.png' alt='cook' class='cooking'>
                    <span>$serving</span>
                </div>
            </div>
        </div>
    </div> 
    <div class='description-1'>
        <div class='box-5'>
            <h3>Ingredients</h3>
            <img src='./RecipeSystem/img/bowl.png' alt='bowl' class='bowl'>
        </div>
        <div class='box-6'>
            <div class='in-box-6-1'>
                <span></span>
            <ul class='ingredients'>";


$sql2 = 'CALL `databaseproject`.`show-ingredient`(?)';

$stmt = $conn->prepare($sql2);

$stmt->bind_param("i", $bakeid);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $nameingre = $row['IngreName'];
    $desingre = $row['UnitAndDesc'];
    echo "<li>$nameingre $desingre</li>";
}
                echo "
            </div>
        </div>
    </div>
    <div class='description-2'>
        <h3>Method</h3>
        <div class='box-7'>
            <br><br>
            <p>" . nl2br($medthod) . "</p>
        </div>
    </div>

    <div class='comment-box'>
        <div class='rate'>
            <h3 class='rate-all-1'>Overall Rating</h3>
            <i class='bi bi-star-fill'></i>
            <i class='bi bi-star-fill'></i>
            <i class='bi bi-star-fill'></i>
            <i class='bi bi-star-half'></i>
            <i class='bi bi-star'></i>
            <div class='rate-all-2'>
                266 ratings
            </div>
        </div>

    <!-- List of your items -->
	<div class='list'>";

$stmt->close();

$sql3 = "CALL `databaseproject`.`All-Detail-Comment`(?)";
$stmt = $conn->prepare($sql3);
$stmt->bind_param('i', $bakeid);
$stmt->execute();

$result2 = $stmt->get_result();
$stmt->close();

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
	    echo "<div class='list-element'>
            <div class='comment-date-time'>$timeshow $timeunit ago</div>
            <div class='box-8'>
                <i class='bi bi-person-circle comment-icon'></i>
                <div class='name-comment'>
                    <span>$userId</span>
                </div>
            </div>
            <div class='comment-detail'>
                <p>
                    $comment
                </p>
            </div>
        </div>";
};
	echo "
    <form action='InsertComment.php' method='post' name='Comment' id='Comment'>
        <input type='text' name='comment' id='comment' placeholder='Add your comment...' onkeydown='handleEnter(event)'>
    </form>
    </div>
</div>

<footer></footer>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='script-recipes-post.js'></script>

<script>
        const Favorite = document.querySelector('.heart');

        document.querySelector('.heart').addEventListener('click', () => {
        Favorite.classList.toggle('heart-click');
});

const Save = document.querySelector('.bi-bookmark-fill');

document.querySelector('.bi-bookmark-fill').addEventListener('click', () => {
    Save.classList.toggle('bi-bookmark-fill-click');
    
    // Select the dropdown content element
    const dropdownContent = document.querySelector('.dropdown2-content');

    // Check if the bookmark icon has the 'bi-bookmark-fill-click' class
    if (Save.classList.contains('bi-bookmark-fill-click')) {
        // If the class is present, show the dropdown content
        dropdownContent.style.display = 'block';
    } else {
        // If the class is not present, hide the dropdown content
        dropdownContent.style.display = 'none';
    }
});

document.getElementById('Comment').addEventListener('keydown', handleEnter);

function handleEnter(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // prevent form submission
        event.target.form.submit();
    }
}

$('.report-btn').click(function() {
    $('.popup').css('opacity', 1);
    $('body').css('opacity', 0.8);
    $('.popup').css('display', 'block');
        $('.overlay').css('display', 'block'); 
});

$('.popup-close').click(function() {
    $('.popup').css('opacity', 0);
    $('body').css('opacity', 1);
    setTimeout(function() {
        $('.popup').css('display', 'none');
            // $('body').css('display', 'none'); 
    }, 1000);
    
});

function message() {
    var report1 = document.getElementById('badcontent');
    var report2 = document.getElementById('spam');
    var report3 = document.getElementById('violent');
    var report4 = document.getElementById('hatespeech');
    var report5 = document.getElementById('other');

    const success = document.getElementById('success');
    const danger = document.getElementById('danger');
    
    if (!report1.checked && !report2.checked && !report3.checked && !report4.checked && !report5.checked) {
        danger.style.display = 'block';
    } else {
        setTimeout(() => {
            report1.checked = false;
            report2.checked = false;
            report3.checked = false;
            report4.checked = false;
            report5.checked = false;
        }, 2000);
        success.style.display = 'block'
    
    }
    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 2000);
}

</script>
</body>
";

?>