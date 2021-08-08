//small images en full images

function myFunction(smallImg)
{
    var fullImg = document.getElementById ("imageBox");
    fullImg.src = smallImg.src;
}




/***** onglet */
const onglets = document.querySelectorAll('.onglets');
const onglet = document.querySelectorAll('.onglet');
const contenu = document.querySelectorAll('.contenu');
const contenus = document.querySelectorAll('.contenuO2');
let index = 0;

onglets.forEach(onglet => {

    onglet.addEventListener('click', () => {

        if(onglet.classList.contains('active-onglet')){
            return;
        } else {
            onglet.classList.add('active-onglet');
        }

        index = onglet.getAttribute('data-anim');
        console.log(index);
        
        for(i = 0; i < onglets.length; i++) {

            if(onglets[i].getAttribute('data-anim') != index) {
                onglets[i].classList.remove('active-onglet');
            }

        }

        for(j = 0; j < contenu.length; j++){

            if(contenu[j].getAttribute('data-anim') == index) {
                contenu[j].classList.add('activeContenu');
            } else {
                contenu[j].classList.remove('activeContenu');
            }
            

        }


    })

})

onglet.forEach(onglets => {

    onglets.addEventListener('click', () => {

        if (onglets.classList.contains('active-onglet')) {
            return;
        } else {
            onglets.classList.add('active-onglet');
        }

        index = onglets.getAttribute('data-anim');
        console.log(index);

        for (i = 0; i < onglet.length; i++) {

            if (onglet[i].getAttribute('data-anim') != index) {
                onglet[i].classList.remove('active-onglet');
            }

        }

        for (j = 0; j < contenu.length; j++) {

            if (contenus[j].getAttribute('data-anim') == index) {
                contenus[j].classList.add('activeContenu');
            } else {
                contenus[j].classList.remove('activeContenu');
            }


        }


    })

})


 // bar navigation pivot icon
 var menuPoint = document.querySelectorAll('.item-menu');

 menuPoint.forEach(menu => {
     menu.addEventListener('click', function (e) {
         e.stopPropagation();
         menu.nextElementSibling.classList.toggle('active');
         menu.childNodes[5].childNodes[1].classList.toggle('rotate')
         console.log(menu.childNodes[5].childNodes[1])

         menuPoint.forEach(singleMenu => {
             if (singleMenu != menu) {
                 singleMenu.nextElementSibling.classList.remove('active')
                 singleMenu.childNodes[5].childNodes[1].classList.remove('rotate')
             }
         })
     })

     window.addEventListener('click', function () {
         menu.nextElementSibling.classList.remove('active');
         menu.childNodes[5].childNodes[1].classList.remove('rotate')
     })
 });

 // responsive affichage categorie

 var categorie = document.getElementById('categorie');
 var listMenu = document.querySelector('.list-menu');

 categorie.addEventListener('click', function (e) {
     e.stopPropagation();
     listMenu.classList.toggle('active-categorie');
 });

 window.addEventListener('click', function () {
     listMenu.classList.remove('active-categorie');
 });

 //  responsive sidebar
 var iconOpen = document.querySelector('.icon-menu-op');
 var sidebar = document.querySelector('.sidebar');
 var closeSidebar = document.querySelector('.icon-close-sidebar');

 iconOpen.addEventListener('click', function (e) {
     e.stopPropagation();
     sidebar.classList.add('active');
 })

 closeSidebar.addEventListener('click', function (e) {
     sidebar.classList.remove('active');
 })

 // faire pivoter les icon de la sidebar
 var cardTest = document.querySelectorAll(".card-header-accordion")

 cardTest.forEach((card) => {
     card.addEventListener('click', function (e) {
         console.log(e.target.querySelector('img'))
         card.querySelector("img").classList.toggle('arrowPivote-rotate');

         cardTest.forEach(close => {
             if (close != card) {
                 close.querySelector("img").classList.remove('arrowPivote-rotate');
             }
         })

     })
 });
