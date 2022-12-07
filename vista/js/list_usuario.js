/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

const radios = document.querySelectorAll("#genero");

for (let i = 0; i < radios.length; i++) {
    radios[i].onclick = function () {
        const valor = radios[i].value;
        const renglon = document.querySelector("#_" + valor);
        const nombre = document.querySelector("#nombre");
        const apellido = document.querySelector("#apellido");
        const login = document.querySelector("#log");
        const password = document.querySelector("#password");
        const rol = document.querySelector("#rol");
        const idusuario = document.querySelector("#idusuario");
        nombre.disabled = true;
        apellido.disabled = true;
        login.disabled = true;
        password.disabled = true;
        rol.disabled = true;
        idusuario.value = valor;
        nombre.value = renglon.childNodes[1].textContent;
        apellido.value = renglon.childNodes[2].textContent;
        login.value = renglon.childNodes[3].textContent;
        password.value = renglon.childNodes[4].textContent;
        rol.value = renglon.childNodes[5].textContent;

    };
    
    function nuevoUsuario(){
        const nombre = document.querySelector("#nombre");
        const apellido = document.querySelector("#apellido");
        const login = document.querySelector("#log");
        const password = document.querySelector("#password");
        const rol = document.querySelector("#rol");
        
        nombre.disabled = false;
        apellido.disabled = false;
        login.disabled = false;
        password.disabled = false;
        rol.disabled = false;
        
        nombre.value = '';
        apellido.value = '';
        login.value = '';
        password.value = '';
        rol.value = '';
        
        
    }
    
    function modificarUsuario() {
        const nombre = document.querySelector("#nombre");
        const apellido = document.querySelector("#apellido");
        const login = document.querySelector("#log");
        const password = document.querySelector("#password");
        const rol = document.querySelector("#rol");
        
        nombre.disabled = true;
        apellido.disabled = true;
        login.disabled = true;
        password.disabled = false;
        rol.disabled = false;
        
    }
    
    const nuevo = document.querySelector("#nuevo");
    const modificar = document.querySelector("#modificar");
    
    nuevo.addEventListener('click', nuevoUsuario);
    modificar.addEventListener('click', modificarUsuario);
}


