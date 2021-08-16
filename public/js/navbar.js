const ava = document.getElementById('fotoAva');
const setAva = document.getElementById('nav-prof');
const ddAva = ava.getElementsByClassName('mprofil')[0];
const navSearch = document.getElementById('navSearch');
const iconSrch = document.getElementsByClassName('icon-cari')[0];
const ddSrch = iconSrch.getElementsByClassName('search')[0];
const realIconSrch = ddSrch.getElementsByTagName('svg')[0];
const navNotif = document.getElementById('navnotif');
const iconNotif = document.getElementsByClassName('notifikasi')[0];
const ddNotif = iconNotif.getElementsByClassName('notif')[0];
const realIconNotif =ddNotif.getElementsByTagName('svg')[0];
const navDb = document.getElementById('navdb');
const iconDb = document.getElementsByClassName('readlist')[0];
const ddDb = iconDb.getElementsByClassName('readl')[0];
const realIconDb = ddDb.getElementsByTagName('svg')[0];
const isiIconDb = ddDb.getElementsByClassName('fa-book')[0];
const iconHome = document.getElementsByClassName('home')[0];
const realIconHome = iconHome.getElementsByTagName('svg')[0];
let width = window.innerWidth;
let height = window.innerHeight;
console.log(height);

if(width <= 780) {
    ddAva.removeAttribute('data-toggle');
    ava.addEventListener('click', function () {
        setAva.classList.add('munculkan');
        navSearch.classList.remove('munculkan-block');
        navNotif.classList.remove('munculkan-block');
        navDb.classList.remove('munculkan-block');
        realIconSrch.style.fill = '#000';
        realIconNotif.style.fill = '#000';
        realIconDb.style.fill = '#000';
        realIconHome.style.fill = '#000';
    });

    ddSrch.classList.add('shadow-none');
    iconSrch.addEventListener('click', function() {
        navSearch.classList.add('munculkan-block');
        navSearch.style.height = `${height}px`;
        setAva.classList.remove('munculkan');
        navNotif.classList.remove('munculkan-block');
        navDb.classList.remove('munculkan-block');
        realIconSrch.style.fill = '#bb00bb';
        realIconNotif.style.fill = '#000';
        realIconDb.style.fill = '#000';
        realIconHome.style.fill = '#000';
    });

    ddNotif.removeAttribute('data-toggle');
    ddNotif.classList.add('shadow-none');
    iconNotif.addEventListener('click', function(){
        ddNotif.style.backgroundColor = 'transparent';
        navNotif.classList.add('munculkan-block');
        navNotif.style.height = `${height}px`;
        navSearch.classList.remove('munculkan-block');
        setAva.classList.remove('munculkan');
        navDb.classList.remove('munculkan-block');
        realIconNotif.style.fill = '#bb00bb';
        realIconSrch.style.fill = '#000';
        realIconDb.style.fill = '#000';
        realIconHome.style.fill = '#000';
    })

    ddDb.removeAttribute('data-toggle');
    ddDb.classList.add('shadow-none');
    iconDb.addEventListener('click', function () {
        ddDb.style.backgroundColor = 'transparent';
        navDb.classList.add('munculkan-block');
        navDb.style.height = `${height}px`;
        navSearch.classList.remove('munculkan-block');
        setAva.classList.remove('munculkan');
        navNotif.classList.remove('munculkan-block');
        realIconDb.style.fill = '#bb00bb';
        realIconHome.style.fill = '#000';
        realIconSrch.style.fill = '#000';
        realIconNotif.style.fill = '#000';
    })

    iconHome.addEventListener('click', function () {
        navDb.classList.remove('munculkan-block');
        navSearch.classList.remove('munculkan-block');
        setAva.classList.remove('munculkan');
        navNotif.classList.remove('munculkan-block');
        realIconHome.style.fill = '#bb00bb';
        realIconDb.style.fill = '#000';
        realIconSrch.style.fill = '#000';
        realIconNotif.style.fill = '#000';
    })

}

const tClose = document.getElementsByClassName('tombol-close')[0];
const srchBox = document.getElementsByClassName('cari')[0];

tClose.addEventListener('click', function () {
    srchBox.value = '';
});

const avaava0 = document.getElementsByClassName('foto-p')[0];
const avaava1 = document.getElementsByClassName('foto-p')[1];
const fotoProf = document.getElementsByClassName('foto-prof')[0];


window.addEventListener('load',function(){
    for (let i = 10; i < 1000; i += 10) {
        setTimeout(() => {
            if (avaava0.clientHeight > avaava0.clientWidth) {
                ddAva.style.display= 'grid';
                avaava0.style.width = '100%';
                avaava0.style.height = 'auto';
                avaava0.style.maxWidth = 'unset';
                avaava0.style.maxHeight = 'unset';
            } else if (avaava0.clientHeight < avaava0.clientWidth) {
                ddAva.style.display = 'flex';
                avaava0.style.width = 'auto';
                avaava0.style.height = '100%';
                avaava0.style.maxWidth = 'unset';
                avaava0.style.maxHeight = 'unset';
            } else if (avaava0.clientHeight = avaava0.clientWidth) {
                avaava0.style.maxWidth = '100%';
                avaava0.style.maxHeight = '100%';
                avaava0.style.width = 'auto';
                avaava0.style.height = 'auto';
            }
        }, i);
    };
})

avaava0.addEventListener('click', function () {
    for (let i = 10; i < 1000; i += 10) {
        setTimeout(() => {
            if (avaava1.clientHeight > avaava1.clientWidth) {
                fotoProf.style.display = 'grid';
                avaava1.style.width = '100%';
                avaava1.style.height = 'auto';
                avaava1.style.maxWidth = 'unset';
                avaava1.style.maxHeight = 'unset';
            } else if (avaava1.clientHeight < avaava1.clientWidth) {
                fotoProf.style.display = 'flex';
                avaava1.style.width = 'auto';
                avaava1.style.height = '100%';
                avaava1.style.maxWidth = 'unset';
                avaava1.style.maxHeight = 'unset';
            } else if (avaava1.clientHeight = avaava1.clientWidth) {
                avaava1.style.maxWidth = '100%';
                avaava1.style.maxHeight = '100%';
                avaava1.style.width = 'auto';
                avaava1.style.height = 'auto';
            }
        }, i);
    };
})









