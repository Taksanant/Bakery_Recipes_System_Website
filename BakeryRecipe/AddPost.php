
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" type="text/css" href="./add_post.css">
    <link rel="stylesheet" type="text/css" href="./navbar.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Cormorant+Garamond|Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim|Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Rock+Salt"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Concert+One|Fredoka+One|Luckiest+Guy|Permanent+Marker|Rock+Salt"
        rel="stylesheet">
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

    footer{
        height: 100px;
    }
      *{
      font-family: "Poppins", sans-serif;
    }
    .input {
        margin: auto;
        width: 90%;
        flex-direction: column;
        font-size: 20px;
    }

    .box1, .box2, .box3, .box4{
        margin: 30px 0px 10px 0px;
    }

    #input-box {
        background: #F0D3CF;
        border-radius: 3px;
        border: 0;
        width: 100%;
        height: 100px;
        font-size: 16px;
        padding: 10px 15px;
        margin-top: 10px;
    }

    .input-box, #category  {
        background: #F0D3CF;
        border-radius: 3px;
        border: 0;
        width: 100%;
        height: 50px;
        font-size: 16px;
        padding: 10px 15px;
        margin-top: 10px;
    }
    #hour, #min{
        background: #F0D3CF;
        border-radius: 3px;
        border: 0;
        width: 48%;
        height: 50px;
        font-size: 16px;
        padding: 10px 15px;
        margin-top: 10px;
        margin-right: 5px;
    }

    input::placeholder{
        font-size: 16px;
    }

    .Ingredient-name1::placeholder{
        font-size: 16px;
    }

    .Ingredient-unit1::placeholder{
        font-size: 16px;
    }

    .Ingredient-name1{
        height: 40px;
        width: 80%;
        background: #F0D3CF;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        
    }

    .Ingredient-unit1{
        height: 40px;
        width: 17.5%;
        background: #F0D3CF;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
    }

    .btn-add-ingredients{
        background: #eda0a0;
        border: 2px;
        border-radius: 14px;
        width: 200px;
        height: 40px;
        font-size: 16px;
        display: block;
        margin: auto;
        margin-top: 20px;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-submit{
        background: #b6b4ec;
        color: #000;
        border: 2px;
        border-radius: 16px;
        width: 200px;
        height: 50px;
        font-size: 16px;
        display: block;
        margin: auto;
        margin-top: 20px;
        font-weight: bold;
        cursor: pointer;
    }
    h3{
        font-weight: lighter;
        font-size: 20px;
    }
    .bi-x-lg{
        font-size: 20px;
    }

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    /* @import url('https://fonts.googleapis.com/css?family=Roboto'); */

    .uploader {
      display: block;
      clear: both;
      /* margin: 0 auto; */
      width: 100%;
      /* max-width: 100%; */
      margin-bottom: 250px;

      label {
        float: left;
        clear: both;
        width: 100%;
        padding: 2rem 1.5rem;
        text-align: center;
        background: #F0D3CF;
        border-radius: 3px;
        /* border: 3px solid #eee; */
        transition: all .2s ease;
        user-select: none;
        cursor: pointer;
      }
      #response {
        float: left;
        clear: both;
        width: 100%;
        &.hidden {
          display: none;
        }
        #messages {
          margin-bottom: .5rem;
        }
      }

      #file-image {
        display: inline;
        margin: 0 auto .5rem auto;
        width: auto;
        height: auto;
        max-width: 180px;
        &.hidden {
          display: none;
        }
      }
      
    #notimage {
        display: block;
        float: left;
        clear: both;
        width: 100%;
        &.hidden {
          display: none;
        }
    }

    progress, .progress {
        appearance: none;
        display: inline;
        clear: both;
        margin: 0 auto;
        width: 100%;
        max-width: 180px;
        height: 8px;
        border: 0;
        border-radius: 4px;
        background-color: #eee;
        overflow: hidden;
      }

      .progress[value]::-webkit-progress-bar {
        border-radius: 4px;
        background-color: #eee;
      }

      .progress[value]::-webkit-progress-value {
        background: linear-gradient(to right, darken(#454cad,8%) 0%, #454cad 50%);
        border-radius: 4px; 
      }
      .progress[value]::-moz-progress-bar {
        background: linear-gradient(to right, darken(#454cad,8%) 0%, #454cad 50%);
        border-radius: 4px; 
      }

      input[type="file"] {
        display: none;
      }

    }

    input{
      border: none;
      border-radius: 3px;
      padding: 10px 15px;
      margin: 3px 0;
    }

    .ingredients, .unit{
      background-color: #F0D3CF;
      font-size: 16px;
      height: 40px;
    }
    .ingredients{
      width: 80%;
    }
    .unit{
      width: 17%;
    }
    .delete{
      height: 40px;
      padding: 10px;
      cursor: pointer;
      background-color: #eda0a0;
    }
    .box2{
        text-align: center;

    }
    #bakeryPic{
        height: cover;
        width: 600px;
        object-fit: cover;
        border-radius: 14px;
    }
    #inputImg {
  width: 600px;  
  padding: 5px;   
  border: 1px solid #ccc; 
  border-radius: 3px; 
  cursor: pointer;
}
.inputImg-bakery{
    text-align: center;
}
.form-group {
  margin-bottom: 1.5rem; /* Add some spacing between form groups */
}

.table-responsive {
  overflow-x: auto; /* Enable horizontal scrolling if table content overflows */
}

.table > thead > tr > th,
.table > tbody > tr > td {
  vertical-align: middle; /* Align table cell content vertically */
  padding: 0.75rem 1rem; 
  border-color: #dee2e6; /* Set border color */
}

.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > td {
  border-width: 1px; /* Ensure borders are visible */
}

#addIngre {
  padding: 5px 10px; /* Adjust button padding */
  font-size: 14px; /* Adjust button font size */
  background-color: #28a745; /* Green color for add button */
  color: #fff; /* White text color */
  border-color: #28a745; /* Match button background color */
  border-radius: 4px; /* Rounded corners */
  cursor: pointer; /* Indicate clickable behavior */
}
.btn-danger {
  /* Base styles for danger buttons */
  background-color: #dc3545; /* Bold red color */
  border-color: #dc3545; /* Match background color */
  color: #fff; /* White text for contrast */
  padding: 5px 10px; /* Adjust padding for better spacing */
  font-size: 14px; /* Adjust font size */
  border-radius: 4px; /* Rounded corners */
  cursor: pointer; /* Indicate clickable behavior */
}

