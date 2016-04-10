<?php

session_start();
require_once ('../model/db.php');
if (isset($_GET['id'])) {
    $idzajec = $_GET['id'];
    if ($_SESSION['student'] == 0) {
        echo '<input type="button" value="Dodaj zajęcia" onclick=location.href="../view/dodajzajecia.php?id='.$idzajec.'"><br>';
        
        $stmt = $db->query('SELECT * FROM classes WHERE subject = ' . $idzajec);
        foreach ($stmt as $class) {
            echo $class['name'] . ' - ' . $class['date'].'<br>';
        }
    } else {
        echo 'Jestes studentem/TODO';
    }
} else {
    echo 'Gdzieś popełniłeś błąd. ;)';
}

