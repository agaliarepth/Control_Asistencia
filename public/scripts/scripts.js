
//SCRIPT PARA REGISTRAR USUARIO MEDIANTE AJAX
$('#enviar').click(function(){

var name=$('#name').val();
var password=$('#password').val();
var email=$('#email').val();
var token=$('#token').val();
var route=$('#form-users').attr('action');


$.ajax({
	url:route,
	headers:{'X-CSRF-TOKEN':token},
	type:'POST',
	dataType:'json',
	data:{name:name,email:email,password:password},
    success:function(e.mensaje){
              $("#msj-success").fadeIn();
     }
    
      });


});


///*******************************************************



//SCRIPT PARA ACTUALIZAR USUARIO



