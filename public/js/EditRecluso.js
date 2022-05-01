const modalAlumno = new bootstrap.Modal(document.getElementById('exampleModal'))

const on = (element, event, selector, handler) => {
    element.addEventListener(event, e => {
        if(e.target.closest(selector)){
            handler(e)
        }
    })
}

on(document, 'click','.btnEditar', e =>{
let v=[{a:'1',a1:'TI'},
       {a:'2',a1:'CC'},
       {a:'3',a1:'CE'}
    ];


    const fila = e.target.parentNode.parentNode
    Pv=fila.children[0].id
    inputNumberCell.value=fila.children[1].innerHTML
    inputCodeRecluso.value=fila.children[2].innerHTML
    inputSexo=fila.children[3].id
    idtypedocument=fila.children[4].id
    document_edit.value=fila.children[5].innerHTML
    inputNames.value=fila.children[6].innerHTML
    inputSurName.value=fila.children[7].innerHTML
    State=fila.children[8].id
    IdU=fila.children[10].innerHTML
  //  form.action="{{route('recluso.update',"+IdU+")}}";
    document.getElementById("form").action = "http://127.0.0.1:8000/recluso/update/"+IdU;
    //action="http://127.0.0.1:8000/recluso/update/2"
    console.log(IdU)
//Tipo de documento
    if(idtypedocument==1){
        document.getElementById("Td1").innerHTML = 'TI';
        document.getElementById("Td1").value = '1';
        document.getElementById("Td2").innerHTML = 'CC';
        document.getElementById("Td2").value = '2';
        document.getElementById("Td3").innerHTML = 'CE';
        document.getElementById("Td3").value = '3';
    }
    else if(idtypedocument==2){
        document.getElementById("Td1").innerHTML = 'CC';
        document.getElementById("Td1").value = '2';
        document.getElementById("Td2").innerHTML = 'CE';
        document.getElementById("Td2").value = '3';
        document.getElementById("Td3").innerHTML = 'TI';
        document.getElementById("Td3").value = '1';
    }
    else if(idtypedocument==3){
        document.getElementById("Td1").innerHTML = 'CE';
        document.getElementById("Td1").value = '3';
        document.getElementById("Td2").innerHTML = 'TI';
        document.getElementById("Td2").value = '1';
        document.getElementById("Td3").innerHTML = 'CC';
        document.getElementById("Td3").value = '2';
    }
//Sexo
    if(inputSexo==2){
        document.getElementById("s1").innerHTML = 'Mujer';
        document.getElementById("s1").value = '2';
        document.getElementById("s2").innerHTML = 'Hombre';
        document.getElementById("s2").value = '1';
    }
    else if(inputSexo==1){
        document.getElementById("s1").innerHTML = 'Hombre';
        document.getElementById("s1").value = '1';
        document.getElementById("s2").innerHTML = 'Mujer';
        document.getElementById("s2").value = '2';
    }
//Estado
    if(State==2){
        document.getElementById("dt1").innerHTML = 'Inactivo';
        document.getElementById("dt1").value = '2';
        document.getElementById("dt2").innerHTML = 'Activo';
        document.getElementById("dt2").value = '1';
    }
    else if(State==1){
        document.getElementById("dt2").innerHTML = 'Inactivo';
        document.getElementById("dt2").value = '2';
        document.getElementById("dt1").innerHTML = 'Activo';
        document.getElementById("dt1").value = '1';
    }
//Pbellon
if(Pv==1){
    document.getElementById("Pb").innerHTML = 'Pabellón 1';
    document.getElementById("Pb").value = '1';
    document.getElementById("Pb1").innerHTML = 'Pabellón 2';
    document.getElementById("Pb1").value = '2';
    document.getElementById("Pb2").innerHTML = 'Pabellón 3';
    document.getElementById("Pb2").value = '3';
    document.getElementById("Pb3").innerHTML = 'Pabellón 4';
    document.getElementById("Pb3").value = '4';
    document.getElementById("Pb4").innerHTML = 'Pabellón 5';
    document.getElementById("Pb4").value = '5';
    document.getElementById("Pb5").innerHTML = 'Pabellón 6';
    document.getElementById("Pb5").value = '6';
    document.getElementById("Pb6").innerHTML = 'Pabellón 7';
    document.getElementById("Pb6").value = '7';
}
else if(Pv==2){
    document.getElementById("Pb").innerHTML = 'Pabellón 2';
    document.getElementById("Pb").value = '2';
    document.getElementById("Pb1").innerHTML = 'Pabellón 3';
    document.getElementById("Pb1").value = '3';
    document.getElementById("Pb2").innerHTML = 'Pabellón 4';
    document.getElementById("Pb2").value = '4';
    document.getElementById("Pb3").innerHTML = 'Pabellón 5';
    document.getElementById("Pb3").value = '5';
    document.getElementById("Pb4").innerHTML = 'Pabellón 6';
    document.getElementById("Pb4").value = '6';
    document.getElementById("Pb5").innerHTML = 'Pabellón 7';
    document.getElementById("Pb5").value = '7';
    document.getElementById("Pb6").innerHTML = 'Pabellón 1';
    document.getElementById("Pb6").value = '1';
}
else if(Pv==3){
    document.getElementById("Pb").innerHTML = 'Pabellón 3';
    document.getElementById("Pb").value = '3';
    document.getElementById("Pb1").innerHTML = 'Pabellón 4';
    document.getElementById("Pb1").value = '4';
    document.getElementById("Pb2").innerHTML = 'Pabellón 5';
    document.getElementById("Pb2").value = '5';
    document.getElementById("Pb3").innerHTML = 'Pabellón 6';
    document.getElementById("Pb3").value = '6';
    document.getElementById("Pb4").innerHTML = 'Pabellón 7';
    document.getElementById("Pb4").value = '7';
    document.getElementById("Pb5").innerHTML = 'Pabellón 1';
    document.getElementById("Pb5").value = '1';
    document.getElementById("Pb6").innerHTML = 'Pabellón 2';
    document.getElementById("Pb6").value = '2';
}
else if(Pv==4){
    document.getElementById("Pb").innerHTML = 'Pabellón 4';
    document.getElementById("Pb").value = '4';
    document.getElementById("Pb1").innerHTML = 'Pabellón 5';
    document.getElementById("Pb1").value = '5';
    document.getElementById("Pb2").innerHTML = 'Pabellón 6';
    document.getElementById("Pb2").value = '6';
    document.getElementById("Pb3").innerHTML = 'Pabellón 7';
    document.getElementById("Pb3").value = '7';
    document.getElementById("Pb4").innerHTML = 'Pabellón 1';
    document.getElementById("Pb4").value = '1';
    document.getElementById("Pb5").innerHTML = 'Pabellón 2';
    document.getElementById("Pb5").value = '2';
    document.getElementById("Pb6").innerHTML = 'Pabellón 3';
    document.getElementById("Pb6").value = '3';
}
else if(Pv==5){
    document.getElementById("Pb").innerHTML = 'Pabellón 5';
    document.getElementById("Pb").value = '5';
    document.getElementById("Pb1").innerHTML = 'Pabellón 6';
    document.getElementById("Pb1").value = '6';
    document.getElementById("Pb2").innerHTML = 'Pabellón 7';
    document.getElementById("Pb2").value = '7';
    document.getElementById("Pb3").innerHTML = 'Pabellón 4';
    document.getElementById("Pb3").value = '4';
    document.getElementById("Pb4").innerHTML = 'Pabellón 1';
    document.getElementById("Pb4").value = '1';
    document.getElementById("Pb5").innerHTML = 'Pabellón 2';
    document.getElementById("Pb5").value = '2';
    document.getElementById("Pb6").innerHTML = 'Pabellón 3';
    document.getElementById("Pb6").value = '3';
}
else if(Pv==6){
    document.getElementById("Pb").innerHTML = 'Pabellón 6';
    document.getElementById("Pb").value = '6';
    document.getElementById("Pb1").innerHTML = 'Pabellón 7';
    document.getElementById("Pb1").value = '7';
    document.getElementById("Pb2").innerHTML = 'Pabellón 1';
    document.getElementById("Pb2").value = '1';
    document.getElementById("Pb3").innerHTML = 'Pabellón 2';
    document.getElementById("Pb3").value = '2';
    document.getElementById("Pb4").innerHTML = 'Pabellón 3';
    document.getElementById("Pb4").value = '3';
    document.getElementById("Pb5").innerHTML = 'Pabellón 4';
    document.getElementById("Pb5").value = '4';
    document.getElementById("Pb6").innerHTML = 'Pabellón 5';
    document.getElementById("Pb6").value = '5';
}
else if(Pv==7){
    document.getElementById("Pb").innerHTML = 'Pabellón 7';
    document.getElementById("Pb").value = '7';
    document.getElementById("Pb1").innerHTML = 'Pabellón 1';
    document.getElementById("Pb1").value = '1';
    document.getElementById("Pb2").innerHTML = 'Pabellón 2';
    document.getElementById("Pb2").value = '2';
    document.getElementById("Pb3").innerHTML = 'Pabellón 3';
    document.getElementById("Pb3").value = '3';
    document.getElementById("Pb4").innerHTML = 'Pabellón 4';
    document.getElementById("Pb4").value = '4';
    document.getElementById("Pb5").innerHTML = 'Pabellón 5';
    document.getElementById("Pb5").value = '5';
    document.getElementById("Pb6").innerHTML = 'Pabellón 6';
    document.getElementById("Pb6").value = '6';
}


})

