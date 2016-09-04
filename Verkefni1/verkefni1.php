<?php
//1. Hver er munurinn á echo og print: echo getur outputtað meira en 1 streng og hefur ekkert return value, print getur bara outputtað einn streng og hefur output value 1
//2. Hver er munurinn á einföldum og tvöföldum gæsalöppum: Með tvöföldum gæsalöppum þá mun það lesa variable inni í strengnum, en með einföldum mun það lesa það sem þú skrifar inn.

$kronur = "krónur";
echo "þetta kostar margar $kronur <br>";
echo 'þetta kostar margar $kronur <br>';

//3. Hvað er $GLOBALS: Það er global variable sem heldur utan um öll önnur global variable sem þú getur þá notað hvar sem er í kóðanum

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "$z <br>";

//4. Hvenær myndir þú nota === frekar en ==
// === þýðir að hlutirnir séu nákvæmlega eins en == þýðir að þeir séu jafnir
// "5" == 5 myndi skila true en "5" === 5 myndi skila false

//5 printf() er sniðugt af tveim ástæðum hverar eru þær?
// það er þæginlegar að nota til þess að formatta kóðann
printf("ok %s, %s, ssss <br>",$kronur,$x);

//6. Hvað skrifar eftirfarandi kóði

//$a = 1; //setur a sem 1
//$b = $a++; // þetta skilar sem 1 því að þetta skilar töluni og hækkar svo um einn
//$c = ++$a; // þetta skilar sem 3 því að eftir að $b hækkaði töluna í 2 þá hækkar þetta um einn og skilar svo
//echo $a . $b . $c; // þetta skilar sem 313



//8. búðu til nefnt fylki
$city = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"New York City", "India"=>"Mumbai", "Korea"=>"Seoul", "China"=>"Shanghai");
foreach($city as $x => $x_value){
echo "Country = " . $x . ", City = " . $x_value;
echo "<br>";
}

//9. Notaðu echo og list() til að birta eftirfarandi gildi úr $colors
$colors = array("red", "blue", "green");
list($a, $b, $c) = $colors;
echo "<br> $a $b $c";

//10. Gefið er fylkið $states = array("Texas", "Ohio"); Bættu við aftast New York og bættu við fremst
//california.
$states = array("Texas", "Ohio");
array_push($states, "New York");
array_unshift($states, "California");


//11. notaðu shuffle og birtu útkomuna
shuffle($states);
foreach($states as $state){
echo "<br> $state";
}

//15. Hvar er http og hvað þýðir að það sé stateless
// Stateless þýðir að serverinn þarf ekki að halda neinum upplýsingum fyrir hvern sem tengist þjóninum
// svo útaf það er stateless þá endar tengingin á browsernum og servernum þegar þeir eru búnir að skipta á gögnum.

//16. útskýrðu eftirfarandi URL útfrá protocls og domains. http://www.tskoli.is
// http er protocol sem stendur fyrir "Hyper Text Transfer Protocol" protocolið er notað er notað til þess að hafa samskipti við
// vefi og senda/taka á móti gögnum.
// www.tskoli.is er sub-domain og tskoli er domain sem eru bæði einstök við þessa síðu
// .is er top-level domain

//17. Hvað er server-side scripting? Útskýrðu ferlið.
// php er til dæmis server side scripting tækni og virkar þannig að
// notandinn sendir request fyrir síðuna og scriptið er lesið af servernum áður en hann sendir það á notandann
// scriptið breytir svo síðunni eða býr hana til eins og scriptan var skrifuð
// eftir að serverinn er búinn að gera breytingarnar þá sendir hann síðuna á notandann.
?>
