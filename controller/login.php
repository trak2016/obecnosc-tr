<?php

session_start();
require_once ('../model/db.php');
if (isset($_POST['login']) && isset($_POST['password'])) {
    $statement = $db->query('select * from users where name="' . $_POST['login'] . '" and password="'.$_POST['password'].'"');
    if ($statement->rowCount()) {
        foreach ($statement as $user) {
            $_SESSION['login'] = $user['name'];
            $_SESSION['student'] = $user['student'];
            echo "Witaj, jesteś zalogowany jako: " . $_SESSION['login'];
            header('Location: ../index.php');
        }
    } else {
        echo "Błędy login lub hasło!";
        echo '<form id="logowanie" action="../controller/login.php" method="POST">
            <h1>Logowanie:</h1>
            Login: <input type="text" name="login"><br>
            Hasło: <input type="password" name="password"><br>
            <input type="submit" id="submit" value="Zaloguj"><br>
            
        </form>
        Nie masz jeszcze konta? <a href= "../view/rejestracja.php">Zarejestruj się.</a>';
    }
} else {
    echo "Nie dziala";
}