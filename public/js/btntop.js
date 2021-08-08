// faire afficher le button retur top
var btnTop = document.getElementById('btnReturn')

btnTop.onclick = function () {
    window.scrollTo(pageXOffset, 0);
};

window.addEventListener('scroll', function () {
    btnTop.classList.add('btn__button-returnTop');
    btnTop.hidden = (pageYOffset < document.documentElement.clientHeight);
});