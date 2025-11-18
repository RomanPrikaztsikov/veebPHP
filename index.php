<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Roman Prikaztsikov PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/ruhmalehtstyle.css">
    <script src="js/muusika.js"></script>
    <script src="js/ruhmaleht.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php
//päis
    include("header.php");
?>

<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <section>
        <?php
        if(isset($_GET["link"])){
            include('content/'.$_GET["link"]);
        } else {
            include("content/avaleht.php");
        }
        ?>
    </section>
</div>


<div class="flex-container">
    <section class="osa1">
        <h2>TTHK veebirakenduste aluste mooduli leht</h2>
        <div>Tere tulemast! See leht on minu koolitööde jaoks.</div>
    </section>

    <section class="osa2">
        <h2>Kuupaev ulesanne</h2>
        <table>
            <tr>
                <td><input onclick="kuvaTana(this)" type="button" value="TÄNA ON" data-target="tanaOnVastus"></td>
                <td><span id="tanaOnVastus"></span></td>
            </tr>
            <tr>
                <td><input onclick="sunnipaevani(this)" type="button" value="Minu sünnipäevani" data-target="sunnipaevaniVastus"></td>
                <td><span id="sunnipaevaniVastus"></span></td>
            </tr>
        </table>
    </section>
</div>

<div id="img">
    <img src="image/1.png" alt="kubik">
</div>

<?php
//jalus
include("footer.php");
?>



</body>
</html>