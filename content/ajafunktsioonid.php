<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
<title>Aja Funktsioonid</title>
<link rel="stylesheet" href="style/ajafunktsioonid.css">
</head>
<body>

<div class="row">
<div>
    <?php
    echo "<h3>Aja Funktsioonid</h3>";
    date_default_timezone_set("Europe/Tallinn");
    echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezone list</a>";
    echo "<br>";
    echo "time() - aeg sekundides - " . time();
    echo "<br>";
    echo "date() - " . date("Y-m-d G:i:s", time());
    echo "<br>";
    echo "date('Y-m-d H:i:s', time())";
    ?>
</div>

<div>
    <h3>Mis tähed tähendavad</h3>
    <?php
    echo "<pre>
d - päev 01...31
m - kuu 01...12
Y - aasta neljakohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
    ?>
</div>

<div>
    <h3>Tehted kuupäevaga</h3>
    <?php
    echo "+1 min = time()+60 " . date("Y-m-d G:i:s", time() + 60);
    echo "<br>";
    echo "+1 tund = time()+60*60 " . date("Y-m-d G:i:s", time() + 60 * 60);
    echo "<br>";
    echo "+1 päev = time()+60*60*24 " . date("Y-m-d G:i:s", time() + 60 * 60 * 24);
    ?>
</div>

<div>
    <h3>Kuupäeva genereerimine</h3>
    <?php
    echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
    $synd = mktime(1, 2, 12, 6, 5, 2007);
    echo "<br>minu sünnipäev " . date("Y-m-d G:i:s", $synd);
    ?>
</div>

<div>
    <h3>Massiivi abil näidata kuu nimega</h3>
    <?php
    $kuud = array(1 => 'jaanuar', 'veebruar', 'märts', 'april', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'december');
    $aasta = date("Y");
    $paev = date("d");
    $kuu = $kuud[(int)date("m")];
    echo "Täna on: " . $paev . " " . $kuu . " " . $aasta . "a.";
    ?>
</div>
</div>

</body>
</html>
