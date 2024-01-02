
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function () {
  modal.style.display = "block";
}
span.onclick = function () {
  modal.style.display = "none";
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var editmodal = document.querySelector('.modals');
  if(editmodal.style.display == "block") {
    editmodal.classList.add('modals-scale');
  } else if(editmodal.style.display == "none") {
    editmodal.classList.remove('modals-scale');
  }
