//TABLA USUARIOS
var rows = document.querySelectorAll("#tablaUsuarios tr");
var numeroOculto = document.getElementById("numeroOculto");
var numeroOculto2 = document.getElementById("numeroOcultoEditar2");
var btnEditarUsuario = document.getElementById("btnEditarUsuario");
var btnBorrarUsuario = document.getElementById("btnBorrarUsuario");


for (var i = 0; i < rows.length; i++) 
{
    rows[i+1].addEventListener('click', function() 
    {
        [].forEach.call(rows, function(el) 
        {
            el.classList.remove("highlight");
        });
    
        this.className += ' highlight';
        
        numeroOculto.value = parseInt(this.cells[0].innerHTML);
        numeroOculto2.value = parseInt(this.cells[0].innerHTML);

        btnEditarUsuario.disabled = false;
        btnBorrarUsuario.disabled = false;
    }, false);
}

//TABLA ADMINISTRADORES
var rows = document.querySelectorAll("#tablaAdmins tr");
var numeroOcultoBorrar = document.getElementById("numeroOcultoBorrar");
var numeroOcultoEditar = document.getElementById("numeroOcultoEditar");
var btnBorrarAdmin = document.getElementById("btnBorrar");
var btnEditarAdmin = document.getElementById("btnEditar");


for (var i = 0; i < rows.length; i++) 
{
    rows[i+1].addEventListener('click', function() 
    {
        [].forEach.call(rows, function(el) {
            el.classList.remove("highlight");
        });
        
        this.className += ' highlight';
        
        numeroOcultoBorrar.value = parseInt(this.cells[0].innerHTML);
        numeroOcultoEditar.value = parseInt(this.cells[0].innerHTML);

        btnEditarAdmin.disabled = false;
        btnBorrarAdmin.disabled = false;
    }, false);
}

