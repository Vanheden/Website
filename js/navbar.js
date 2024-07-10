document.addEventListener('DOMContentLoaded', function() {
    fetch('navbar.php')
        .then(response => response.text())
        .then(data => {
            const navbarContainer = document.getElementById('navbar-container');
            if (navbarContainer) {
                navbarContainer.innerHTML = data;
            } else {
                console.error('Navbar container element not found');
            }
        })
        .catch(error => {
            console.error('Error loading navbar:', error);
        });
});
