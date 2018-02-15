<!DOCTYPE html>
<html>
    <head>
        <title> </title>

    </head>

    <body>
        <div id = "main">
            <?php
                
                $player1 = array(
                    'name'=>'Daniel',
                    'imgURL' => './img/user_img/Daniel.jpg',
                    'hand' => array(),
                    'points' => 0
                    );
                $player2 = array(
                    'name'=>'Gilbert',
                    'imgURL' => './img/user_img/Gilbert.jpg',
                    'hand' => array(),
                    'points' => 0);
                $player3 = array(
                    'name'=>'Raymond',
                    'imgURL' => './img/user_img/raymond.png',
                    'hand' => array(),
                    'points' => 0);
                $player4 = array(
                    'name'=>'Brian',
                    'imgURL' => './img/user_img/Brian.png',
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
                
                function getImgURLForCardIndex($index){
                    //get num from 0 - 51
                    //return image url
                    
                    $suitIndex = floor($index / 13);
                    
                    echo "suitIndex: $suitIndex";
                }
                
                getImgURLForCardIndex(51);
            ?>
        </div>
        
    </body>
</html>