<?php
    include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>SilverJack</h1>
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