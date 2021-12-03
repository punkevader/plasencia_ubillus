function mantenimientos(){
    var opcion=document.getElementById('opcionesm');
    
    if(!document.getElementById('aceite')){
        //console.log('EXISTE');
        var aceite=document.createElement('input');
        aceite.type="checkbox";
        aceite.name="aceite";
        aceite.id="aceite";
        var labaceite=document.createElement('label');
        labaceite.for="aceite";
        labaceite.id="laceite";
        labaceite.textContent="Aceite";
    
        var frenos=document.createElement('input');
        frenos.type="checkbox";
        frenos.name="frenos";
        frenos.id="frenos";
        var labfrenos=document.createElement('label');
        labfrenos.for="frenos";
        labfrenos.id="lfrenos";
        labfrenos.textContent="Frenos";
    
        var llantas=document.createElement('input');
        llantas.type="checkbox";
        llantas.name="llantas";
        llantas.id="llantas";
        var labllantas=document.createElement('label');
        labllantas.for="llantas";
        labllantas.id="lllantas";
        labllantas.textContent="Llantas";
    
    
        opcion.appendChild(aceite);
        opcion.appendChild(labaceite);
        opcion.appendChild(frenos);
        opcion.appendChild(labfrenos);
        opcion.appendChild(llantas);
        opcion.appendChild(labllantas);

    }

}

function ocultarmantenimientos(){

    var aceite=document.getElementById('aceite');
    aceite.remove();
    var laceite=document.getElementById('laceite');
    laceite.remove();

    var frenos=document.getElementById('frenos');
    frenos.remove();
    var lfrenos=document.getElementById('lfrenos');
    lfrenos.remove();

    var llantas=document.getElementById('llantas');
    llantas.remove();
    var lllantas=document.getElementById('lllantas');
    lllantas.remove();

}