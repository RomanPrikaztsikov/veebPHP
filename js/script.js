function kuvaTana(nupp) {
    let sihtId = nupp.getAttribute("data-target");
    let sihtElement = document.getElementById(sihtId);
    const praegu = new Date();

    const kuupaev = praegu.toLocaleDateString('et-EE');
    const kellaaeg = praegu.toLocaleTimeString('et-EE');
    const kuupaevKellaaeg = praegu.toLocaleString('et-EE');

    sihtElement.innerHTML = `
        Kuupäev: <strong>${kuupaev}</strong><br>
        Kellaaeg: <strong>${kellaaeg}</strong><br>
        Mõlemad: <strong>${kuupaevKellaaeg}</strong>
    `;

    console.log("--- TÄNA ON ---");
    console.log("Kuupäev:", kuupaev);
    console.log("Kellaaeg:", kellaaeg);
    console.log("Kuupäev ja kellaaeg:", kuupaevKellaaeg);
}

function sunnipaevani(nupp) {
    let sihtId = nupp.getAttribute("data-target");
    let sihtElement = document.getElementById(sihtId);

    const praegu = new Date();
    const praeguneAasta = praegu.getFullYear();

    let sunnipaev = new Date(praeguneAasta, 5, 5);

    if (praegu.getTime() > sunnipaev.getTime()) {
        sunnipaev.setFullYear(praeguneAasta + 1);
    }

    const vaheMs = sunnipaev.getTime() - praegu.getTime();
    const paevad = Math.ceil(vaheMs / (1000 * 60 * 60 * 24));

    const vastusTekst = `Minu järgmise sünnipäevani (5 juuni) on jäänud <strong>${paevad}</strong> päeva.`;
    sihtElement.innerHTML = vastusTekst;

    console.log("--- SÜNNIPÄEV ---");
    console.log(vastusTekst.replace(/<[^>]*>/g, ''));
}

