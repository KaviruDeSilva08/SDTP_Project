<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NSBM Green University Town</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-image: url('images/background3.jpg');
            background-size: cover;
            background-filter: blur(20px);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            margin: 0;
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px; 
            height: 100px; 
        }
        .button-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 50px;
            box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
            transition: 0.3s;
            
        }
        .btn:hover {
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    
    <div class="logo">
        <img src="images\logo.png" width="256" height="128" /> 
    </div>
    <div class="button-container">
        <form action="landlord\landlords.php" method="post">
            <input type="submit" class="btn" value="Landlords">
        </form>
        <form action="warden\warden.php" method="post">
            <input type="submit" class="btn" value="Warden">
        </form>
        <form action="student/students.php" method="post">
            <input type="submit" class="btn" value="Students">
        </form>
    </div>
</body>
</html>
