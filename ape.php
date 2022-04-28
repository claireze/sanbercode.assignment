<?php

require_once('oop.php');

class Ape extends Animal{
    public function yell(){
        echo "Auooo ";
    }
}
class Frog extends Animal{
    public function jump(){
        echo "Hop Hop";
    }
}

