<?php
function clearVarsExcept($url, $varname){
    $url = basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

$tekst = 'PHP on skriptikeel serveripoolne';
$tekst2 = '          PHP on skriptikeel serveripoolne           ';
$linn = "Tartu";
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tekstifunktsioonid</title>
    <link rel="stylesheet" href="style/tekstfunktsioonid.css">
</head>
<body>

<div class="column">

    <div>
        <h2>Tekstfunktsioonid</h2>
        <?php
        echo $tekst."<br>";
        echo "teksti pikkus - strlen() = ".strlen($tekst)." tähemärgi<br>";
        echo "Esimesed 6 tähte -substr() = ".substr($tekst, 0,6)."<br>";
        echo "Alates 6 tähest = ".substr($tekst, 6)."<br>";
        echo "Sõnade arv lauses - str_word_count() = ".str_word_count($tekst)." sõna<br>";
        echo "Kõik tähed on suured - strtoupper() ".strtoupper($tekst)."<br>";
        echo "Kõik tähed on väikesed - strtolower() ".strtolower($tekst)."<br>";
        echo "Iga sõna algab suure tähega - ucwords() ".ucwords($tekst)."<br>";
        echo ucwords(strtolower($tekst))."<br><br>";
        echo "|".$tekst2."|<br>";
        echo "trim() eemaldab tühikud ".trim($tekst2)."<br>";
        echo "ltrim() eemaldab tühikud vasakult ".ltrim($tekst2)."<br>";
        echo "rtrim() eemaldab tühikud paremalt ".rtrim($tekst2)."<br>";
        ?>
    </div>

    <div>
        <h3>Tekst kui massiiv</h3>
        <?php
        echo "1.täht - ".$tekst[0]."<br>";
        echo "5.täht - ".$tekst[4]."<br>";
        print_r(str_word_count($tekst, 1));
        $syna = str_word_count($tekst, 1);
        echo "<br>massiivist 3. sõna - ".$syna[2]."<br>";
        print_r(str_word_count($tekst, 2));
        echo "<br>";
        ?>
    </div>

    <div>
        <h2>Teksti asendamine - replace</h2>
        <?php
        $asendus = "Javascript";
        echo substr_replace($tekst, $asendus, 0, 3)."<br>";
        $otsi = array('PHP', 'serveripoolne');
        $asendav = array('Javascript', 'kliendipoolne');
        echo str_replace($otsi, $asendav, $tekst);
        ?>
    </div>

    <div>
        <h2>Mõistatus. Arva ära Eesti linnanimi</h2>
        <?php
        echo "<ol>";
        echo "<li>Teine täht: ".$linn[1]."</li>";
        echo "<li>Kolmas täht: ".$linn[2]."</li>";
        echo "<li>2 viimast tähte: ".substr($linn, 3)."</li>";
        echo "<li>Tähtede arv: ".strlen($linn)."</li>";
        $asendus2 = "D";
        echo "<li>Asendatud esimene täht: ".substr_replace($linn, $asendus2, 0, 1)."</li>";
        echo "</ol>";
        ?>
    </div>

</div>

<form name="tekstkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="kontrolli">
</form>

<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == $linn){
        echo $_REQUEST["linn"]." on õige";
    } else {
        echo $_REQUEST["linn"]." on vale";
    }
}
?>

</body>
</html>
