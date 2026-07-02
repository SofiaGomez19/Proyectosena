const boton = document.getElementById("menu-btn");
const menu = document.getElementById("menu");
const cerrar = document.getElementById("cerrar-menu");

// Abrir menú
boton.addEventListener("click", () => {
    menu.classList.add("activo");
});

// Cerrar con la X
cerrar.addEventListener("click", () => {
    menu.classList.remove("activo");
});

// Cerrar al hacer clic en cualquier opción
const enlaces = document.querySelectorAll(".menu-lateral a");

enlaces.forEach(enlace => {
    enlace.addEventListener("click", () => {
        menu.classList.remove("activo");
    });
});

// Cerrar al hacer clic fuera del menú
document.addEventListener("click", (e) => {

    if (
        !menu.contains(e.target) &&
        !boton.contains(e.target)
    ) {
        menu.classList.remove("activo");
    }

});