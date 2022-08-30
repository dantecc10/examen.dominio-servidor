
// Get the modal
var modal = document.getElementById('DivInicioSesión');

// When the user clicks anywhere outside of the modal, CerrarCuadro it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
