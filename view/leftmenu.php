<?php
                if (isset($_SESSION['login'])) {
                    echo "Witaj, jesteś zalogowany jako: " . $_SESSION['login'] . ' <br><input type="button" value="Wyloguj" id="logout" onclick=location.href="/listaobecnosci-GIT/controller/logout.php">';
                    if ($_SESSION['student'] == 0) {
                        echo '<br>Wybierz przedmiot:<br>';
                        $stmt = $db->query('SELECT count(id) FROM classes WHERE subject = 1');
                        $ilosc = $stmt->execute();
                        foreach ($stmt as $ile){
                        $il = $ile[0];
                        }
                        
                        $stmt2 = $db->query('SELECT * FROM subject');
                        foreach ($stmt2 as $zajecia) {
                            echo '<a data-toggle="tooltip" title="Ilość zajęć dla tego przedmiotu: '.$il.'" class="podpowiedz" href="/listaobecnosci-GIT/view/zajecia.php?id=' . $zajecia['id'] . '">' . $zajecia['name'] . '</a><br>';
                            //echo '<a data-toggle="tooltip" title="Ilość zajęć dla tego przedmiotu: '.$il.'" href="#" onclick=showTresc('.$zajecia['id'].');>' . $zajecia['name'] . '</a> ';
                        }
                    }
                } else {
                    echo 'Nie jesteś zalogowany. <form id="logowanie" action="/listaobecnosci-GIT/controller/login.php" method="POST">
            <h1>Logowanie:</h1>
            Login: <input type="text" name="login"><br>
            Hasło: <input type="password" name="password"><br>
            <input type="submit" id="submit" value="Zaloguj"><br>
        </form>
        Nie masz jeszcze konta? <a href= "/listaobecnosci-GIT/view/rejestracja.php">Zarejestruj się.</a>';
                }
                ?>

