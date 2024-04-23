<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Form</title>
    <style>
        body {
            background-image: url('images/brr.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            padding: 100px; /* Add padding to prevent content from touching the edges */
            line-height: 1;
            counter-reset: page;
            position: relative; /* Make the body relative for absolute positioning */
            text-align: center; /* Center-align all content */
        }
        @page {
            size: landscape; /* Set the page orientation to landscape */
            margin: 0; /* Remove default margins */
        }

        .logo {
            max-width: 200px; /* Set maximum width for the logo */
            margin: 0 auto; /* Center the logo horizontally */
            display: block; /* Ensure the logo is displayed as a block element */
            margin-bottom: 20px; /* Add some space below the logo */
        }
        h1{
            text-transform: uppercase;
        }
        h2 {
            font-family: Arial, sans-serif;
            margin-bottom: .2em;
            font-size: 20px;
            text-transform: uppercase;

        }

        h4 {
            font-family: Arial, sans-serif;
            font-weight: normal;
            margin-top: .2em;
            margin-bottom: .2em;
            font-size: 15px;

        }

        table {
            border-collapse: collapse;
            width: 100%;
            table-layout: auto; /* Distribute table columns evenly */
        }

        table {
          border-collapse: collapse;
          width: 100%;
        }


        td {
          border: 1px solid #000000;
          text-align: center;
          padding: 8px;
          background-color: transparent; /* Make table cells transparent */
          font-size: 13px;
        }
        td.box{
            width: 300px;
        }

        th {
            border: 1px solid #000000;
            text-align: center;
            padding: 8px;
           /* background-color: transparent;  Make table cells transparent */
            background-color: #00b0f0; /* Make table cells transparent */
            white-space: nowrap; /* Ensure table headings remain in one line */
            font-size: 14px;
        }

        tr:nth-child(even) {
          background-color: transparent;
        }

    </style>
</head>
<body>
    <img src="images/city.png" alt="Logo" class="logo">
    <h1>{{ $office->name }}</h1>


    <table>
        <thead>
            <tr>

                <th>Location</th>
                <th>Office Hour</th>
                <th>Contact Information</th>
            </tr>
        </thead>
        <tbody>

                <tr>

                    <td class="box">{{ $office->location_name }}</td> <!-- Check if location exists -->
                    <td class="box">{{ $office->office_hour }}</td>
                    <td class="box">{{ $office->contact_information }}</td>
                </tr>

        </tbody>
    </table>
</body>
</html>
