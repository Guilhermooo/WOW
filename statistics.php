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
        function winrS($spe,$nbj){
            $bdd = getBD();
            $sql2="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1].")*100 as winrS from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1];
            $rep2=$bdd->query($sql2);
            $ligne2 = $rep2 ->fetch();
            return $ligne2['winrS'];
        }

        ?>

        <style type="text/css">
        div{
            display: none;
        }    

        </style>

    </head>

    <body>

        <button id="monBouton1" onclick=v2()>2v2</button>
        <button id="monBouton2" onclick=v3()>3v3</button>

        <?php
        echo "<div id='v3'><h2>3v3 :</h2>";

        $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($wins);
        $ligne = $rep ->fetch();
        echo "<p>".$ligne['win']." Win ";

        $loses="select count(victory) as loses from import WHERE isRated=1 and victory=0 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($loses);
        $ligne = $rep ->fetch();
        echo $ligne['loses']." Lose </br></p>";

        $winrate="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=6)*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=6 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($winrate);
        $ligne = $rep ->fetch();
        echo "<p>WinRate : ".$ligne['winrate']."%</br></p>";

        echo "<h3>WinRate per specialization : </h3>";
        $spe="select DISTINCT specialization from import where idUser=".$_SESSION['utilisateur'][1]." and isRated=1 and playersNumber=6";
        $nbspe="select count(DISTINCT specialization) from import where idUser=7 and isRated=1 and playersNumber=6";
        $rep = $bdd->query($spe);
        while ($ligne = $rep ->fetch()) {
            $spe="'".$ligne['specialization']."'";
            $spe2=$ligne['specialization'];
            $nbj=6;
            echo "<p>Winrate ".$spe2." :".winrS($spe,$nbj)."% </p>";
        }$rep ->closeCursor();
        echo"</div>";

        echo "<div id='v2'><h2>2v2 :</h2>";

        $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=4 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($wins);
        $ligne = $rep ->fetch();
        echo "<p>".$ligne['win']." Win ";

        $loses="select count(victory) as loses from import WHERE isRated=1 and victory=0 and playersNumber=4 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($loses);
        $ligne = $rep ->fetch();
        echo $ligne['loses']." Lose </br></p>";

        $winrate="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=4)*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=4 and idUser=".$_SESSION['utilisateur'][1];
        $rep=$bdd->query($winrate);
        $ligne = $rep ->fetch();
        echo "<p>WinRate : ".$ligne['winrate']."%</br></p>";

        echo "<h3>WinRate per specialization : </h3>";
        $spe="select DISTINCT specialization from import where idUser=".$_SESSION['utilisateur'][1]." and isRated=1 and playersNumber=4";
        $nbspe="select count(DISTINCT specialization) from import where idUser=7 and isRated=1 and playersNumber=4";
        $rep = $bdd->query($spe);
        while ($ligne = $rep ->fetch()) {
            $spe="'".$ligne['specialization']."'";
            $spe2=$ligne['specialization'];
            $nbj=4;
            echo "<p>Winrate ".$spe2." :".winrS($spe,$nbj)."% </p>";
        }$rep ->closeCursor();
        echo"</div>";
        ?>

        <a href="delete.php"> <input type="button" value="Reset"> </a>


    </body>

</html>