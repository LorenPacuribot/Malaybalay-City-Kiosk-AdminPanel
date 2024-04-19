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

        table {
            border-collapse: collapse;
            width: 100%;
            table-layout: auto; /* Distribute table columns evenly */
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

        h2, h4 {
          font-family: Arial;
          text-align: center;
        }

         /* Resize the logo */
         .logo {
            width: 400px; /* Set the width of the logo */
            height: 90px; /* Maintain aspect ratio */
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
{{-- <img src="images/citylogo.png" alt="Logo" class="logo"> --}}

<h2>List of Offices</h2>

<table>
  <tr>
    <th>Office</th>
    <th>Address</th>
    <th>Contact information</th>
</tr>
<tr>
    <td>Office text </td>
    <td>Address text </td>
    <td>Contact information text</td>
  </tr>
</table>
</body>
</html>
