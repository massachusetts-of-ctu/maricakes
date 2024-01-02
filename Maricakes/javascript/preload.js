//preloader
window.addEventListener('load', () => {
    const load = document.querySelector('.load');
    load.classList.add('hide-load');
    load.addEventListener('transitionend', () => {
        const parent = load.parentNode;
        parent.removeChild(load);
    });
});
