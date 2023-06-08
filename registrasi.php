<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="box form-box">

    <?php

    include("config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //verify unique email

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

        if(mysqli_num_rows($verify_query) !=0){
            echo "<div class='message'><p>This email is used, Try another one!</p></div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{
            mysqli_query($con,"INSERT INTO users(username,email,password) VALUES('$username','$email','$password')") or die("Error Occured");
            echo "<div class='message'><p>Registration Success!!</p></div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
        }
    }else{


    ?>
        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <label for="Username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>         
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>         
            </div>

            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>         
            </div>

            <div class="field">
                <input type="Submit" class="btn" name="submit" value="Registrasi" required>         
            </div>
            <div class="links">
                Sudah punya akun? <a href="index.php">Login</a>
            </div>
        </form>
    </div>
    <?php }?>
    </div>
</body>
</html>