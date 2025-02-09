<!DOCTYPE html>
<html lang=" ='en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X=UA-Complatible" content="IE=edge">
    <meta name="viewport" constent="width=device-width,
        initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="sign-in.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Popins:wght@300;400;500;600;700;800;900E&display=swap");

  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Popins", sans-serif;
  }

  .Sign-in{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("./RecipeSystem/img/background-login.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }

  .wrapper{
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
    background-color: #F0D3CF;

  }

  .wrapper h1{
    color: #000000;
    font-size: 36px;
    text-align: center;
    /* -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #525150; */
  }

  .wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
    background: rgba(247, 198, 192, 0.883);
    border-radius: 40px;
    border: 1px solid #A2673b;
  }

  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }

  .input-box input::placeholder{
    color: #fff;
  }

  .input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
  }

  .wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }

  .remember-forgot label input{
    accent-color: #fff;
    margin-right: 3px;
  }

  .remember-forgot a {
    color: #fff;
    text-decoration:  none;
  }

  .remember-forgot a:hover{
    text-decoration: underline;
  }

  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin-top: 25px;
  }

  .wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin-top:  20px;
  }

  .register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
  }

  .register-link p a:hover{
    text-decoration: underline;
  }

    
</style>

<body>
        <div class="Sign-in">
            <div class="wrapper">
                <form action="Login.php" method="post">
                    <h1>Sign in</h1>
                    <div class="input-box">
                        <input type="text" placeholder="User Id" , name="userId" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="remember-forgot">
                        <lable><input type="checkbox"> Remember me </lable>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" name="Login" class="btn">Login</button>

                    <div class="register-link">
                        <p>Don't have an account? <a href="SignUp.php">Register</a></p>
                    </div>    
                </form>
            </div>
        </div>
</body>

</html>

