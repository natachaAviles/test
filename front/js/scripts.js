/* perro:
raza, color, fecha nacimiento aprox, nombre temporal, estado,

humano:
nombre, apellido, rut, fecha nacimiento, 


sucursales :
región, comuna, humano encargado, estado. */

$(document).ready(function(){

  edit();
});

function edit(){
  var buttonedit = $('.glyphicon-pencil');

  buttonedit.on('click',function(){
    var rowedit = $(this).closest('tr');
    var cell = rowedit.find('td');
    console.log(cell.length);

    for(i = 0; i < cell.length; i++){
      var txt = cell.text();
      var input = document.createElement('input');
    }
    
  });
}