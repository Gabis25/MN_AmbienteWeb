function ConsultarNombre() {
    let identificacion = document.getElementById("txtIdentificacion").value;
    
    const xhttpr = new XMLHttpRequest(); //Instancio la clase con la que hago la peticion
    xhttpr.open('GET', 'https://apis.gometa.org/cedulas/' + identificacion, true); 
    //Definimos la ruta 
    xhttpr.send();//Hacemos un .send 

    xhttpr.onload = ()=>{
        if (xhttpr.status ===200){
            const response = JSON.parse(xhttpr.response);
            document.getElementById("txtNombre").value = response.nombre;
        }else {
           
        }

    };
}


    

   


