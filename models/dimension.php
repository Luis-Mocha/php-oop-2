<?php

trait Dimension {

    public $dimension;

    public function getDimensionText() {
        if ($this->dimension === 's') {
            return 'piccolo';
        } else if ($this->dimension === 'm') {
            return 'medio';
        } else {
            return 'grande';
        } 
    }

}

?>