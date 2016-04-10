<?php
session_start();
?>
<form id="dodajzajecia" action="../controller/addclasses.php" method="POST">
    <h1>Dodawanie nowych zajęć:</h1>
    Nazwa zajęć: <input type="text" name="name" title="Uzupełnij nazwę zajęć." required><br>
    Data: <input type="date" name="date" title="Uzupełnij datę." required><br>
    Semestr: <input type="number" name="semester" title="Uzupełnij numer semestru." required><br>
    <input type="hidden" name="subject" value="<?php echo $_GET['id']; ?>">
    <input type="submit" id="submit" value="Dodaj zajęcia"><br>

</form>