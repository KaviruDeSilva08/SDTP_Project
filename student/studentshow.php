<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property Listings</title>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFuJj9r3t2NzbFDFRnF6xQMSrX3MnZPuI&callback=initMap">
</script>
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
        flex-direction: column;
        align-items: center;
    }
    .container, .container2 {
        width: 1400px;
        background-color: #F6FFF2;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    .container2 {
        height: 400px; 
    }
    .logo {
        position: absolute;
        top: 10px;
        right: 10px;
        height: 100px;
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
    
</style>
</head>
<body>

    <div class="container">

<h1>Reccomened Hostels List</h1>

<table>
    <tr>
        <th>Hostel Name</th>
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
    
    include('../conn.php'); 
    
    $sql = "SELECT * FROM aproperties";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        
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
            echo "<button class='button show-btn' data-id='" . $row["apid"] . "' data-latitude='" . $row["alatitude"] . "' data-longitude='" . $row["alongitude"] . "' data-name='" . htmlspecialchars($row["apname"], ENT_QUOTES) . "' data-address='" . htmlspecialchars($row["apaddress"], ENT_QUOTES) . "'>Show</button>";

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

<div class="container2" id="map"></div>
<script>
var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: {lat: -34.397, lng: 150.644}
    });

    
}

function showLocation(lat, lng, content) {
    var newCenter = new google.maps.LatLng(lat, lng);
    map.panTo(newCenter);

    
    var infoWindow = new google.maps.InfoWindow({
        content: content 
    });

    infoWindow.setPosition(newCenter);
    infoWindow.open(map);
}

document.addEventListener('DOMContentLoaded', function() {
    var showButtons = document.querySelectorAll('.show-btn');
    showButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var lat = parseFloat(button.getAttribute('data-latitude'));
            var lng = parseFloat(button.getAttribute('data-longitude'));
            
            var name = button.getAttribute('data-name');
            var address = button.getAttribute('data-address');
            
            console.log("Name: " + name + ", Address: " + address); 
            var content = "<strong>Property Name:</strong> " + name + "<br><strong>Address:</strong> " + address;
            showLocation(lat, lng, content);
        });
    });
});


</script>

</body>
</html>
