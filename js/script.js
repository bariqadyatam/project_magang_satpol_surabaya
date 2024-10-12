
function toggleNavbar() {
    const navbarLinks = document.querySelector('.navbar-links');
    const toggleButton = document.querySelector('.toggle-button');
    navbarLinks.classList.toggle('active');
    toggleButton.classList.toggle('active');
}

window.addEventListener('DOMContentLoaded', (event) => {
    const element1 = document.getElementById('animatedElement1');
    const element2 = document.getElementById('animatedElement2');

    setTimeout(() => {
        element1.classList.add('visible');
    }, 800); // 1 second delay for the first element

    setTimeout(() => {
        element2.classList.add('visible');
    }, 1600); // 2 seconds delay for the second element


});

    


