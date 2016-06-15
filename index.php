<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'model/db.php';
require_once 'bootstrap.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista obecności</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script type="text/javascript" language="javascript" src="skrypty.js"></script>
        <script type="text/javascript">
            function showTip() {
                var link = document.getElementById('dymek');
                link.style.display = "block";
                
            }
            function hideTip() {
                var link = document.getElementById('dymek');
                link.style.display = "none";
                
            }

          
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-sm-2">

                <?php
                require_once 'view/leftmenu.php';
                ?>
            </div><div class="col-sm-10" id="content">
                <a id="Tip1" onmouseover="showTip()" onmouseout="hideTip()" href="#">Dawaj chmurke!</a>
                <div id="dymek" style="position: absolute; top: 50px; left: 5%; display: none">Tekst</div>
            </div>
        </div>
    </body>
</html>
