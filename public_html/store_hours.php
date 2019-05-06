<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                background-color: #000000;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: center;
            }
        </style>
        <title>Hello, world!</title>
        <link rel="stylesheet" type="text/css" href="store.css">
        <title></title>

    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <h1 class="centered-text sansSerif-text" id="title-button">Store Hours</h1>
            <h2 class="centered-text" id="title2">Weekends and Holidays Included</h2>
            <img id="moveit" class="open-sign-image2" src="images/open_sign.jpg" alt="open sign">
            <p></p>
            <button onclick="toggle()">Alter title</button>
            <button id="title2-button">Alter Second Title</button>
            <button id="move-button">Move Image</button>
            <p></p>

            <table style="width:100%" class="white-text">
                <tr>
                    <th>Working Days</th>
                    <th>Working Hours</th>
                </tr>
                <tr>
                    <td>Monday - Friday</td>
                    <td>5:00PM - 9:00PM</td>
                </tr>
                <tr>
                    <td>Saturday - Sunday</td>
                    <td>5:00PM - 11:00PM</td>
                </tr>
            </table>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script src="scripts/test.js"></script>
        <script src="scripts/jquery_test"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
