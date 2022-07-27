function changePageTitle(newTitle) {
    document.getElementById('docTitle').innerText = newTitle;
}

function search() {
    let searchInput = document.getElementById('searchInput').value;
    alert("You search: ".concat(searchInput));
}

document.getElementById('searchInput').addEventListener("keydown", e => {
    switch (e.key) {
        case 'Enter':
            search();
            break;
    }
});

