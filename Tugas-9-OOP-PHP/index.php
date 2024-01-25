<?php
    require_once("animal.php");
    require_once("frog.php");
    require_once("ape.php");

        $sheep = new Animal("shaun");

        echo "Name: " .$sheep->name. "<br>"; // "shaun"
        echo "Legs: " .$sheep->legs . "<br>"; // 4
        echo "Cold blooded: " .$sheep->cold_blooded ."<br> <br>"; // "no"

        $kodok = new Frog("buduk");
        echo "Name: " .$kodok->name. "<br>"; // "shaun"
        echo "Legs: " .$kodok->legs . "<br>"; // 4
        echo "Cold blooded: " .$kodok->cold_blooded ."<br>"; // "no"
        echo $kodok->jump(). "<br> <br>"; // "hop hop"

        $sungokong = new ape("kera sakti");
        echo "Name: " .$sungokong->name. "<br>"; // "shaun"
        echo "Legs: " .$sungokong->legssungokong . "<br>"; // 2
        echo "Cold blooded: " .$sungokong->cold_blooded ."<br>"; // "no"
        echo $sungokong->yell();// "Auooo"
?>
