/************************************************
    Developed By: Z1FlexibleSolution.com
    Developed On: 10 / December / 2020
************************************************/
"use strict";

function toggle_menu(obj) {

    jQuery(obj).find('i').toggleClass('la-times la-bars');

    jQuery('.primary-menu').slideToggle();

    // obj.querySelector('i').classList.toggle('la-times la-bars');

    // document.querySelector('.primary-menu').classList.toggle('show');

}

var modal_zoomimage = document.getElementById('modal-zoomimage')
if (modal_zoomimage) {
    modal_zoomimage.addEventListener('show.bs.modal', function (event) {

        var button = event.relatedTarget
        var modalTitle = modal_zoomimage.querySelector('.modal-title')
        var modalImage = modal_zoomimage.querySelector('.modal-zoomimage')
        var title = button.getAttribute('data-bs-title')
        var image = button.getAttribute('data-bs-image')

        modalTitle.textContent = title
        modalImage.setAttribute('src', image)
    })
}