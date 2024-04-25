<?php
    include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <title>Job</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">

                <h2 class="title">Student Job</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username">
                </div><br>
                <i style="font-size: 13px;"> <span style="color:#df4adf;">Email school's professional</span> ex: yourname@school.be"</i>


            
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="mail"  placeholder="Email">
                    <!--  <input type="text" name="confirm_mail" placeholder="Confirm Email"> -->
                </div>
                <input type="submit" name="log" value="Login" class="btn">
                <p class="social-text"></p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username">
                </div><br>
                <i style="font-size: 13px;"> <span style="color:#df4adf;">Email school's professional</span> ex: yourname@school.be"</i>
                <div class="input-field">
                <i class="fas fa-envelope"></i>

                <input type="text" name="mail" placeholder="Email">
                 <!--   <input type="text" name= "confirm_mail" placeholder="Confirm Email"> -->
                </div>
                <input type="submit" name="log" value="Sign up" class="btn"> 
                <p class="social-text"></p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Job ?</h3>
                    <p>"Hello young student! To ensure student exclusivity, we'll verify your school's professional address.
                        Choose a nearby job that suits you."
                    </p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New Job ?</h3>
                    <p>"Hello young student! To ensure student exclusivity, we'll verify your school's professional address.
                         Choose a nearby job that suits you."</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "mail", FILTER_SANITIZE_EMAIL);
    //$confirm_email = filter_input(INPUT_POST, "confirm_mail", FILTER_SANITIZE_EMAIL);

    if(empty($username)){
        echo "Please Enter a Username<br>";
    }
    elseif(empty($email)){
        echo "Please Enter an mail<br>";
    }
   // elseif(empty($confirm_email)){
     //   echo "Please Confirm your Email <br>";s
    
   // }
//    elseif($email !== $confirm_email){
  //      echo "Email don't match <br>";
    //}
    else{
        $sql = "INSERT INTO users(username, email)
                VALUES ('$username', '$email')";
        try{

            mysqli_query($conn, $sql);
            echo "SUCCESS";
        }
        catch(mysqli_sql_exception){
            echo " ";
        }
    }
}

?>
