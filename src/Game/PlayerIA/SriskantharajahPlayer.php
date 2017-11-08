<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class SriskantharajahPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class SriskantharajahPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
       $all_true = true;
      $mychoice = parent::paperChoice(); 
       $moi = $this->result->getStatsFor($this->mySide);
       $enemy = $this->result->getStatsFor($this->opponentSide);
       $result = $this->result->getChoicesFor($this->opponentSide); 
       foreach ($result as $value){
            if ($value !== parent::scissorsChoice()) {
                $all_true = false;
            }
        }
       if ($moi['name'] == $enemy['name']) {
            return parent::rockChoice();            
        }        
       elseif ($this->result->getLastScoreFor($this->mySide) == 500) {
            return parent::scissorschoice(); }
       else return $mychoice;

        if ($enemy['name'] == 'Tahri') {
            return parent::paperChoice();
        } elseif ($enemy['name'] == 'Adda'){
          return parent::paperChoice();
 
       } 

elseif ($enemy['name'] == 'Laplaze') {
            return parent::scissorsChoice();


}

         



}
};
