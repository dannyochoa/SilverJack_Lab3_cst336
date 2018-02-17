<?php
    
    function initArrayWithCards()
    {
        $cards = array();
        
        for($i = 0; $i < 52; $i++)
        {
            $cardlocation = "";
            $suit = floor(($i)/13);
            switch($suit)
            {
                case 0:
                    $cardlocation = "./img/clubs/";
                    break;
                case 1:
                    $cardlocation = "./img/diamonds/";
                    break;
                case 2:
                    $cardlocation = "./img/hearts/";
                    break;
                case 3:
                    $cardlocation = "./img/spades/";
                    break;
            }
            $cardNumber = (($i+1)%13);
            if($cardNumber == 0)
            {
                $cardNumber = 13;
            }
            $cardlocation = $cardlocation . $cardNumber . ".png";
            array_push($cards, $cardlocation);
        }
        return $cards;
    }

    function printCards($cards)
    {
        foreach($cards as $c)
        {
            echo "<img src ='".$c."' /> <br/>" ;
        }
    }


    function printGameState($allPlayer)
    {
        foreach($allPlayer as $player)
        {
            echo "<img src ='".$player['imgURL']."' />" ;
            echo $player['name'] . "<br/>";
        }
    }
    function play()
    {
        
                        
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
        
                
        printGameState($allPlayer);
        $cards = initArrayWithCards();
        printCards($cards);
    }
    
?>