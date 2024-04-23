<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Form</title>
    <style>
        body {
            background-image: url('images/brr.png');
          background-size: 100% 100%;;
          background-repeat: no-repeat;
          font-family: Arial, sans-serif;
          padding: 50px; /* Add padding to prevent content from touching the edges */
          line-height: 1;
          counter-reset: page;
        }
        @page {
            size: landscape; /* Set the page orientation to landscape */
            margin: 0; /* Remove default margins */
        }
        table {
            border-collapse: collapse;
            width: 100%;


        }

        h2 {
            font-family: Arial, sans-serif;
            text-align: right;
            margin-bottom: .2em;
            font-size: 15px;
            text-transform: uppercase;
        }

        h4 {
            font-family: Arial, sans-serif;
            text-align: right;
            font-weight: normal;
            margin-top: .2em;
            margin-bottom: .2em;
            font-size: 14px;
        }

        /* Resize the logo */
        .logo {
            height: 90px; /* Set the height to match the font size of h2 and h4 */
            float: left; /* Align the logo to the left */
            margin-right: 10px; /* Add some spacing between the logo and text */
        }

        hr {
            position: fixed;
            bottom: 50px; /* Adjust this value to align with the h3 elements */
            left: 0;
            right: 0;
            width: 95%;
            height: 1px; /* Set the height to make the line thinner */
            border: none;
            background-color: #000; /* Set the color of the line */

        }
        h3 {
            font-family: Arial, sans-serif;
            text-align: left;
            font-weight: normal;
            font-size: 12px;
            position: fixed;
            left: 40px;
            bottom: 22px;
            width: 95%;

        }

        h3.footer {
            font-family: Arial, sans-serif;
            text-align: right;
            font-weight: normal;
            font-size: 12px;
            position: fixed;
            left: 0;
            bottom: 22px;
            width: 95%;

        }

        /* Increment the page counter on page break */
        .page {
            page-break-before: always;
        }

        /* Update page number dynamically */
        h3.footer::after {
            content:  counter(page);
        }


        th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
           /* background-color: transparent;  Make table cells transparent */
            background-color: #00b0f0; /* Make table cells transparent */
            white-space: nowrap; /* Ensure table headings remain in one line */
            font-size: 14px;
        }
        th.box{
            width: 170px;
        }

        th.box2{
            width: 500px;
        }




        td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            background-color: transparent; /* Make table cells transparent */
            font-size: 14px;
        }

        td.box{
            width: 500px;
        }

        tr:nth-child(even) {
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="bg">
<!-- Logo -->
{{-- <img src="images/citylogo.png" alt="Logo" class="logo"> --}}


<img src="images/city.png" alt="Logo" class="logo">
<h2>{{ $service->office->name }}</h2>
<h4>{{ $service->office->office_hour }}</h4>
    <h4>except on holidays</h4>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <th>{{ $service->name }}</th>
        </tr>
    </table>
    <table>
        <tr>
            <th class="box">Description of Service</th>
            <td >{{ $service->description_of_service}}</td>
        </tr>
        <tr>
            <th>Office and Division</th>
            <td>{{ $service->office_and_division }}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="box">Classification</th>
            <td class="box">{{ $service->classification }}</td>
            <th class="box">Total Processing Time</th>
            <td>{{ $service->total_processing_time }}</td>
        </tr>
        <tr>
            <th class="box">Type of Transaction</th>
            <td>{{ $service->type_of_transaction }}</td>
            <th>Total Fees</th>
            <td>{{ $service->total_fees }}</td>
        </tr>
        <tr>
            <th>Who May Avail</th>
            <td>{{ $service->who_may_avail }}</td>
            <th class="box">Period of Extension</th>
            <td>{{ $service->period_of_extension }}</td>
        </tr>
    </table>
    <br>

    <table>
        <tr>
            <th class="box2">Documentary Requirements</th>
            <th class="box2">Where to Secure</th>
        </tr>
        <tr>
            @foreach($service->documentaryRequirements as $requirement)
            <tr>
                <td>{{ $requirement->documentary_requirement }}</td>
                <td>{{ $requirement->where_to_secure }}</td>
            </tr>
            @endforeach
        </table>

        <br>
        <hr>
        <h3 class="footer"> </h3>
        <h3> MALAYBALAY CITY CITIZEN’S CHARTER</h3>
        <div style="page-break-before: always;"></div>
        <table>
            <tr>
                <th>Client Action</th>
                <th>Agency Action</th>
                <th>Fees to be Paid</th>
                <th>Processing Time</th>
                <th>Person in-Charge</th>
                <th>Contact Number</th>
            </tr>
            @foreach($service->clientActions as $clientAction)
            <tr>
                <td rowspan="{{ $clientAction->agencyActions->count() }}">{{ $clientAction->name }}</td>
                @foreach($clientAction->agencyActions as $key => $agencyAction)
                @if($key > 0)
                <tr>
                @endif
                <td>{{ $agencyAction->agency_action }}</td>
                <td>{{ $agencyAction->fees_to_be_paid }}</td>
                <td>{{ $agencyAction->processing_time }}</td>
                <td>{{ $agencyAction->person_in_charge }}</td>
                <td>{{ $agencyAction->contact_number }}</td>
                @if($key == 0)
                </tr>
                @endif
                @endforeach
            </tr>
            @endforeach
    </table>

    <br>
    <hr>
    <h3 class="footer"></h3>
    <h3>MALAYBALAY CITY CITIZEN’S CHARTER</h3>


</div>
</body>

</html>
