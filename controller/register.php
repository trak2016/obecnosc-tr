<?php

session_start();
require_once ('../model/db.php');
if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['semester'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $semester = $_POST['semester'];
    $statement = $db->query('SELECT * FROM users WHERE name = "' . $login . '"');

    if (!$statement->rowCount()) {
        $statement = $db->prepare('INSERT INTO users(name, password, semester) VALUES (:login, :password, :semester)');
        $statement->bindParam(':login', $login);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':semester', $semester);
        $statement->execute();
        echo 'Pomyślnie zarejestrowano użytkownika.'
        . '<a href="../index.php">Powrót do strony głównej.</a>';
    } else {
        echo 'Podana nazwa użytkownika już istnieje. Wybierz inną nazwę.'
        . '<form id="logowanie" action="../controller/register.php" method="POST">
    <h1>Rejestracja:</h1>
    Login: <input type="text" name="login"><br>
    Hasło: <input type="password" name="password"><br>
    Semestr: <input type="number" name="semester"><br>
    <input type="submit" id="submit" value="Zaloguj"><br>
    </form>';
    }
} else {
    echo 'Tak nie próbuj. ;)';
}
