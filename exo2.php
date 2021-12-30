<html>
<?php
//  $prix_ht = 50;
//  $tva = 20;
//  $prix_ttc = $prix_ht + $prix_ht * ($tva/100);
//  echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
// $budget = 1500.002;
// $prix = 1800.004;
// if ($prixentier > $budgetentier) {
//     echo "Tu ne peux pas acheter ça ";
// }
//     else  {
//         echo "fais toi plaisir";
//     }
 
//  ou alors on met 
// $condition = ($budget >= $prix);
//    echo ($condition ? "Youpi ! Je vais pouvoir acheter mon mac !" : 'Zut ! Le mac est trop chère, t\'facon apple c\'est nul...');
// faire un saut de ligner echo "\n"    

// Savoir si un mot est est dans une string: 
// $str = "J'adore les sushis sushis !";
// $pattern = "/sushis/i";
// echo preg_match ($pattern, $str)    >>>> va afficher 1 pour vrai et non 2 pour le nombre de mots. 
// boucle
// for ($i=0; $i<=10;i++) {
//     echo "traitement"
// }
// faire un carré en étoile creux ou plein  (à refaire )
// for ($i=1; $i<10;$i++) {
//     if (($i===1) || ($i===9)) {
//         for ($k=1;$k<10;$k++) {
//             echo "*";
//         }
//         echo "<br>";
//     } else {
//         for ($v=1;$v<11;$v++) {
//             if (($v===1) || ($v===10)) {
//                 echo "*";
//             } else {
//                 echo "&nbsp;";
//             }
            

//     }
//     echo "<br>";
    
// }
// }
    
// dessiner un triangle rectangle :
// for ($i=1;$i<10;$i++) {
//     for($j=1;$j<$i;$j++) {
//         echo "*";
//     }
//     echo "<br>";
// }




$k=7;
$string="";

for ($i=8; $i>0;$i--) {
    while($k<$i) {
        $string.="";
        $k-=($i-$k);
    }
    for ($r=$i;$r>0;$r--) {
    $string .= "*";
    }
    echo "$string";
    echo "<br>";

    
    
    
    
}




for ($i=8; $i>0;$i--) {
    $string="";
    for ($r=$i;$r>0;$r--) {
    $string .= "*";
    }
    echo "$string";
    echo "<br>";

    
    
    
    
}




?>
</html>

<!-- appliquer une fonction pour retourner une string à l'envers  -->