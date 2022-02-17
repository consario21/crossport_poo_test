<?php
    require_once("Chien.php");
    $chien1 = new Chien("Pam",15,"Yorkshire");
    $chien2 = new Chien("Mina",5,"Yorkshire");
    $chien3 = new Chien("Hok",12,"Jack Russell");

    $chien1->display_dog_info();
    $chien2->display_dog_info();
    $chien3->display_dog_info();