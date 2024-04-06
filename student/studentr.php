<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        h2 {
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
        input[type="password"],
        input[type="email"] {
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
</head>
<body>
<div class="logo">
        <img src="logo.png" alt="Logo" width="256" height="128" />
    </div>
    <div class="container">
        <h2>Register for students</h2>
        <form action="restudent.php" method="post">

            <label for="suserID">User ID:</label>
            <input type="text" id="useid" name="userid" required><br><br> 

            <label for="susername">User Name:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="semail">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="spassword">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <label for="scontact">Contact Number:</label>
            <input type="text" id="contact" name="contact" required><br><br>
            
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>

