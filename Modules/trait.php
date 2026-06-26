<?php

trait Rating {

protected int $vote;

public function getRating($vote){

    if($vote>=1 && $vote<=10){
        return "$this->vote";
    }
}

}