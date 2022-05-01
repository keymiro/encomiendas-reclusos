
const modalAlumno = new bootstrap.Modal(document.getElementById('exampleModal'))

const on = (element, event, selector, handler) => {
    console.log('Dato a mostrsr: ')
    element.addEventListener(event, e => {
        if(e.target.closest(selector)){
            handler(e)
        }
    })
}
on(document, 'click','.btnEditar', e =>{
    console.log('Dato a mostrsr: ')
    const fila = e.target.parentNode.parentNode

    inputSexo=fila.children[3].innerHTML
    document=fila.children[5].innerHTML

    if(inputSexo==2){
        document.getElementById("s2").innerHTML = 'Mujer';
        document.getElementById("s2").value = '2';
        document.getElementById("s1").innerHTML = 'Hombre';
        document.getElementById("s1").value = '1';
    }
    else if(inputSexo==1){
        document.getElementById("s1").innerHTML = 'Hombre';
        document.getElementById("s1").value = '1';
        document.getElementById("s2").innerHTML = 'Mujer';
        document.getElementById("s2").value = '2';
    }
    
})
