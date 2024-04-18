<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaybalay City</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: linear-gradient(to left,  #e6f5ff, #d9f2ff, #c4efff, #a8e6ff, #8de1ff, #72dcff, #56d8ff, #3ad4ff, #1e90ff);
            /* Set the height of the body to fill the viewport */
            height: 100vh;
            /* Remove any default margin */
            margin: 0;
            /* Center content */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        /* Style for logo */
        .logo {
            width: 200px; /* Adjust width as needed */
            height: auto;
        }
      /* Style for login button */
      .login-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            text-decoration: none; /* Remove default anchor underline */
            display: inline-block; /* Ensure it behaves like a block element */
        }
        /* Style for login button hover */
        .login-btn:hover {
            background-color: #0056b3; /* Darker shade of blue */
        }
    </style>
</head>
<body>
    <!-- Your logo here -->
    <img src="images/city.png" alt="City Hall" class="logo">

    <!-- Headings -->
    <h2>MALAYBALAY CITY HALL</h2>
    <h2>Interactive Self Service Kiosk</h2>

    <!-- Login button -->
    <a href="{{ url('/admin/login') }}" class="login-btn"> Admin Dashboard</a>
</body>
</html>
