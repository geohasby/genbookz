
function FotoAva() {
    const fotoAva = document.getElementById('fotoAva');
    const divFotoAva = document.getElementById('divFotoAva');

    for (let i = 10; i < 1000; i += 10) {
        setTimeout(() => {
            if (fotoAva.clientHeight > fotoAva.clientWidth) {
                divFotoAva.style.display = 'grid';
                fotoAva.style.width = '100%';
                fotoAva.style.height = 'auto';
                fotoAva.style.maxWidth = 'unset';
                fotoAva.style.maxHeight = 'unset';
            } else if (fotoAva.clientHeight < fotoAva.clientWidth) {
                divFotoAva.style.display = 'flex';
                fotoAva.style.width = 'auto';
                fotoAva.style.height = '100%';
                fotoAva.style.maxWidth = 'unset';
                fotoAva.style.maxHeight = 'unset';
            } else if (fotoAva.clientHeight = fotoAva.clientWidth) {
                fotoAva.style.maxWidth = '100%';
                fotoAva.style.maxHeight = '100%';
                fotoAva.style.width = 'auto';
                fotoAva.style.height = 'auto';
            }
        }, i);
    };
}