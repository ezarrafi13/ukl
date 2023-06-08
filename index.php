<?php 
    session_start();
?>
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
        
        include("kon.php");
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
       
            $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Something went wrong");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['email'];
                $_SESSION['password'] = $row['password'];
            }else{
                echo "<div class='message'>
                  <p>Wrong email or password!!</p>
                    </div> <br>";
                echo "<a href='index.php'><button class='btn'>Go Back</button>";
            }

            if(isset($_SESSION['valid'])){
                header("Location: home.php");
            }
        }else{
        ?>
        <header>Login</header>
        <form action="" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>         
            </div>

            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>         
            </div>

            <div class="field">
                <input type="Submit" class="btn" name="submit" value="Login" required>         
            </div>
            <div class="links">
                Tidak punya akun? <a href="registrasi.php">Registrasi</a>
            </div>
        </form>
    </div>
    <?php } ?>
    </div>
</body>
</html>