<!DOCTYPE html>
<html>
<head>
  
<?php




//LAIKRODIS//
Echo '<h1>Laikrodis</h1>';
$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(1,60);

$ampm  = ($valandos <12) ? 'AM': 'PM'.($valandos =$valandos-12);

$valandos = ($valandos <10) ? '0'.$valandos : $valandos;
$minutes = ($minutes <10) ? '0'.$minutes : $minutes;
$sekundes = ($sekundes <10) ? '0'.$sekundes : $sekundes;

echo $ampm.' '.$valandos.':'.$minutes.':'.$sekundes;



//SKAITMENŲ SKAIČIUOKLIS//
Echo '<h1>Skaitmenų skaičiuoklis</h1>';

$nuliai = null;

$pirmas  = rand(0,2);
$antras  = rand(0,2);
$trecias  = rand(0,2);

echo $pirmas.' '.$antras.' '.$trecias;

   $nuliai = null;
   $vienetai = null;
   $dvejetai = null;

   $pirmas == 0 ? $nuliai = $nuliai+1 : '';
   $pirmas == 1 ? $vienetai++ : '';
   $pirmas == 2 ? $dvejetai++ : '';
   $antras == 0 ? $nuliai++ : '';
   $antras == 1 ? $vienetai++ : '';
   $antras == 2 ? $dvejetai++ : '';
   $trecias == 0 ? $nuliai++ : '';
   $trecias == 1 ? $vienetai++ : '';
   $trecias == 2 ? $dvejetai++ : '';

echo '<br/>Nuliai -'.$nuliai.'<br/>Vienetai -'.$vienetai.'<br/>Dvejetai -'.$dvejetai.'<br/>';



//ŽVAKĖS//
Echo '<h1>Žvakės</h1>';

$kiekis = rand(5, 3000);
$nuolaida = 0;
$suma = 0;

if($kiekis < 1001)
{
    $suma = $kiekis * (1-$nuolaida);
}
elseif ($kiekis > 1000 && $kiekis < 2000)
{
    $nuolaida = 0.03;
    $suma = $kiekis * (1-$nuolaida);
}
elseif ($kiekis > 2000)
{
    $nuolaida = 0.04;
    $suma = $kiekis * (1-$nuolaida);
}
    echo 'Pirkta vnt.: '.$kiekis.'<br/>Nuolaida: '.$nuolaida.'<br/>Iš viso mokėti: '.$suma.'<br/>';



//TRIKAMPIS//
Echo '<h1>Trikampis </h1>';

$pirma_kr  = rand(1,10);
$antra_kr  = rand(1,10);
$trecia_kr  = rand(1,10);
echo 'Kraštinės a.-'.$pirma_kr.' b.-'.$antra_kr.' c.-'.$trecia_kr;

if ($pirma_kr > $antra_kr+$trecia_kr || $antra_kr > $pirma_kr + $trecia_kr || $trecia_kr > $pirma_kr + $antra_kr )
{
echo '<br/>TRIKAMPIS <br/>';
}
else
{
    echo '<br/>Trikampio sudaryti neįmanoma: a.-'.$pirma_kr.' b.-'.$antra_kr.' c.-'.$trecia_kr;
}













?>




</head>
<body>
    
</body>
</html>