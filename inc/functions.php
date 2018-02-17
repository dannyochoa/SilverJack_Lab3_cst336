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

    function play()
    {
        $cards = initArrayWithCards();
        printCards($cards);
    }
    
?>