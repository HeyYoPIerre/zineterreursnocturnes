import './bootstrap';

document.getElementById('menu-toggle').addEventListener('click', function() {
    var menu = document.getElementById('menu-items');
    menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
});