const inputFile = document.getElementById('inputFile');
const btnInput = document.getElementById('btn-input');
const txtInput = document.getElementById('custom-txt');

btnInput.addEventListener('click', function() {
    inputFile.click();
});

inputFile.addEventListener('change', function() {
    if(inputFile.value) {
        txtInput.innerHTML = inputFile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    } else {
        txtInput.innerHTML = 'Tidak ada file yang dipilih';
    }
});