<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaybalay City</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <style>
        body {

            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            background-attachment: fixed;
            overflow-x: hidden;
        }
        .dropbtn {
    background-color: #2D9FE0;
    color: rgb(255, 255, 255);
    padding: 10px;
    font-size: 16px;
    border: none;
    margin: 10px 0px;
    z-index: 99;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 450px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    max-height: 150px; /* Set a fixed height */
    overflow-y: auto; /* Add vertical scrollbar */
  }

  .dropdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #2E4B66;}
h4{
    font-family: Arial, sans-serif;
    text-align: left;
    font-weight: normal;
    font-size: 15px;
}
    </style>
</head>
<body>
    <div>
        <p>CLICK THE ROOM YOU WANT TO CHANGE OFFICES</p>
        <div style="white-space: nowrap;">
            <p style="display: inline;">Room Number:</p>
            <h4 style="display: inline;">1</h4>
        </div>
        <div style="white-space: nowrap;">
            <p style="display: inline;">Office Name:</p>
            <!-- Update this line to include an ID -->
            <h4 id="selected-office" style="display: inline;">1</h4>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Change Office</button>
            <div class="dropdown-content">
                <!-- Hardcoded dropdown items for testing -->
                <a class="office-item" data-location-id="1" data-office-id="101">Office 101</a>
                <a class="office-item" data-location-id="1" data-office-id="102">Office 102</a>
                <a class="office-item" data-location-id="1" data-office-id="103">Office 103</a>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle dropdown item selection -->
    <script>
        // Get all office items
        const officeItems = document.querySelectorAll('.office-item');

        // Loop through each office item and add event listener
        officeItems.forEach(item => {
            item.addEventListener('click', () => {
                // Get the office name from the clicked item
                const officeName = item.textContent;

                // Update the content of the <h4> element with the retrieved office name
                document.getElementById('selected-office').textContent = officeName;
            });
        });
    </script>
</body>

</html>
