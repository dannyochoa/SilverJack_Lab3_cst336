<?php
include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>

    
    <body>
        <div id = "main">
            <?php
                play();
            ?>
        </div>
    </body>
    <footer>
        <div id="playButton">
                <form>
                    <input type = "submit" value = "Play Again!"/>
                </form>
        </div>
    </footer>

</html>