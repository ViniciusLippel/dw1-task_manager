<?php
    include_once "project.class.php";
    include_once "freedom_level.class.php";
    include_once "function.class.php";
    include_once "login.class.php";
    include_once "observer.class.php";
    include_once "participant.class.php";
    include_once "planning_board.class.php";
    include_once "stage.class.php";
    include_once "task.class.php";
    include_once "user_function.class.php";
    include_once "user.class.php";

    $project = new Project(2, "Test Project", "Just a test");
    var_dump($project);

    echo "<br><br>";

    $freedom_level = new freedom_level(4, "Teste", FALSE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, TRUE, FALSE, FALSE);
    var_dump($freedom_level);

    echo "<br><br>";

    $function_ = new function_(15, "Gestor", "Gere os projetos", 2);
    var_dump($function_);

    echo "<br><br>";

    $login = new login(5, "123456");
    var_dump($login);

    echo "<br><br>";

    $observer = new observer(5, 45);
    var_dump($observer);

    echo "<br><br>";

    $participant = new participant(7, 47);
    var_dump($participant);

    echo "<br><br>";

    $planning_board = new planning_board(2, 3, "Test Planning", "Just a test");
    var_dump($planning_board);

    echo "<br><br>";

    $planning_board = new stage(5, 4, "Stage", "Just a test");
    var_dump($planning_board);

    echo "<br><br>";

    $task = new task(2, 3, "Teste", "teste", "2022-01-01", "2022-01-02", "00:00:00", 2, 3);
    var_dump($task);

    echo "<br><br>";

    $user_function = new user_function(2, 3, 4);
    var_dump($user_function);

    echo "<br><br>";

    $user = new user(2, "Nome", "nome@email.com", "2000-01-01", TRUE);
    var_dump($user);
?>