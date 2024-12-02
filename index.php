<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="PumpkinSpiceNyan.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP</title>
</head>
<body>
    <?php 
        include ("header.php");
        $test = "h1";
        echo '<' . $test . '>Exo PHP</' . $test .'>' ;  
    ?>
    <?php include ("footer.php") ?>
<!-- 
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 -->
<br><br><br><br>
<h2>EXERCICE</h2>
<h3>EXERCICE 1</h3>
                                                        <!-- EXERCICE 1 -->
 <?php
    for ($i = 0; $i <= 25; $i++){
        echo $i . " ";
    }
 ?>
<br><br><br>
<h3>EXERCICE 2</h3>
                                                        <!-- EXERCICE 2 -->
<?php 
    $exb = 25;
    while ( $exb > 0 ) {
        echo $exb . " ";
        $exb--;
    };
?>
<br><br><br>
<h3>EXERCICE 3</h3>
                                                        <!-- EXERCICE 3 -->
<?php 
    for ($x = 0; $x <= 25; $x++){
        for ($y = 1; $y <= $x; $y++) {
            echo $y . " ";
        };
        echo "<br>";
    };
?>

<br><br><br>
<h3>EXERCICE 4</h3>
                                                        <!-- EXERCICE 4 -->
 <?php 
    $c = 0;
    for ($w = $c+1; $w <= 30; $w++){
        
       $c = $c+$w;
    };
    echo $c;
?>
<br><br><br>
<h3>EXERCICE 5</h3>
                                                        <!-- EXERCICE 5 -->
    <?php 
        
        
        function EstPair ($even) {
            if ($even % 2 == 0){
                return true ;
            } else {
                return false;
            };
        };
        $var = rand(0,100);
        if (EstPair($var) == 1) {
            echo "Le nombre " . $var . " est pair.";
        } else {
            echo "Le nombre " . $var . " n'est pas pair.";
        };
    
        
    ?>        
<br><br><br>
<h3>EXERCICE 6</h3>
                                                        <!-- EXERCICE 6 -->
    <?php 
        for ($pair = 1; $pair <= 20; $pair++){
           if (EstPair($pair) == 1) {
            echo $pair . " ";
           };
        };
    ?>                
<br><br><br>
<h3>EXERCICE 7</h3>
                                                        <!-- EXERCICE 7 -->
    <?php 
        function pythagore ($coteac, $coteab) {
            $cotebc = $coteab * $coteab + $coteac * $coteac;
            $cotebc = sqrt ($cotebc);
            $cotebc = round($cotebc);
            return $cotebc;
        }
        $cote1 = rand(1, 100);
        $cote2 = rand(1, 100);
        echo "Dans un triangle rectangle dont l'angle droit est CÂB. <br>";
        echo "AB fait " . $cote1 . " cm! <br>";
        echo "AC fait " . $cote2 . " cm! <br>";
        echo "BC fait donc environs " . pythagore($cote1, $cote2) . " cm! <br>";
    ?>
<br><br><br>
<h3>EXERCICE 8</h3>
                                                        <!-- EXERCICE 8 -->
    <?php 
        $heure = rand(0, 23);
        if ($heure <= 6) {
            echo "Il est " . $heure . " heures, c'est la nuit.";
        } else if ($heure <= 12) {
            echo "Il est " . $heure . " heures, c'est le matin.";
        } else if ($heure <= 18) {
            echo "Il est " . $heure . " heures, c'est l'après-midi.";
        } else {
            echo "Il est " . $heure . " heures, c'est le soir.";
        }
    ?>
<br><br><br>
<h3>EXERCICE 9</h3>
                                                        <!-- EXERCICE 9 -->
    <?php 
        $pair = rand(0,100);
        echo EstPair($pair) ? "Le nombre " . $pair . " est pair." : "Le nombre " . $pair . " n'est pas pair.";
    ?>      
<br><br><br>
<h3>EXERCICE 10</h3>
                                                        <!-- EXERCICE 10 -->
    <?php 
        $foo = "foo";
        $bar = "bar";
        for ($fb = 1; $fb <= 100; $fb++) {
            if ($fb % 15 == 0) {
                echo $foo . $bar;
            } else if ($fb % 3 == 0) {
                echo $foo;
            } else if ($fb % 5 == 0) {
                echo $bar;
            } else {
                echo $fb;
            }
            echo " ";
        }
    ?>
<br><br><br>
<h3>EXERCICE 11</h3>
                                                        <!-- EXERCICE 11 -->
    <?php 
        $identitePersonne = [
            'nom'       => 'Croft',
            'prenom'    => 'Lara',
            'metier'    => 'Archéologue'
        ];
        echo "<h1> C'est un plaisir de vous voir " . $identitePersonne['prenom'] ." " . $identitePersonne['nom'] . " ! (" . $identitePersonne['metier'] . ")</h1>";
    ?>     
<br><br><br>
<h3>EXERCICE 12</h3>
                                                        <!-- EXERCICE 12 -->
        <?php 
            $fighter = ['Zelda','Samus','Bowser','Peach','Lucina'];
            for ($fi = 0; $fi < count($fighter); $fi++) {
                if (strlen($fighter[$fi]) >= 6) {
                    echo $fighter[$fi] . " ";
                }
            }
        ?>
<br><br><br>
<h3>EXERCICE 13</h3>
                                                        <!-- EXERCICE 13 -->
        <?php 
            $v1 = rand(0, 100);
            $v2 = rand(0, 100);
            $v3 = rand(0, 100);
            $v4 = rand(0, 100);
            $v5 = rand(0, 100);
            $v6 = rand(0, 100);
            $v7 = rand(0, 100);
            $v8 = rand(0, 100);
            $v9 = rand(0, 100);
            $v10 = rand(0, 100);
            $ppvaleur = [$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10];
            echo "La liste des valeurs : " . $v1 . " " . $v2 . " " . $v3 . " " . $v4 . " " . $v5 . " " . $v6 . " " . $v7 . " " . $v8 . " " . $v9 . " " . $v10 . ".<br>";
            echo "La plus petite valeur est " . min($ppvaleur) . ".";
        

        ?>
<br><br><br>
<h3>EXERCICE 14</h3>
                                                        <!-- EXERCICE 14 -->
        <?php 
            sort($ppvaleur);
            foreach ($ppvaleur as $value) {
                echo $value . " ";
            }
        ?>
<br><br><br>
<h3>EXERCICE 15</h3>
                                                        <!-- EXERCICE 15 -->
        <?php 

            echo "<table>";
            for ($x = 1; $x <= 9; $x++){
                echo "<tr>";
                for ($y = 1; $y <= 9; $y++){
                    echo "<td><p>" . $y*$x . "</p></td>";
                }
                echo "</tr>";
            };
            echo "</table>";
        ?>
</body>
</html>