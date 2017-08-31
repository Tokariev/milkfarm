<html>
    <head>
        <title>moo!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/script.js"></script>
        <!--#include virtual="file.php" -->
    </head>
    <body>
        <form method="post" action="add.php">
            Vorname: <input type="text" name="name"><br>
            Lastname: <input type="text" name="surname"><br>
            Adress: <input type="text" name="address"><br>
            Produkt: <input type="text" name="product"><br>
            <input type="submit" name="btn_save" value="Speichern">
        </form> 
        
        <?php
        $servername = "localhost";
                $username = "user";
                $password = "123";
                $dbname = "farm_db";
                $limit = 5; 
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    mysqli_close($conn);
                }
        
        if(isset($_POST['btn_save']))
            {
            $name = strip_tags(trim($_POST['name']));
            $surname = strip_tags(trim($_POST['surname']));
            $address = strip_tags(trim($_POST['address']));
            $product = strip_tags(trim($_POST['product']));
        
            mysqli_query($conn, "INSERT INTO farmer(name, surname, address, product)"
                        . "VALUES ('$name', '$surname', '$address', '$product')" );  
            
            echo 'Erfolg!'; 
            }
               
        ?>
        
    </body> 
</html>
<?php

