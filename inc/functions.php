<?php
    
    function initArrayWithDeck()
    {
        $cards = array(
            'points'=> 0,
            'card' =>'');
        
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
            echo $i;
            echo $cardlocation. "</br>";
            
            $cards[$i]['card'] = $cardlocation;
            if($cardNumber >= 10)
                $cards[$i]['points'] = 10;
            else
                $cards[$i]['points'] = $cardNumber;
        }
        return $cards;
    }

    function printCards($cards)
    {
        $i = 0;
        for($i = 0; $i < 52; $i++)
        {
            echo "<img src ='". $cards[$i]['card']."' /> <br/>" ;
        }
    }


    function printGameState($allPlayer)
    {
        foreach($allPlayer as $player)
        {
           // echo "<img src ='".$player['imgURL']."' />" ;
            echo $player['name'] . "<br/>";
            foreach($player['hand'] as $card)
            {
                echo "<img src ='". $card ."' />" ;
            }
            echo $player['points'] . "</br>";
        }
    }
    
    function getHand($cards)
    {
        $ans = array(
            'playerHand' => array(),
            'playerPoints' => 0,
            'restOfcards' => array()
            );
        for($i =0; $i < 5; $i++)
        {
            $temp = array_pop($cards);
            if($temp == null)
                echo "nullll";
            echo "</br>";
            array_push($ans['playerHand'] ,$temp['card']);
            $ans['playerPoints'] =  $ans['playerPoints'] + $temp['points'];
           // array_push($ans['playerHand'] ,$temp['card']);
           // $ans['points'] = $ans['points'] + $temp['points'];
        }
        $ans['restOfcards'] = $cards;
        return $ans;
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
        $cards = initArrayWithDeck();
        echo count($cards);
        printCards($cards);

    //     for($i = 0; $i < 4; $i++)
    //     {
    //         $temp = getHand($cards);
    //         $cards = $temp['restOfcards'];
    //         $allPlayer[$i]['hand'] = $temp['playerHand'];
    //         $allPlayer[$i]['points'] = $temp['playerPoints'];
    //     }
                
    //   printGameState($allPlayer);
    }
    
?>