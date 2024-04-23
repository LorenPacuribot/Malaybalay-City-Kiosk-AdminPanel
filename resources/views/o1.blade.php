<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Details</title>
    <style>
        body {
            background-image: url('images/brr.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            padding: 50px; /* Add padding to prevent content from touching the edges */
            line-height: 1;
            counter-reset: page;
            position: relative; /* Make the body relative for absolute positioning */
        }

        h2, h4 {
          font-family: Arial, sans-serif;
          text-align: center;
        }

        .logo {
            width: 400px; /* Set the width of the logo */
            height: 90px; /* Maintain aspect ratio */
            float: left; /* Align the logo to the left */
            margin-right: 10px; /* Add some spacing between the logo and text */
        }

        .office-details {
            margin-top: 20px; /* Add margin to the top */
        }

        .office-details div {
            margin-bottom: 10px; /* Add margin to separate each detail */
        }

        .label {
            font-weight: bold;
            width: 120px; /* Set width for labels */
            display: inline-block; /* Make labels inline-block to maintain alignment */
        }

        .value {
            display: inline-block; /* Make values inline-block to maintain alignment */
        }
    </style>
</head>
<body>
    <h2>Office Details</h2>

    <div class="office-details">
        <img src="{{ asset('images/city.png') }}" alt="Logo" class="logo">
        <div>
            <span class="label">Office Name:</span>
            <span class="value">{{ $office->name }}</span>
        </div>
        <div>
            <span class="label">Location:</span>
            <span class="value">{{ $office->location_name }}</span>
        </div>
        <div>
            <span class="label">Office Hour:</span>
            <span class="value">{{ $office->office_hour }}</span>
        </div>
        <div>
            <span class="label">Contact Information:</span>
            <span class="value">{{ $office->contact_information }}</span>
        </div>
