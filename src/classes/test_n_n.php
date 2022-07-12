<?php

    include_once "user_function.class.php";
    include_once "participant.class.php";
    include_once "observer.class.php";

    $observer = new Observer(1, 2);
    var_dump($observer);

    echo "<br><br>";

    $participant = new Participant(3, 2);
    var_dump($participant);

    echo "<br><br>";

    $user_function = new User_function(2, 3, 1);
    var_dump($user_function);

?>