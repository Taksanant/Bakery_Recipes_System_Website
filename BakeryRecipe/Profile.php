<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./profile.css">
    <link rel="stylesheet" type="text/css" href="./navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins&family=Croissant+One&family=Nova+Square&display=swap');

h5 {
    font-family: Poller-One;
    font-size: 22px;
    font-weight: bold;
    margin: 5px auto;
}

.submitbtn:hover {
    background-color: #f0cfdc;
    /* Change the background color on hover */
}

.post-container {
    padding: 1% 5.5% 0 5.5%;
    width: 100%;
}

.date-time {
    text-align: left;
    font-size: 15px;
    margin: 10px;

}

.editable-input {
    position: relative;
}

.edit-icon {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-40%);
    margin-right: 5px;
    cursor: pointer;
}

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

.container {
    max-width: 960px;
    margin: 10px auto;
    padding: 10px;
}

.container button {
    margin: 0px 0px 0px 430px;


}

.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
}

.avatar-upload .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;
}

.avatar-upload .avatar-edit input {
    display: none;
}

.avatar-upload .avatar-edit input+label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
}

.bi-person-circle {
    font-size: 35px;
}


.avatar-upload .avatar-edit input+label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
}

.avatar-upload .avatar-edit input+label:after {
    content: "\f040";
    font-family: 'FontAwesome';
    color: #A2673B;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
}

