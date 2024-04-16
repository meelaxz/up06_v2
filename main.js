let infoNameP1 = document.getElementById('infoNameP1')
let infoNameP2 = document.getElementById('infoNameP2')
let infoNameP3 = document.getElementById('infoNameP3')
let infoNameP4 = document.getElementById('infoNameP4')
let infoNameP5 = document.getElementById('infoNameP5')

function showP1(){
    infoNameP1.style.display = 'flex';
    infoNameP1.style.opacity = 0;

    // Задержка перед началом анимации
    setTimeout(() => {
    // Интервал анимации
    const interval = setInterval(() => {
        // Увеличиваем прозрачность элемента
        infoNameP1.style.opacity = parseFloat(element.style.opacity) + 0.1;
        // Если прозрачность достигла максимального значения, останавливаем анимацию
        if (infoNameP1.style.opacity >= 1) {
        clearInterval(interval);
        }
    }, 100);
    }, 1000);
}

function showP2(){
    infoNameP2.style.display = 'flex';
    infoNameP2.getElementById('infoNameP2').style.opacity = '100';

    setTimeout(() => {
        const interval = setInterval(() => {
            infoNameP2.style.opacity = parseFloat(element.style.opacity) + 0.1;
            if (infoNameP2.style.opacity >= 1) {
            clearInterval(interval);
            }
        }, 100);
        }, 1000);
}

function showP3(){
    infoNameP3.style.display = 'flex';
    infoNameP3.style.opacity = '100';

    setTimeout(() => {
        const interval = setInterval(() => {
            infoNameP3.style.opacity = parseFloat(element.style.opacity) + 0.1;
            if (infoNameP3.style.opacity >= 1) {
            clearInterval(interval);
            }
        }, 100);
        }, 1000);
}

function showP4(){
    infoNameP4.style.display = 'flex';
    infoNameP4.style.opacity = '100';

    setTimeout(() => {
        const interval = setInterval(() => {
            infoNameP4.style.opacity = parseFloat(element.style.opacity) + 0.1;
            if (infoNameP4.style.opacity >= 1) {
            clearInterval(interval);
            }
        }, 100);
        }, 1000);
}

function showP5(){
    infoNameP5.style.display = 'flex';
    infoNameP5.style.opacity = '100';
    setTimeout(() => {
        const interval = setInterval(() => {
            infoNameP5.style.opacity = parseFloat(element.style.opacity) + 0.1;
            if (infoNameP5.style.opacity >= 1) {
            clearInterval(interval);
            }
        }, 100);
        }, 1000);
}



function noneP1(){
    document.getElementById('infoNameP1').style.display = 'none';
    document.getElementById('infoNameP1').style.opacity = '0';
}

function noneP2(){
    document.getElementById('infoNameP2').style.display = 'none';
    document.getElementById('infoNameP2').style.opacity = '0';
}
function noneP3(){
    document.getElementById('infoNameP3').style.display = 'none';
    document.getElementById('infoNameP3').style.opacity = '0';
}
function noneP4(){
    document.getElementById('infoNameP4').style.display = 'none';
    document.getElementById('infoNameP4').style.opacity = '0';
}
function noneP5(){
    document.getElementById('infoNameP5').style.display = 'none';
    document.getElementById('infoNameP5').style.opacity = '0';
}