<!DOCTYPE html>
<?php session_start(); ?>
<html>

    <head>

        <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript"src="script.js"></script>

        <title>WoW Arena</title>

        <?php

            include ("bd.php");
            $bdd = getBD();

            function win($nbj){
                $bdd = getBD();
                $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and idUser=".$_SESSION['utilisateur'][1];
                $rep=$bdd->query($wins);
                $ligne = $rep ->fetch();
                return $ligne['win']." Win ";
            }
           
           function lose($nbj){
                $bdd = getBD();
                $loses="select count(victory) as loses from import WHERE isRated=1 and victory=0 and playersNumber=$nbj and idUser=".$_SESSION['utilisateur'][1];
                $rep=$bdd->query($loses);
                $ligne = $rep ->fetch();
                return $ligne['loses']." Lose ";
           }

           function winrate($nbj){
                $bdd = getBD();
                $winrate="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=6)*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and idUser=".$_SESSION['utilisateur'][1];
                $rep=$bdd->query($winrate);
                $ligne = $rep ->fetch();
                return "<p>WinRate : ".round($ligne['winrate'],2)."%</p>";
           }

            function winrS($spe,$nbj){
                $bdd = getBD();
                $sql2="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1].")*100 as winrS from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1];
                $rep2=$bdd->query($sql2);
                $ligne2 = $rep2 ->fetch();
                return $ligne2['winrS'];
            }

            function ws($spe,$nbj){
                $bdd = getBD();
                $wins="select count(victory) as win from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1];
                $rep3=$bdd->query($wins);
                $ligne3 = $rep3 ->fetch();
                return $ligne3['win'];
            }

            function ls($spe,$nbj){
                $bdd = getBD();
                $wins="select count(victory) as lose from import WHERE victory=0 and isRated=1 and playersNumber=$nbj and specialization=".$spe."and idUser=".$_SESSION['utilisateur'][1];
                $rep4=$bdd->query($wins);
                $ligne4 = $rep4 ->fetch();
                return $ligne4['lose'];
            }

            function imgs($spe){
                $img="";
                if ($spe=="Beast Mastery") {
                    $spe="BeatMastery";
                    $img="<img class='imgs'src='images/".$spe.".png'/>";
                }else{
                    $img="<img class='imgs'src='images/".$spe.".png'/>";
                }
                return $img;
            }

            function matchup($class,$spe,$nbj){
                $bdd = getBD();
                $idu=$_SESSION['utilisateur'][1];
                echo "<ul class='mu'>";
                for($i=0;$i<count($class);$i++){
                    $spe2=$class[$i];
                    $nbp="select count(victory) as nbg from import WHERE isRated=1 and playersNumber=$nbj and ennemyComp LIKE '%$spe2%'and idUser=$idu and specialization='$spe'";
                    $repx=$bdd->query($nbp);
                    $lignex = $repx ->fetch();
                    if($lignex['nbg']>10){ 
                        $c1="select count(victory)/(select count(victory) from import WHERE isRated=1 and playersNumber=$nbj and ennemyComp LIKE '%$spe2%'and idUser=$idu and specialization='$spe')*100 as winrate from import WHERE victory=1 and isRated=1 and playersNumber=$nbj and ennemyComp LIKE '%$spe2%' and idUser=$idu and specialization='$spe'";
                        $rep6=$bdd->query($c1);
                        $ligne6 = $rep6 ->fetch();
                        if($ligne6['winrate']<=50){
                            echo "<li class='limg img".$spe2."'>".imgs($spe2)."</li>";
                            echo "<li class='cont ".$spe2."'>".$spe2." : ".round($ligne6['winrate'],2)."%</li>";
                        }
                        
                    }
                    
                }
                echo "</ul>";
            }

        ?>

		<style type="text/css">

			#v2 { 
				display: None;
			}

			#v3 {
                display: None;
            }
            .cont{
                display : none;
            }
            .limg{
                display : inline-block;
                margin:5px;
            }
            .mu{
                list-style-type: none;
                padding-left: 0;
            }
            li{
                display: inline-block;
            }

            .imgs~.imgs{
                margin-top: 60px;
            }
            

		</style>

    </head>

    <body>
		
		<div id="header">
			<a href="index.php"><img id="logo" src=images/logoW.png alt="WoW Arena"></a>
			<h1 class="title">WoW Arena</h1>
		</div>
		
		<div id="global">
		
        <button id="monBouton1" onclick=v2()>2v2</button>
        <button id="monBouton2" onclick=v3()>3v3</button>
		
		
        <?php

        $class=array("Frost-DeathKnight","Unholy","Havoc","Feral","Balance","BeatMastery","Survival","Marksmanship","Fire-Mage","Arcane","frost-Mage","Windwalker","Retribution","Shadow","Assassination","Subtlety","Elemental","Enhancement","Affliction","Destruction","Demonology","Arms");

        echo "<div id='v3'><h2>3v3</h2>";
        $nbj=6;
        echo "<div><p>".win($nbj).lose($nbj)."</p>";
        echo winrate($nbj)."</div>";

        echo "<h3>Specialization</h3>";
        $spe="select DISTINCT specialization from import where idUser=".$_SESSION['utilisateur'][1]." and isRated=1 and playersNumber=6";
        $rep = $bdd->query($spe);
        while ($ligne = $rep ->fetch()) {
            $spe="'".$ligne['specialization']."'";
            $spe2=$ligne['specialization'];
            $nbj=6;
            echo imgs($spe2)."<div class='spe'><p>".ws($spe,$nbj)." Win / ".ls($spe,$nbj)." Lose</p>"."<p>Winrate: ".round(winrS($spe,$nbj),2)."% </p>";
            echo "<h3>Toughest Matchups</h3>";
            echo matchup($class,$spe2,$nbj)."</div>";
        }$rep ->closeCursor();
        echo"</div>";

        echo "<div id='v2'><h2>2v2</h2>";
        $nbj=4;
        echo "<div><p>".win($nbj).lose($nbj)."</p>";
        echo winrate($nbj)."</div>";

        echo "<h3>Specialization</h3>";
        $spe="select DISTINCT specialization from import where idUser=".$_SESSION['utilisateur'][1]." and isRated=1 and playersNumber=4";
        $rep = $bdd->query($spe);
        while ($ligne = $rep ->fetch()) {
            $spe="'".$ligne['specialization']."'";
            $spe2=$ligne['specialization'];
            $nbj=4;
            echo imgs($spe2)."<div class='spe'><p>".ws($spe,$nbj)." Win / ".ls($spe,$nbj)." Lose</p>"."<p>Winrate: ".round(winrS($spe,$nbj),2)."% </p>";
            echo"<h3>Toughest Matchups</h3>";
            echo matchup($class,$spe2,$nbj)."</div>";
        }$rep ->closeCursor();
        echo"</div>";



        //echo "<img src='graphs/graphBar.php'/>";
        //echo "<img src='graphs/graphPie.php'/>";
        //echo "<img src='graphs/graphMMR.php'/>";
        ?>
		
        <p> <a href="delete.php"> <input type="button" value="Reset"> </a> </p>

		
		</div>
    </body>

</html>