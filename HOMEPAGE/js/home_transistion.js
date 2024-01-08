const mama = document.getElementById('mama');
const animal = document.getElementById('animal');

animal.addEventListener('click', () => {
    mama.classList.add('mama-active');
    animal.classList.add('animal-active');
});

mama.addEventListener('click', () => {
    mama.classList.remove('mama-active');
    animal.classList.remove('animal-active');
});