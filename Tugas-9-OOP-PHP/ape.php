<?php 
    require_once("animal.php");
    class ape extends Animal {
        public $yell = "Auooo";

        public function yell(){
            return "Yell: Auooo";
        }
    }
?>