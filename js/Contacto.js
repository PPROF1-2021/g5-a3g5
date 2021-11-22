//------------------------------------------------------------------------
//rutina de movimiento de las etiquetas del formulario
//------------------------------------------------------------------------
var input = document.getElementsByClassName('forma__input')
for (var i=0; i <= input.length; i++) {
    input[i].addEventListener('keyup', function () {
       if(this.value.length>=1) {
           this.nextElementSibling.classList.add('fijar');
           //this.nextElementSibling.classList.add('placeholder');
       }else{
           this.nextElementSibling.classList.remove('fijar');
           //this.nextElementSibling.classList.remove('placeholder');
       }
    });
}


//------------------------------------------------------------------------
//rutina de validacion de los campos del formulario solo numerico
//------------------------------------------------------------------------
//    jQuery(document).ready(function(){
//        jQuery("#3").on('input', function(evt) {
//            jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
//        });
//    });
//
//------------------------------------------------------------------------

