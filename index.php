<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'model/db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['login'])) {
                echo "Witaj, jesteś zalogowany jako: " . $_SESSION['login']. ' <input type="button" value="Wyloguj" id="logout" onclick=location.href="controller/logout.php">';
                if($_SESSION['student']==0){
                    echo '<br>Wybierz przedmiot:<br>';
                    $stmt = $db->query('SELECT * FROM subject');
                    foreach ($stmt as $zajecia)
                    {
                    echo '<a href="view/zajecia.php?id='.$zajecia['id'].'">'.$zajecia['name'].'</a><br>';
                    }
                }
        }
        else
        {
            echo 'Nie jesteś zalogowany. <form id="logowanie" action="controller/login.php" method="POST">
            <h1>Logowanie:</h1>
            Login: <input type="text" name="login"><br>
            Hasło: <input type="password" name="password"><br>
            <input type="submit" id="submit" value="Zaloguj"><br>
        </form>
        Nie masz jeszcze konta? <a href= "view/rejestracja.php">Zarejestruj się.</a>';
        }
        ?>
    </body>
</html>
