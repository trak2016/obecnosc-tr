<?php
session_start();
require_once ('../model/db.php');
require_once '../bootstrap.php';
?>
<div class="container-fluid">
    <div class="col-sm-2">
        <?php
        require_once '../view/leftmenu.php';
        ?>
    </div>
    <div class="col-sm-10">
    <?php
    if (isset($_GET['id'])) {
        $idzajec = $_GET['id'];
        if ($_SESSION['student'] == 0) {
            echo '<input type="button" value="Dodaj zajęcia" onclick=location.href="../view/dodajzajecia.php?id=' . $idzajec . '"><br>';
            echo '<table>';
            $stmt = $db->query('SELECT * FROM classes WHERE subject = ' . $idzajec);
            foreach ($stmt as $class) {
                echo '<tr><td>' . $class['name'] . '</td><td>' . ' - ' . $class['date'] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo 'Jestes studentem/TODO';
        }
    } else {
        echo 'Gdzieś popełniłeś błąd. ;)';
    }
    ?>
    </div>
</div>