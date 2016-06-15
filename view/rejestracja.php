<?php
session_start();
require_once '../bootstrap.php';
?>
<div class="container-fluid" style="text-align: center;">
    <div class="col-sm-12">
        <form id="logowanie" action="../controller/register.php" method="POST">
            <h1>Rejestracja:</h1>
            Login: <br><input type="text" name="login" title="Uzupełnij nazwę użytkownika." required><br>
            Hasło: <br><input type="password" name="password" title="Uzupełnij hasło." required><br>
            Semestr: <br><input type="number" name="semester" title="Uzupełnij numer semestru." required><br>
            <input type="submit" id="submit" value="Zaloguj"><br>

        </form>
    </div></div>

