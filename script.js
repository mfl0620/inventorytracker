var woModal = document.getElementById('woModal');
var close = document.getElementById('woModalClose');
var showPrint = document.getElementById('showPrint');
var rod = document.getElementById('eighty');
var printBtn = document.getElementById('printBtn');






rod.addEventListener('click', showModal);

close.addEventListener('click', closeModal);

showPrint.addEventListener('click', printWindow);

printBtn.addEventListener('click', printImg);



function showModal(){
    woModal.style.display = 'flex';
}

function closeModal(){
    woModal.style.display = 'none';
}

function printWindow(){
    window.open('./blueprint.html');
}

function printImg(){
    window.print();
}


