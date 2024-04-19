<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Form</title>
    <style>
        body {
          background-image: url('images/background-image-service.jpg'); /* Replace 'images/background-image-service.jpg' with the correct path to your image */
          background-size: cover;
          background-repeat: no-repeat;
          font-family: Arial;
          padding: 25px; Add padding to prevent content from touching the edges
        }

        /* Landscape orientation */
@media print and (orientation: landscape) {
    @page {
        size: landscape;
        margin: 0; /* Set margin to 0 */
    }

    body {
        /* background-size: auto 100%; */
         /* background-size:  297mm 210mm; */
         background-size: 355.6mm 215.9mm;
    }
}

/* Portrait orientation */
@media print and (orientation: portrait) {
    @page {
        size: portrait;
        margin: 0; /* Set margin to 0 */
    }

    body {
        /* background-size: auto 100%; */
        /* background-size: 210mm 297mm; */
        background-size: 215.9mm 355.6mm;
    }
}

/* Add page numbers */
/* Add page numbers */
@page {
    margin: 25mm; /* Set margins to ensure content area doesn't overlap with page numbers */
    @bottom-left {
        content: counter(page);
        color: black; /* Font color for page numbers */
    }
}

@page :first {
    margin-top: 0; /* Remove top margin for the first page */
}


        table {
          border-collapse: collapse;
          width: 100%;
        }

        h2 {
          font-family: Arial;
          text-align: right;
        }

        h4 {
          font-family: Arial;
          text-align: right;
          font-weight: normal;
        }



        /* Resize the logo */
        .logo {
    /* width:350px; Set the width to match the font size of h2 and h4 */
    height: 90px; /* Set the height to match the font size of h2 and h4 */
    float: left; /* Align the logo to the left */
    margin-right: 10px; /* Add some spacing between the logo and text */
        }

        td, th {
          border: 1px solid #9596a7;
          text-align: left;
          padding: 8px;
          background-color: transparent; /* Make table cells transparent */
        }

        tr:nth-child(even) {
          background-color: transparent;
        }
    </style>
</head>
<body>
<!-- Logo -->
<img src="images/citylogo.png" alt="Logo" class="logo">

<h2>Office Name</h2>
<h4>Office Schedule</h4>

<table>
  <tr>
    <th>Service Title</th>
  </tr>
</table>
<table>
  <tr>
    <th>Description of Service</th>
    <td>description of the service text</td>
  </tr>
  <tr>
    <th>Office and Division</th>
    <td>Office and Division text</td>
  </tr>
</table>
<table>
  <tr>
    <th>Classification</th>
    <td>Classification text</td>
    <th>Total Processing Time</th>
    <td>Total Processing Time text</td>
  </tr>
  <tr>
    <th>Type of Transaction</th>
    <td>Type of Transaction text</td>
    <th>Total Fees</th>
    <td>Total Fees text</td>
  </tr>
  <tr>
    <th>Who May Avail</th>
    <td>Who May Avail text</td>
    <th>Period of Extension</th>
    <td>Period of Extension text</td>
  </tr>
</table>
<br>

<table>
  <tr>
    <th>Documentary Requirements</th>
    <th>Documentary Requirements text</th>
  </tr>
  <tr>
    <td>Where to Secure</td>
    <td>Where to Secure text</td>
  </tr>
</table>
<br>
<table>
  <tr>
    <th>Client Action</th>
    <th>Agency Action</th>
    <th>Fees to be Paid</th>
    <th>Processing Time</th>
    <th>Person in-Charge</th>
    <th>Contact Number</th>
  </tr>
  <tr>
    <td>Client Action text</td>
    <td>Agency Action text</td>
    <td>Fees to be Paid text</td>
    <td>Processing Time text</td>
    <td>Person in-Charge text</td>
    <td>Contact Number text</td>
  </tr>
</table>

</body>
</html>
