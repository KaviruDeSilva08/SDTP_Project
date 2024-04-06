<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property Listings</title>
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
            width: 1400px;
            background-color: #F6FFF2;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
           
        }

        .container2 {
            width: 1400px;
            background-color: #F6FFF2;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative; 
            top: 50%;
            
            
           
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px; 
            height: 100px; 
        }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-bottom: 1px solid #ddd; 
        border-right: 1px solid #ddd;
    }

    th {
        background-color: #f7f7f7;
    }

    tr:hover {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        height: auto;
    }

    .button-column {
        width: 80px;
    }

    .button {
        display: inline-block;
        padding: 5px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        margin-right: 5px;
    }

    .button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="logo">
    <img src="logo.png" alt="Logo" width="256" height="128" />
</div>

<div class="container">

<h1>Property List</h1>

<table>
    <tr>
        <th>Property Name</th>
        <th>Owner</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Price</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Suitable</th>
        <th>Description</th>
        <th>Image</th>
        <th class="button-column">Actions</th>
    </tr>
    <?php
    // Include database connection file
    include('../conn.php'); // Adjust the path as necessary

    // Fetch data from the properties table
    $sql = "SELECT * FROM properties";
    $result = $conn->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["ownern"] . "</td>";
            echo "<td>" . $row["paddress"] . "</td>";
            echo "<td>" . $row["pcn"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["latitude"] . "</td>";
            echo "<td>" . $row["longitude"] . "</td>";
            echo "<td>" . $row["suitable"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td><img src='../landlord/uploads/" . $row["pimage"] . "'  style='max-width: 100px; height: 100px;'></td>";
            echo "<td class='button-column'>";
            echo "<button class='button approve-btn' data-id='" . $row["pid"] . "'>Approve</button>";
            echo "<button class='button remove-btn' data-id='" . $row["pid"] . "'>Remove</button>";
            echo "</td>";
            echo "</tr>";
        }
             
    } else {
        echo "<tr><td colspan='11'>No properties found.</td></tr>";
    }
    $conn->close();
    ?>
</table>
</div>

<div class="container2">

<h1>Approved Property List</h1>

<table>
    <tr>
        <th>Property Name</th>
        <th>Owner</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Price</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Suitable</th>
        <th>Description</th>
        <th>Image</th>
        <th class="button-column">Actions</th>
    </tr>
    <?php
    // Include database connection file
    include('../conn.php'); // Adjust the path as necessary

    // Fetch data from the properties table
    $sql = "SELECT * FROM aproperties";
    $result = $conn->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["apname"] . "</td>";
            echo "<td>" . $row["apowner"] . "</td>";
            echo "<td>" . $row["apaddress"] . "</td>";
            echo "<td>" . $row["apcn"] . "</td>";
            echo "<td>" . $row["aprice"] . "</td>";
            echo "<td>" . $row["alatitude"] . "</td>";
            echo "<td>" . $row["alongitude"] . "</td>";
            echo "<td>" . $row["asuitable"] . "</td>";
            echo "<td>" . $row["adescription"] . "</td>";
            echo "<td><img src='../landlord/uploads/" . $row["aimage"] . "'  style='max-width: 100px; height: 100px;'></td>";
            echo "<td class='button-column'>";
            echo "<button class='button remove-btn' data-id='" . $row["apid"] . "'>Remove</button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No properties found.</td></tr>";
    }
    $conn->close();
    ?>
</table>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var approveButtons = document.querySelectorAll('.approve-btn');
    var removeButtons = document.querySelectorAll('.remove-btn');

    approveButtons.forEach(button => {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            // Send an AJAX request to approve property
            fetch('approve_property.php', {
                method: 'POST',
                body: JSON.stringify({id: id}),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(response => location.reload());
        });
    });

    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            // Send an AJAX request to remove property
            fetch('remove_property.php', {
                method: 'POST',
                body: JSON.stringify({id: id}),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(response => location.reload());
        });
    });
});
</script>


</body>
</html>
