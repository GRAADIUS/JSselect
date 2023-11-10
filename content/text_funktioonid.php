<h2>Text funtsioonid</h2>
<?php
function clearVarsExept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']), "?"). "?$varname=".$_REQUEST[$varname];
    //return "?$varname=".$_REQUEST[$varname];
}
$tekst="Vaba laba dab dab";
echo $tekst;
echo "<br>";

//kõik tähed väikesed
echo strtolower($tekst);
echo "<br>";

//kõik tähed suured
echo strtoupper($tekst);
echo "<br>";

//iga sõna algab suure tähega
echo ucwords(strtolower($tekst));
echo "<br>";

//teksti pikkus
echo "texti len = ".strlen($tekst);
echo "<br>";

//sõnade arv lauses
echo str_word_count($tekst)." sõnum";
echo "<br>";

//eralda lauses alates 3 kokku 5 tähte
echo substr($tekst, 2, 5);
echo "<br>";

//tühi asukoht
echo "Esimese tühiku asukoht on ".strpos($tekst, " ");
echo "<br>";

//eralda 1 sõna laused
echo substr($tekst, 0, strpos($tekst, " "));
echo "<br>";

//näita kõik sõnad peale esimest
echo substr($tekst, strpos($tekst, " "), strlen($tekst) - strpos($tekst, " "));
echo "<br>";

//mõistatus
$riik="Suurbritannia";
echo "<ol>";
echo "<li>";
echo "Подсказка 1: " . substr($riik, 0, 4) . "...\n";
echo "</li>";

echo "<li>";
echo "Подсказка 2: " . substr($riik, 3, 5) . "...\n";
echo "</li>";

echo "<li>";
echo "Подсказка 3: " . substr($riik, strpos($riik, "bri"), 5) . "...\n";
echo "</li>";

echo "<li>";
echo "Подсказка 4: " . substr($riik, 0, 1) . "..." . substr($riik, -2) . "\n";
echo "</li>";

echo "<li>";
echo "Подсказка 5: ".str_shuffle($riik);
echo "</li>";
echo "</ol>";
?>

<strong>Kontroll:</strong>
<form action="<?clearVarsExept(basename($_SERVER['REQUEST_URI']), "veebileht")?>">
    <input type="text" name="kontroll" class="col">
    <input type="submit" value="ok">
</form>
<?php
if(isset($_REQUEST["kontroll"])){
    if($_REQUEST["kontroll"] == @$riik){
        echo "õige";
        echo "<body style='background-color: green'>";
    }
    else{
        echo "Vale";
        echo "<body style='background-color: red'>";
    }
}
?>
