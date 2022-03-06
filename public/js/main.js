function hola() {
    alert("hola");
}
let link1 = document.getElementById('facultades-link');
let link2 = document.getElementById('areas-link');
let link3 = document.getElementById('dispositivos-link');
let link4 = document.getElementById('reportes-link');

function quitarActive() {
    if (link1.classList.contains('active'))
        link1.classList.remove('active');
    if (link2.classList.contains('active'))
        link2.classList.remove('active');
    if (link3.classList.contains('active'))
        link3.classList.remove('active');
    if (link4.classList.contains('active'))
        link4.classList.remove('active');
}

link1.addEventListener('click', () => {
    quitarActive()
    link1.classList.toggle('active');
})
link2.addEventListener('click', () => {
    quitarActive()
    link2.classList.toggle('active');
})
link3.addEventListener('click', () => {
    quitarActive()
    link3.classList.toggle('active');
})
link4.addEventListener('click', () => {
    quitarActive()
    link4.classList.toggle('active');
})
