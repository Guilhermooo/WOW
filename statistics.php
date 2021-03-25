<!DOCTYPE html>
<?php session_start(); ?>
<html>

    <head>

        <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />

        <title>WoW Arena</title>
        <?php
        include ("bd.php");
        $bdd = getBD();
        ?>

     </head>

     <body>

         <?php
         $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
         $rep=$bdd->query($wins);
         $ligne = $rep ->fetch();
         echo $ligne['win']."V";

         $loses="select count(victory) as loses from import WHERE isRated=1 and victory=0 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
         $rep=$bdd->query($loses);
         $ligne = $rep ->fetch();
         echo $ligne['loses']."L";

         $winrate="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=6)*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
         $rep=$bdd->query($winrate);
         $ligne = $rep ->fetch();
         echo "WinRate : ".$ligne['winrate']."%";
         ?>

    </body>

</html>
