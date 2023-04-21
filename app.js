const searchInput = document.getElementById('table-search');
const rows = [...document.getElementsByClassName('table-row')];


searchInput.addEventListener('keyup', () => {
    const input = searchInput.value.toLowerCase();
    rows.forEach((row) => {
        const task = row.querySelector("#task").textContent.toLowerCase();
        const title = row.querySelector("#title").textContent.toLowerCase();
        const description = row.querySelector("#description").textContent.toLowerCase();
        // const color = row.querySelector("#color").textContent.toLowerCase();

        if (task.includes(input) || title.includes(input) || description.includes(input)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});



