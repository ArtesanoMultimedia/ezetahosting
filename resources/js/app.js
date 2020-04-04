require('./bootstrap');

// Inicializar sidenav
document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.sidenav');
    let options = {};
    let instances = M.Sidenav.init(elems, options);
});
