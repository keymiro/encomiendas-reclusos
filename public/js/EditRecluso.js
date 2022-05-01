const modalAlumno = new bootstrap.Modal(document.getElementById('exampleModal'))

const on = (element, event, selector, handler) => {
    element.addEventListener(event, e => {
        if(e.target.closest(selector)){
            handler(e)
        }
    })
}

on(document, 'click','.btnEditar', e =>{

    const fila = e.target.parentNode.parentNode
    inputNumberCell.value=fila.children[1].innerHTML
    inputCodeRecluso.value=fila.children[2].innerHTML
    inputSexo=fila.children[3].id
    idtypedocument=fila.children[4].id
    document_edit.value=fila.children[5].innerHTML
    inputNames.value=fila.children[6].innerHTML
    inputSurName.value=fila.children[7].innerHTML
    console.log(idtypedocument)
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
    State=fila.children[8].id
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

})

