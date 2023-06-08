<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASKU</title>
    <link rel="stylesheet" href="style/tu.css">
    <script src="https://kit.fontawesome.com/76d5a28b1f.js" crossorigin="anonymous"></script>
    <style>
        *, html, body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
        }

        .fcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-color: white;
        }

        .wrapper {
            position: absolute;
            width: 1512px;
            height: 123px;
            left: 0px;
            top: 0px;
            background: #547FE7;
        }

        .brand {
            display: flex;
            flex-direction: row;
        }

        .firstname {
            position: absolute;
            width: 131px;
            height: 44px;
            left: 59px;
            top: 57px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 44px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
        }

        .navigation {
            text-decoration: none;
            position: absolute;
            width: 75px;
            height: 29px;
            left: 1094px;
            top: 58px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 29px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #FFFFFF;
        }

        .navigation>li {
            list-style-type: none;
            padding: 15px;
        }

        .navigation>li>a {
            color: white;
            font-size: 14px;
            text-decoration: none;
        }

        .sidebar-header h3 {
            position: absolute;
            width: 87px;
            height: 29px;
            left: calc(50% - 87px/2 - 615.5px);
            top: 191px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #547FE7;
        }

        .sidebar-menu li a {
            position: relative;
            width: 132px;
            height: 219px;
            left: 60px;
            top: 246px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 15px;
            padding: 10px;
            text-decoration-line: none;
            color: #000000;
        }

        .background {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: #D9D9D9;
        }

        .background button {
            font-family: sans-serif;
            font-size: 15px;
            background: #547FE7;
            color: white;
            height: 45px;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            margin-top: 10px;
            margin-right: 20px;
            transition: background 0.3s ease;
        }

        .background button:hover {
            background: #218fbf;
        }

        .background button a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .container button {
            font-family: sans-serif;
            font-size: 20px;
            background: #547FE7;
            color: white;
            height: 60px;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            margin-top: 20px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .container button:hover {
            background: #4d77cb;
        }

        .container button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="background">
        <button type="button" value="Absensi Kelas"><a href="abs.php">Absensi Kelas</a></button>
        <button type="button" value="Kas Kelas"><a href="kas.html">Kas Kelas</a></button>
    </div>
    <div class="container">
        
    </div>

    <nav class="wrapper">
        <div class="brand">
            <div class="firstname">KASKU</div>
        </div>
        <ul class="navigation">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="kas.html">Kas</a></li>
            <li><a href="abs.php">Absensi</a></li>
            <li><a href="log.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
