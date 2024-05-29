<?php
echo "Väljasta tekst: Juhan liiv, \"Ääremärkused\"<br>";
?>
<?php
$raha = 2000;
$intress = 0.02;
$aeg = 5;
$loppsumma=$raha * (1 + $intress) ** $aeg;

echo "Lõppsumma 5 aasta pärast: " . number_format($loppsumma, 2) . "€<br>";
?>
<?php
$arv = 10;
while ($arv > 0){
    echo $arv."<br>";
    $arv--;
}
?>
<?php
 $alus = array("poiss", "tudruk", "ema");
 $oeldis = array("istub", "elab", "magab");
 $sihitis = array("majas", "korteris", "rannas");
 echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];
 ?>