.avatar-upload .avatar-preview {
    width: 192px;
    height: 192px;

    border-radius: 100%;
    border: 3px solid #A2673B;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}

.avatar-upload .avatar-preview>div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.avatar-preview img {
    width: 193px;
    height: 193px;
    object-fit: cover;
    border-radius: 100%;
    margin: -3px 0px 0px -3px;
}

.avatar-preview {
    display: flex;
}

.comment-icon {
    margin: 0 0 0 10px;
}

.comment {
    display: flex;
    flex-direction: column;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 5px;
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

.input,
.my-recipes {
    margin: auto;
    width: 70%;
    flex-direction: column;
    font-size: 20px;
}

.input-box {
    background: #F0D3CF;
    border-radius: 3px;
    border: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    padding: 10px 15px;
    margin-top: 10px;
    cursor: pointer;
}

.box1,
.box2,
.box3,
.box4,
.box5 {
    margin: 30px 0px 10px 0px;
}

h2 {
    font-family: "Poller One", serif;
    text-align: center;
    margin: 50px 0 20px 0;
}

.my-recipes {
    background-color: #F0D3CF;
    border-radius: 10px;
    /* display: flex; */
}

.bakery {
    padding: 30px;
}

.name-bakery {
    font-weight: 600;
    margin-bottom: 10px;
}

.image-bakery img {
    width: 350px;
    height: 300px;
    object-fit: cover;
    border-radius: 7%;
}

.delete .bx-trash {
    float: right;
    background-color: #a2683b8a;
    padding: 5px;
    border-radius: 10px;
    margin: -100px 10px;
}

.editable-input.editable {
    background-color: #fff;
    /* Add a background color to indicate edit mode */
}

.submitbtn {
    background-color: #F0D3CF;
    /* Change the background color */
    color: black;
    /* Change the text color */
    margin: 20px auto;
    display: block;
    width: 120px;
    /* Increase the width for better visibility */
    height: 40px;
    /* Increase the height for better visibility */
    border-radius: 5px;
    cursor: pointer;
    border: none;
    /* Remove border */
    font-size: 16px;
    /* Adjust font size */
    transition: background-color 0.3s ease;
    /* Add a smooth transition */
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

.line-1 {
    border: 1px solid #A2673B;
    width: 100%;
    height: 0;
}

.line-2 {
    border: 1px solid #A2673B;
    width: 100%;
    height: 0;
}

.line-2 {
    margin: 10px 0 30px 0;
}


.post-container {
    padding: 1% 5.5% 0 5.5%;
    width: 100%;
    margin-bottom: -60px;
}

.recipe-image {
    width: 300px;
    height: 300px;
    border-radius: 7%;
    object-fit: cover;
}

.recipe-image:hover {
    opacity: 0.7;
    transition: .5s;
}

.post-box {
    display: flex;
    margin-bottom: 100px;
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

.right {
    font-size: 20px;
    margin: -40px 0 0 0;
    width: 63%;
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

.box-2 {
    /* display: flex;
            align-items: center; */
    margin-bottom: 30px;
    text-overflow: ellipsis " [..]";
    height: auto;
}

.box-1 {
    display: flex;
    align-items: center;
    margin: 40px 0 0 0;
}

.box-4 {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.box-3 {
    display: flex;
    align-items: center;
    margin-top: -20px;
}

.box-3 a {
    margin-bottom: 10px;
}

.heart,
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

.heart-click,
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

#savePic {
    display: block;

    margin: auto;
}
</style>

<body>

    <nav class="navbar" style="border-bottom: none;">
        <a href="Home.php" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
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
    <?php
require_once "DatabaseConnect.php";
$userid = $_SESSION['UserId'];
$sql = "SELECT * FROM user WHERE UserId = '$userid'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$imgUrl = 'RecipeSystem/img/' . $row['ProfilePicPath'];
?>

    <form action="Upload.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' name="imageUpload" id="imageUpload"> <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <img src="<?php
$sql = "SELECT ProfilePicPath FROM user WHERE UserId = '$userid'";
$data = $conn->query($sql);
$rowD = $data->fetch_assoc();
if ($rowD['ProfilePicPath'] === null) {
    echo "";
} else {
    echo $rowD['ProfilePicPath'];
}
?>" id="profilePic">

                </div>
            </div>
            <button type="submit" name="savePic" id="savePic" class="w3-button w3-pink w3-round-xlarge">save </button>
        </div>
    </form>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php
// Check if a success message is set in the session
if (isset($_SESSION['update_success'])) {
    echo 'alert("' . $_SESSION['update_success'] . '");';
    unset($_SESSION['update_success']); // Clear the session variable
}
// Check if an error message is set in the session
elseif (isset($_SESSION['update_error'])) {
    echo 'alert("' . $_SESSION['update_error'] . '");';
    unset($_SESSION['update_error']); // Clear the session variable
}
?>
    });
    </script>
    <form method="post" action="update_data.php">
        <div class="input">
            <div class="box1">
                <h3>Username</h3>
                <div class="editable-input">
                    <input class="input-box" type="text" name="username"
                        value="<?php echo htmlspecialchars($row['UserId']); ?>" readonly>
                </div>
            </div>
            <div class="box2">
                <h3>Firstname</h3>
                <div class="editable-input">
                    <input class="input-box" type="text" name="fname"
                        value="<?php echo htmlspecialchars($row['Fname']); ?>" readonly>
                    <span class="edit-icon" onclick="enableEdit(this)">&#9998;</span>
                </div>
            </div>
            <div class="box3">
                <h3>Lastname</h3>
                <div class="editable-input">
                    <input class="input-box" type="text" name="lname"
                        value="<?php echo htmlspecialchars($row['Lname']); ?>" readonly>
                    <span class="edit-icon" onclick="enableEdit(this)">&#9998;</span>
                </div>
            </div>
            <div class="box4">
                <h3>Email</h3>
                <div class="editable-input">
                    <input class="input-box" type="email" name="email"
                        value="<?php echo htmlspecialchars($row['Email']); ?>" readonly>
                    <span class="edit-icon" onclick="enableEdit(this)">&#9998;</span>
                </div>
            </div>
            <div class="box5">
                <h3>Password</h3>
                <div class="editable-input">
                    <input class="input-box" type="password" name="password"
                        value="<?php echo htmlspecialchars($row['Password']); ?>" readonly>
                    <span class="edit-icon" onclick="enableEdit(this)">&#9998;</span>
                </div>
            </div>
            <div class="box6" id="confirmPasswordBox" style="display: none;">
                <h3>Confirm Password to update data.</h3>
                <div class="editable-input">
                    <input class="input-box" type="password" name="confirm_password" readonly>
                </div>
            </div>

            <button type="submit" class="submitbtn">Submit</button>
        </div>
    </form>

    <h2>My Recipes</h2><?php
$userid = $_SESSION['UserId'];
$sql = "SELECT * FROM bakeryrecipe WHERE UserId = '$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $arrayBakery = array();

    while ($row = $result->fetch_assoc()) {
        $postTitle = $row['BakeryName'];
        $postImage = $row['BakeryPicPath'];
        $postDateTime = $row['DateAdd'];
        $postAuthor = $row['UserId'];
        $postDescription = $row['Description'];
        $postBekeryid = $row['BakeryId'];
        $arrayBakery = [$postBekeryid];

        $sql2 = "CALL CountComments(?)";
        $stmt = $conn->prepare($sql2);

        $stmt->bind_param("s", $postBekeryid); // 's' indicates string

        $stmt->execute();

        $stmt->bind_result($commentCount);

        $stmt->fetch();

        $stmt->close();

        // Display bakery name
        echo
            "<div class='my-recipes'>
         <div class='post-container'>
         <div class='post-detail'>
         <div class='name-bakery'>
             <a href='./Recipe_post.php'>
                 <h5>$postTitle</h5>
             </a>
         </div>
         <div class='post-box'>
             <div class='left'>
                 <form action='Recipe_post.php' method='post'>
                 <a href='Recipe_post.php'>
                     <img class='recipe-image' src='$postImage'
                         alt='$postTitle'>
                 </a>
                 </form>
                 <span class='date-time'>Published: $postDateTime </span>


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
                 <div class='box-3'>
                     <svg class='heart' xmlns='http://www.w3.org/2000/svg'
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

         </div>

     </div>

     </div>
     <form action='delete_post.php' method='post' id = 'deleteForm' onsubmit='return confirmDelete();' style='position: relative;'>
     <!-- Hidden input field to store the BakeryId value -->
     <input type='hidden' name='BakeryId' value='$postBekeryid'>
     
     <div class='delete' style='position: absolute; bottom: 0; right: 0;'>
         <!-- Submit button with the delete icon -->
         <button type='submit'name='delete_history' style='border: none; background: none; padding: 0; margin: 0; cursor: pointer';>
         <div class='delete'>
             <i class='bx bx-trash'></i>
             </div>
         </button>
     </div>
 </form>
 
     </div>";

    }
} else {
    echo "<div style='text-align: center; padding: 20px; border-radius: 8px;'>";
    echo "<p style='font-size: 18px; color: #666;'>You haven't posted any recipes yet.</p>";
    echo "</div>";
}


?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script-profile.js"></script>
    <script>
    let bakeryImg = document.getElementById("profilePic");
    let inputImg = document.getElementById("imageUpload");
    inputImg.onchange = function() {
        bakeryImg.src = URL.createObjectURL(inputImg.files[0]);
    }
    </script>

    <script>
    var isBox6Displayed = false;

    function enableEdit(icon) {
        var inputField = icon.previousElementSibling;
        inputField.readOnly = !inputField.readOnly;
        inputField.classList.toggle("editable"); // Toggle the editable class

        // Change the edit icon based on the edit mode
        icon.innerHTML = (inputField.readOnly) ? "&#9998;" : "&#128190;";

        // Show/hide the confirm password field based on the flag
        var confirmPasswordField = document.querySelector('#confirmPasswordBox input');
        var confirmPasswordBox = document.getElementById('confirmPasswordBox');

        if (!isBox6Displayed) {
            isBox6Displayed = true;
            confirmPasswordField.removeAttribute('readonly'); // Remove readonly attribute
            confirmPasswordBox.style.display = 'block';
        }
    }
    </script>
    <script>
    const Favorite = document.querySelector('.heart');

    document.querySelector('.heart').addEventListener('click', () => {
        Favorite.classList.toggle('heart-click');
    });
    </script>
    <script>
    function confirmDelete() {
        // Use JavaScript to show a confirmation dialog
        var isConfirmed = confirm("Are you sure you want to delete this post?");

        // If the user confirms, submit the form
        return isConfirmed;
    }
    </script>


</body>

</html>