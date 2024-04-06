<!DOCTYPE html>
<html>
<head>
    <title>Login landlords</title>
    <?php
    session_start(); 
    
    $error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : ""; 

    
    unset($_SESSION['error_message']);
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 300px;
            background-color: #F6FFF2;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
           
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px; 
            height: 100px; 
        }
        h1 {
            text-align: center;
            margin-top: 1px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 30px;
            box-sizing: border-box;
            
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            text-align: center;
        }
        .message {
            color: black;
            font-size: 14px;
            margin-top: 5px;
            text-align: center;
        }
        .message a{
            color : blue;
            text-decoration : none;
        }
    </style>
    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('error-message');

            if (username === '' || password === '') {
                errorMessage.innerText = 'Please enter both username and password.';
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="logo">
        <img src="logo.png" alt="Logo" width="256" height="128" />
    </div>
    <div class="container">
        <h1>Login Warden</h1>
        <?php
    if(isset($_SESSION['error_message'])) {
        echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); 
    }
    ?>
        <form action="wardenlogin.php" method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Submit">
        </form>
        
        <div class="message"> Don't you have an account ? <a href = "wardenr.php"><b>Register</b></a></div>
        <div id="error-message" class="error-message"></div>
    </div>
</body>
</html>
