function raadiojaamad() {
    let jaamad = document.getElementById("jaamad");
    let vastus5 = document.getElementById("vastus5");
    vastus5.innerText = "Sinu nimetatud jaamad: " + jaamad.value;
}

function arvamus() {
    let tekst = document.getElementById("tekst");
    let vastus2 = document.getElementById("vastus2");
    vastus2.innerText = "Sinu arvamus: " + tekst.value;
}

function uuendamuusikaSlider() {
    let slider = document.getElementById("muusikaSlider");
    let vastus3 = document.getElementById("vastus3");
    vastus3.innerText = "Sa kuulad muusikat " + slider.value + " tundi päevas";
}

function radiokuulamine() {
    let vastus4 = document.getElementById("vastus4");
    let jah = document.getElementById("jah");

    if (jah.checked) {
        vastus4.innerText = "Raadio kuulamine: jah";
    } else {
        vastus4.innerText = "Raadio kuulamine: ei";
    }
}

function muusikValik() {
    let muusik1 = document.getElementById("muusik1");
    let muusik2 = document.getElementById("muusik2");
    let muusik3 = document.getElementById("muusik3");
    let vastus1 = document.getElementById("vastus1");

    let valik = "";

    if (muusik1.checked) {
        valik = valik + muusik1.value + ", ";
    }
    if (muusik2.checked) {
        valik = valik + muusik2.value + ", ";
    }
    if (muusik3.checked) {
        valik = valik + muusik3.value + ", ";
    }

    if (valik == "") {
        vastus1.innerText = "Sinu valitud muusikud: ...";
    } else {
        vastus1.innerText = "Sinu valitud muusikud: " + valik;
    }
}

function puhasta() {
    let vastus1 = document.getElementById("vastus1");
    let muusik1 = document.getElementById("muusik1");
    let muusik2 = document.getElementById("muusik2");
    let muusik3 = document.getElementById("muusik3");
    let vastus2 = document.getElementById("vastus2");
    let tekst = document.getElementById("tekst");
    let vastus3 = document.getElementById("vastus3");
    let slider = document.getElementById("muusikaSlider");
    let vastus4 = document.getElementById("vastus4");
    let jah = document.getElementById("jah");
    let ei = document.getElementById("ei");
    let vastus5 = document.getElementById("vastus5");
    let jaamad = document.getElementById("jaamad");
    let kokkuvote = document.getElementById("kokkuvote");

    vastus1.innerText = "";
    muusik1.checked = false;
    muusik2.checked = false;
    muusik3.checked = false;

    vastus2.innerText = "";
    tekst.value = "";

    vastus3.innerText = "";
    slider.value = 12;

    vastus4.innerText = "";
    jah.checked = false;
    ei.checked = false;

    vastus5.innerText = "";
    jaamad.value = "";

    kokkuvote.innerText = "";

    document.getElementById("hiphop").checked = false;
    document.getElementById("rock").checked = false;
    document.getElementById("jazz").checked = false;
    document.getElementById("klassika").checked = false;
    document.getElementById("elektronika").checked = false;
    document.getElementById("rap").checked = false;
}

function kokkuvote() {
    let kokku = "";
    kokku += document.getElementById("vastus1").innerText + ", ";
    kokku += document.getElementById("vastus2").innerText + ", ";
    kokku += document.getElementById("vastus3").innerText + ", ";
    kokku += document.getElementById("vastus4").innerText + ", ";
    kokku += document.getElementById("vastus5").innerText + ", ";
    document.getElementById("kokkuvote").innerText = kokku;
}



function validateForm() {
    var valid = true;

    var muusik1 = document.getElementById("muusik1");
    var muusik2 = document.getElementById("muusik2");
    var muusik3 = document.getElementById("muusik3");

    var tekst = document.getElementById("tekst").value;
    var jaamad = document.getElementById("jaamad").value;

    var jah = document.getElementById("jah");
    var ei = document.getElementById("ei");

    var hiphop = document.getElementById("hiphop");
    var rock = document.getElementById("rock");
    var jazz = document.getElementById("jazz");
    var klassika = document.getElementById("klassika");
    var elektronika = document.getElementById("elektronika");
    var rap = document.getElementById("rap");

    var muusikError = document.getElementById("muusikError");
    var tekstError = document.getElementById("tekstError");
    var jaamadError = document.getElementById("jaamadError");
    var radioError = document.getElementById("radioError");
    var muusikaError = document.getElementById("muusikaError");

    muusikError.innerText = "";
    tekstError.innerText = "";
    jaamadError.innerText = "";
    radioError.innerText = "";
    muusikaError.innerText = "";

    if (!muusik1.checked && !muusik2.checked && !muusik3.checked) {
        muusikError.innerText = "Palun vali vähemalt üks muusik!";
        valid = false;
    }

    if (tekst == "") {
        tekstError.innerText = "Palun sisesta arvamus muusika kuulamise kohta!";
        valid = false;
    }

    if (!jah.checked && !ei.checked) {
        radioError.innerText = "Palun vali raadio kuulamine!";
        valid = false;
    }

    if (jaamad == "") {
        jaamadError.innerText = "Palun sisesta raadiojaamad!";
        valid = false;
    }

    if (!hiphop.checked && !rock.checked && !jazz.checked && !klassika.checked && !elektronika.checked && !rap.checked) {
        muusikaError.innerText = "Palun vali eelistatud muusika!";
        valid = false;
    }

    if (valid) {
        var kokku = "Muusikud: ";
        if (muusik1.checked) kokku += muusik1.value + ", ";
        if (muusik2.checked) kokku += muusik2.value + ", ";
        if (muusik3.checked) kokku += muusik3.value + ", ";
        kokku = kokku.slice(0, -2);

        kokku += " Arvamus: " + tekst;
        kokku += " Raadio: " + (jah.checked ? "jah" : "ei");
        kokku += " Raadiojaamad: " + jaamad;

        var muusikaValik = "";
        if (hiphop.checked) muusikaValik = "HipHop";
        else if (rock.checked) muusikaValik = "Rock";
        else if (jazz.checked) muusikaValik = "Jazz";
        else if (klassika.checked) muusikaValik = "Klassika";
        else if (elektronika.checked) muusikaValik = "Elektronika";
        else if (rap.checked) muusikaValik = "Rap";

        kokku += "\nEelistatud muusika: " + muusikaValik;

        document.getElementById("kokkuvote").innerText = kokku;
    }

    return false;
}








