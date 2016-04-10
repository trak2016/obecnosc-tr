<?php
session_start();
?>
<form id="logowanie" action="../controller/register.php" method="POST">
    <h1>Rejestracja:</h1>
    Login: <input type="text" name="login" title="Uzupełnij nazwę użytkownika." required><br>
    Hasło: <input type="password" name="password" title="Uzupełnij hasło." required><br>
    Semestr: <input type="number" name="semester" title="Uzupełnij numer semestru." required><br>
    <input type="submit" id="submit" value="Zaloguj"><br>

</form>

