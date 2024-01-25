<?php 
    require_once("animal.php");
    class Frog extends Animal {
        public $jump = "Hop Hop";

        public function jump(){
            return "Jump: Hop Hop";
        }
    }
?>