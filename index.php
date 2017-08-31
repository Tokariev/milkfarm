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
        <img src="img/cow_2.png" width="100px">
        <div id="map"></div>        
        <script>
            initMap();
        </script>
        
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjFrxFE_ccEqewSj4On0mFm_XUMV_y3dU&callback=initMap">
        </script>
        <div class="farmer">
            Bauernhofs in der Nähe
        </div>
        <div class = "farmer">
            <?php
                
            include_once 'db.php';
   
                $sql = "SELECT * FROM farmer "
                     . "ORDER BY address "
                     . "LIMIT $limit";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " " . $row["address"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div id="add">
            <button type="button" onclick="window.location.href='add.php'" id="add_btn">Add Bauernhof</button>
        </div>
        
    </body> 
</html>
