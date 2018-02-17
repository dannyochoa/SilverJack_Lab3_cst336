<?php
include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/styles.css");
        </style>
    </head>

    
    <body>
        <div id = "main">
            <?php
                play();
            ?>
            <form>
                <input type = "submit" value = "Play Again!"/>
            </form>
        </div>
        
    </body>

</html>