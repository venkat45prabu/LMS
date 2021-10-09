<?php
    include("conn.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div>
          
        <?php
        $fetchVideos = mysqli_query($conn, "SELECT * FROM videos WHERE id='5' ");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            
            echo "<div >";
            echo "<video src='".$location."' controls width='320px' height='200px' >";
            echo "</div>";
        }
        ?>
          
        </div>

    </body>
</html>
