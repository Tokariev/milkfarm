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
                ?>

