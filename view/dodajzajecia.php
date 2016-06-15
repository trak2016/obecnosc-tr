<?php
session_start();
require_once '../bootstrap.php';
require_once '../model/db.php';
?>
<div class="container-fluid">
<div class="col-sm-2">
    <?php
    require_once '../view/leftmenu.php';
    ?>
</div>
    <div class="col-sm-10">
<form id="dodajzajecia" action="../controller/addclasses.php" method="POST">
    <h1>Dodawanie nowych zajęć:</h1>
    Nazwa zajęć: <br><input type="text" name="name" title="Uzupełnij nazwę zajęć." required><br>
    Data: <br><input type="date" name="date" title="Uzupełnij datę." required><br>
    Semestr: <br><input type="number" name="semester" title="Uzupełnij numer semestru." required><br>
    <input type="hidden" name="subject" value="<?php echo $_GET['id']; ?>">
    <input type="submit" id="submit" value="Dodaj zajęcia"><br>

</form>
    </div>
    
</div>