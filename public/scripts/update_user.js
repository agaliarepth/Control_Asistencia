function mostrar(objeto){

route="/usuarios/edit/"+objeto.id;
$.get(route,function(res){

     $("#name").val(res.name);
     $("#email").val(res.email);
     $("#password").val(res.password);
     $("#id").val(res.id);
   


});

}
function actualizar(){

 var id=$("#id").val();
 var name=$("#name").val();
 var email=$("#email").val();
 var password=$("#password").val();
 var route="/usuarios/update/"+id;
 $.ajax({

     url:route,
     headers: {'X-CSRF-TOKEN':token},
     type:'get',
     dataType:'json',
     data:{name:name,email:email,password:password},
     success:function(){

        
     	$("#ModalUser").modal('hide');
     }

 

 });


}