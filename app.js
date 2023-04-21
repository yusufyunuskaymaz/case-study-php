const searchInput = document.getElementById('table-search');
const rows = [...document.getElementsByClassName('table-row')];

searchInput.addEventListener('keyup', () => {
    const input = searchInput.value.toLowerCase();

    rows.forEach((row) => {
        const text = row.textContent.toLowerCase();

        row.style.display = "";
        if (!row.textContent.toLowerCase().includes(input)) {
            row.style.display = "none";
        }
    });

    console.log(count);

});