/* Override for smaller padding in table cells */
td .btn-danger {
  padding: 4px 8px; /* Slightly reduce padding within table cells */
}

/* Hover effect for interactivity */
.btn-danger:hover {
  background-color: #c82333; /* Slightly darker red on hover */
  border-color: #c82333; /* Match hover background color */
}

/* Ensure accessibility for visually impaired users */
.btn-danger::before {
  content: "Remove"; /* Provide meaningful text alternative for screen readers */
}
.box1 select {
  /* Style the dropdown menu */
  padding: 5px 10px; /* Add padding for better appearance */
  border: 1px solid #ccc; /* Create a border */
  border-radius: 4px; /* Add rounded corners */
  font-size: 14px; /* Adjust font size for readability */
  cursor: pointer; /* Indicate clickable behavior */
}

.box1 select:focus {
  /* Style the dropdown menu on focus */
  outline: none; /* Remove default outline */
  border-color: #28a745; /* Change border color on focus */
}



</style>

<body>
    <nav class="navbar">
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
            <a href="./bakinglist.html">
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
    <form action="AddPostRounte.php" method="post" name="add_name" id="add_name" enctype="multipart/form-data" >
    <div class="input">
        <div class="box1">
            <h3>Recipe Name</h3>
                <input class="input-box" name="bakeryName" type="text" placeholder="Your recipe name..." required>
    </div>
        <div class="box6" style="display: flex; gap: 1%; margin: 15px 0;">
        <div class="one" style="width: 24.25%;">
            <h3>Category</h3>
            <select name="category" id="category" require>
                <option value="breads">Breads</option>
                <option value="cakes">Cakes</option>
                <option value="cookies">Cookies</option>
                <option value="cupcakes">Cupcakes</option>
                <option value="doughnuts">Doughnuts</option>
                <option value="gluten-free">Gluten-free</option>
            </select>
        </div>
        <div class="two" style="width: 24.25%;">
            <h3>Time to prepare</h3>
            <div class="flex" style="display: flex;">
                <select name="prephour" id="hour" require>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
            </select> <span style="margin: 20px 3px 0 0;">hr</span>
            <select name="prepmin" id="min" require>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
            </select> <span style="margin: 20px 0 0 0;">min</span> 
            </div>
        </div>
        <div class="three" style="width: 24.25%;">
            <h3>Cooking time</h3>
            <div class="flex" style="display: flex;">
            <select name="cookinghour" id="hour" require>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
            </select> <span style="margin: 20px 3px 0 0;">hr</span>
            <select name="cookingmin" id="min" require>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
            </select> <span style="margin: 20px 0 0 0;">min</span> 
            </div>
        </div>
        <div class="four" style="width: 24.25%;">
            <h3>This recipe is for</h3>
        <input class="input-box" type="text" name="serving" placeholder="1 person, 1 pound, 1 glass,..." required > 
        </div>
        </div>

        <label for="picture">Upload Photo</label>
        <div class="box2">
            <img src="" id="bakeryPic">
        </div>
        <div class="inputImg-bakery">
            <input type="file" id="inputImg" name="inputImg"><label for="imageUpload"></label>
        </div>

        <div class="box3">
            <h3>Description</h3>
            <textarea id="input-box" name="desc" placeholder="Description..." required></textarea>
        </div>
        </form>
        <div class="container">  
                <div class="form-group">
                <h3>Ingrediants</h3>  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="ingre[]" placeholder="sugar" required class="form-control name_list" style="padding: 10px 170px;"/></td>
                                         <td><input type="text" name="unit[]" placeholder="1 cup" required class="form-control name_list" style="padding: 10px 90px;"/></td>  
                                          
                                    </tr>  
                               </table>
                               <button type="button" name="addIngre" id="addIngre" style = "margin-left: 17px" class="btn btn-success">+ Add ingredients</button>
                          </div>     
                </div>  
            </div>  
        <div class="box5">
            <h3>Medthod</h3>
                <textarea id="input-box" name="method" placeholder="How to do it..." required></textarea>
        </div>
            <button type="submit" name="submitPost" values="submit" class="btn-submit"><h3>Publish</h3></button>
        </form>

    </div>

    <footer>

    </footer>

    <script>
            let bakeryImg = document.getElementById("bakeryPic");
            let inputImg =document.getElementById("inputImg");
            inputImg.onchange = function(){
                bakeryImg.src = URL.createObjectURL(inputImg.files[0]);
            }
    </script>

    <script> 
        $(document).ready(function(){  
        var i=1;
          
        $('#addIngre').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="ingre[]" placeholder="Enter Ingrediants" style="padding: 10px 170px;" class="form-control name_list"/></td>\
            <td> <input type="text" name="unit[]" placeholder="Enter Unit" style="padding: 10px 90px;" class="form-control name_list"/></td>\
            <td> <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"></button></td></tr>');  
        });  
        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        });  
        $('#submitPost').click(function(){            
            $.ajax({  
                    url:"AddPostRounte.php",  
                    method:"POST",  
                    data:$('#add_name').serialize(),  
                    success:function(data)  
                    {  
                        alert(data);  
                        $('#add_name')[0].reset();  
                    }  
            });  
        });  
        });  
 </script>

</body>


</html>