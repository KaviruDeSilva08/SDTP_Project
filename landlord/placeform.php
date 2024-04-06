<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Registration Form</title>
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
            width: 800px;
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
           margin-top: 20px; 
           margin-bottom: 20px; 
}
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
        form {
            margin: 0 auto;
            width: 70%;
            background-color: #F6FFF7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        form input[type="text"],
        form input[type="password"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
        }
        form input[type="file"] {
            margin-top: 5px;
            width: 60%; 
            box-sizing: border-box; 
            background-color: #ffffff; 
            color: #333333; 
            font-size: 16px; 
            line-height: 1.5; 
            padding: 10px; 
            border: 1px solid #cccccc; 
            border-radius: 30px; 

        }
        form input[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="logo">
        <img src="logo.png" alt="Logo" width="256" height="128" />
    </div>
    <div class="container">
        <h2>Property Registration Form</h2>
        <form action="replace.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="place_name">Place Name:</label></td>
                <td><input type="text" id="place_name" name="place_name" required></td>
                <td><label for="owner_name">Owner Name:</label></td>
                <td><input type="text" id="owner_name" name="owner_name" required></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" id="address" name="address" required></td>
                <td><label for="contact_number">Contact Number:</label></td>
                <td><input type="text" id="contact_number" name="contact_number" required></td>
            </tr>
            <tr>
                <td><label for="price">Price:</label></td>
                <td><input type="text" id="price" name="price" required></td>
                <td><label for="latitude">Latitude:</label></td>
                <td><input type="text" id="latitude" name="latitude" required></td>
            </tr>
            <tr>
                <td><label for="longitude">Longitude:</label></td>
                <td><input type="text" id="longitude" name="longitude" required></td>
                <td><label for="suitable">Suitable:</label></td>
                <td><input type="text" id="suitable" name="suitable" required></td>
            </tr>
            <tr>
                <td><label for="description">Description:</label></td>
                <td colspan="3"><textarea id="description" name="description" required></textarea></td>
            </tr>
            <tr>
                <td colspan="4"><label for="image">Image:</label></td>
            </tr>
            <tr>
                <td colspan="4"><input type="file" id="image" name="image" accept="image/*" required></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center;"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
