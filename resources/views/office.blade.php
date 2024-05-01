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
            padding: 50px; /* Add padding to prevent content from touching the edges */
            line-height: 1;
            counter-reset: page;
            position: relative; /* Make the body relative for absolute positioning */
        }
        @page {
            size: landscape; /* Set the page orientation to landscape */
            margin: 0; /* Remove default margins */
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

        h2, h4 {
          font-family: Arial, sans-serif;
          text-align: center;
        }

         /* Resize the logo */
         .logo {
            height: 90px; /* Set the height to match the font size of h2 and h4 */
            position: fixed; /* Position the logo absolutely */
            top: 20px; /* Align the logo to the top of the screen */
            left: 50px; /* Align the logo to the left of the screen */
            padding: 15px; /* Adjust padding as needed *//
        }

        td {
          border: 1px solid #000000;
          text-align: center;
          padding: 8px;
          background-color: transparent; /* Make table cells transparent */
          font-size: 13px;
        }

        th {
            border: 1px solid #000000;
            text-align: center;
            padding: 8px;
           /* background-color: transparent;  Make table cells transparent */
            background-color: #00b0f0; /* Make table cells transparent */
            white-space: nowrap; /* Ensure table headings remain in one line */
            font-size: 14px;
            width: 250px;
        }

        tr:nth-child(even) {
          background-color: transparent;
        }
    </style>

</head>
<body>
    {{-- <img src="{{ asset('images/city.png') }}" alt="Logo" class="logo"> --}}
    <h2>List of Offices</h2>

    <table>
        <thead>
            <tr>
                <th>Office Name</th>
                <th>Location</th>
                {{-- <th>Office Hour</th> --}}
                <th>Contact Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offices as $office)
                <tr>
                    <td>{{ $office->name }}</td>
                    <td>{{ $office->location_name }}</td> <!-- Check if location exists -->
                    {{-- <td>{{ $office->office_hour }}</td> --}}
                    <td>{{ $office->contact_information }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
