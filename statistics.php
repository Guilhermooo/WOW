<!DOCTYPE html>
<?php session_start(); ?>
<html>

    <head>

        <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />

        <title>WoW Arena</title>
        <?php
        include ("bd.php");
        $bdd = getBD();
        function winrS($spe){
            $winrspe="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=6)*100 as winr from import WHERE victory=1 and isRated=1 and playersNumber=6 and specialization=".$spe;
            $rep2=$bdd->query($winrspe);
            $ligne2 = $rep2 ->fetch();
            echo $ligne2['winr'];
        }
        

        ?>

    </head>

    <body>
        <?php
        echo "<h2>3v3 :</h2>";

        $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($wins);
        $ligne = $rep ->fetch();
        echo $ligne['win']." Win ";

        $loses="select count(victory) as loses from import WHERE isRated=1 and victory=0 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($loses);
        $ligne = $rep ->fetch();
        echo $ligne['loses']." Lose </br>";

        $winrate="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=6)*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($winrate);
        $ligne = $rep ->fetch();
        echo "WinRate : ".$ligne['winrate']."%</br>";

        echo "<h3>WinRate per specialization : </h3>";
        $spe="select DISTINCT specialization from import where idUser=".$_SESSION['utilisateur'][1]." and isRated=1 and playersNumber=6";
        $nbspe="select count(DISTINCT specialization) from import where idUser=7 and isRated=1 and playersNumber=6";
        $rep = $bdd->query($spe);
        while ($ligne = $rep ->fetch()) {
            $spe=$ligne['specialization'];
            echo "Winrate ".$spe." :"."% ";
        }$rep ->closeCursor();
        
        ?>

    </body>

</html>
