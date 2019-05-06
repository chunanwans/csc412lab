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
        </style>
        <title>Store Home</title>
        <link rel="stylesheet" type="text/css" href="store.css">
    </head>

    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <h1 class="centered-text sansSerif-text" id="id-name">Visitor Log</h1>
            
            <p></p>

            <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" name="txtName" placeholder="Name"/><br>
                <input type="submit" name="btnSendForm" value="Submit" />
            </form>
             
            <p></p>
             
            <?php
            if (isset($_POST["txtName"])) {
                echo "<h3>Hi " . $_POST["txtName"] . "!</h3>";
                echo "<h3>Welcome to our store!</h3>";
            }else{
                echo "<h3>Please Enter Your Name</h3>";
            }
            ?>
            </center>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>


