var btnPopup = document.getElementById('btnPopup2');
var overlay = document.getElementById('overlay2');
var btnClose = document.getElementById('btnClose2');

btnPopup.addEventListener('click',openModal2);
btnClose.addEventListener('click',closePopup2);

function openModal2(){
    overlay.style.display = 'block';
}

function closePopup2(){
    overlay.style.display = 'none';
}