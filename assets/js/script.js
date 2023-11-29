
const cad = document.querySelector("#menuCad");
const view = document.querySelector("#menuView");

cad.addEventListener('click', () => {

    if(!cad.classList.contains('active')) {
        cad.classList.add('active');
        view.classList.remove('active');
    }

});

view.addEventListener('click', () => {

    if(!view.classList.contains('active')) {
        view.classList.add('active');
        cad.classList.remove('active');
    }

});