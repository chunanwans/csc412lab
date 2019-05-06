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
            <h1 class="centered-text sansSerif-text" id="id-name">Newsletter Sign-up</h1>
            
            <p></p>

            <center>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" name="email" placeholder="Email"/><br>
                <input type="submit" />
                
                <p></p>

                <?php
                $qwl = mysqli_connect('localhost', 'csc412', 'csc412', 'csc412')
                        or die("<h3>ERROR: Failed to connect to database.</h3>");

                $sql = "CREATE TABLE IF NOT EXISTS qliu5_newsletter_emails"
                        . "(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                        . "email VARCHAR(30) NOT NULL);";

                mysqli_query($qwl, $sql)
                        or die("<h3>ERROR: Failed to create table.</h3>");

                if ($_POST) {

                    $email = $_POST["email"];

                    $sql = "INSERT INTO qliu5_newsletter_emails"
                            . "(email) VALUES (\"" . $email . "\");";

                    mysqli_query($qwl, $sql)
                            or die("<h3>ERRO: Unable to insert value.</h3>");

                    echo "<h3>You successfully signed up for our newsletter!</h3>";
                } else {
                    echo "<h3>Please enter your email</h3>";
                }

                echo "<h2>Current list of Emails</h2>";

                $data = mysqli_query($qwl, "SELECT * FROM qliu5_newsletter_emails;");
                while ($row = mysqli_fetch_array($data)) {
                    echo "<h4>" . $row['email'] . "</h4>";
                }
                mysql_close($qwl);
                ?>
                </form>
            </center>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>


