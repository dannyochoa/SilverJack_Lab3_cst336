<!DOCTYPE html>
<html>
    <head>
        <title> </title>

    </head>

    <body>
        <div id = "main">
            <?php
                
                $player1 = array(
                    'name'=>'Dan',
                    'imgURL' => './img/user_img/Daniel.jpg',
                    'hand' => array(),
                    'points' => 0
                    );
                $player2 = array(
                    'name'=>'jay',
                    'imgURL' => './img/user_img/Daniel.jpg',
                    'hand' => array(),
                    'points' => 0);
                $player3 = array(
                    'name'=>'sam',
                    'imgURL' => './img/user_img/Daniel.jpg',
                    'hand' => array(),
                    'points' => 0);
                $player4 = array(
                    'name'=>'ray',
                    'imgURL' => './img/user_img/Daniel.jpg',
                    'hand' => array(),
                    'points' => 0
                    );
                
                $allPlayer = array($player1, $player2, $player3, $player4);
                
                
                function printGameState($allPlayer)
                {
                    foreach($allPlayer as $player)
                    {
                        echo "<img src ='".$player['imgURL']."' />" ;
                        echo $player['name'] . "<br/>";
                    }
                }
                printGameState($allPlayer);
            ?>
        </div>
        
    </body>
</html>