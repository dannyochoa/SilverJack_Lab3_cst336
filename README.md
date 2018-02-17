# SilverJack_Lab3_cst336
silver jack name lab3, members Daniel, Gilbert, Raymond, Brian

Get Hand function:
1) Go user by user
2) Generate random cards until sum is equal to or greater than 42
3) Then show

//pseudocode
//create an arary of 52 cards
       //each card an associative array ==> suit, rank, imgURL, points
//shuffle array
//pop off one card at a time to generate the hand

function getImgURLForCardIndex($index){
    //get num from 0 - 51
    //return image url
    
    $suitIndex = floor($index / 13);
    
    echo "suitIndex: $suitIndex";
    switch($suitIndex){
        case 0:
            
    }
}

function generateDeck() {
    for($i = 0; $i < 51; $i++){
        $card = array(
            'imgURL' ==> ""
            );
    }
}
function getHand() {
    
}