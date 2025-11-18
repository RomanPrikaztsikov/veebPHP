function naitaRuhma() {
    // loetelu kõigist õpilastest
    const opilased = [
        "Aleksejev", "Blahun", "Gontsarov", "Jurgen", "Litvinenko", "Lukk",
        "Nikiforov", "Orlenko", "Petrovski", "Pikaljov", "Posvystak", "Prikaztsikov",
        "Poldsaar", "Radasheva", "Ryshniak", "Rossakov", "Takhmazov", "Tsikvasvili"
    ];

    // kuvame nimekirja lehe allosas
    document.getElementById("rühmaloetelu").textContent = "Rühma õpilased: " + opilased.join(", ");
}
