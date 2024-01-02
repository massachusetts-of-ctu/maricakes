const input = document.getElementsByTagName("input");
const label = document.getElementsByTagName("label");


var tst = 0;
input.addEventListener('click', function() {
    if(tst == 0) {
        label.label.classList.add('move');
        tst = 1;
    } else if(tst == 1) {
        label.label.classList.remove('move');
        tst = 0;
    }
    
});

