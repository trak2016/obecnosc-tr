<?php
session_start();
require_once ('../model/db.php');
if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['semester'])) {
    $nazwa=$_POST['name'];
    $data=$_POST['date'];
    $semestr=$_POST['semester'];
    $zajecia=$_POST['subject'];
    
    $stmt = $db->prepare('INSERT INTO classes (subject, name, semester, date) VALUES (:subject, :name, :semester, :date)');
    $stmt->bindParam(':subject', $zajecia);
    $stmt->bindParam(':name', $nazwa);
    $stmt->bindParam(':semester', $semestr);
    $stmt->bindParam(':date', $data);
    $stmt->execute();
    echo 'Pomyślnie dodano nowe zajęcia.';
    header('Location: ../view/zajecia.php?id=1');
}

