<!DOCTYPE html>
<?php session_start(); ?>
<html>

    <head>

        <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
        <script type="text/javascript"src="script.js"></script>

        <title>WoW Arena</title>
        <?php
        include ("bd.php");
        $bdd = getBD();
        ?>



    </head>

    <body>
        <?php




       echo "<img src='graphs/graphBar.php'/>";
       echo "</br>";
       echo "<img src='graphs/graphPie.php'/>";

        ?>


    </body>

</html>