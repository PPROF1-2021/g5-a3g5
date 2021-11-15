var input = document.getElementsByClassName('form-control')
for (var i=0; i <= input.length; i++) {
    input[i].addEventListener('keyup', function () {
       if(this.value.length>=1) {
           this.nextElementSibling.classList.add('fijar');
       }else{
           this.nextElementSibling.classList.remove('fijar');
       }
    });
}