const formDetalle=document.getElementById("formDetalle");
const inputCantidad=document.getElementById("inputCantidad");
const selectDescripcion=document.getElementById("selectDescripcion");
const inputDesc=document.getElementById("inputDesc");
const inputPUnitario=document.getElementById("inputPUnitario");
const inputPTotal=document.getElementById("inputPTotal");
const cuerpoTabla=document.getElementById("cuerpoTabla");

let arregloDetalle=[];

const redibujarTabla=()=>{
 cuerpoTabla.innerHTML="";   
arregloDetalle.forEach((detalle)=>{
let fila= document.createElement("tr");
fila.innerHTML=    `<td>${detalle.cant}</td>
                    <td>${detalle.descripcion}</td>
                    <td>${detalle.desc}</td>
                    <td>${detalle.pUnit}</td>
                    <td>${detalle.pTotal}</td>`
let tdEleminar=document.createElement("td");
let botonEliminar=document.createElement("button");
botonEliminar.classList.add("btn","btn-danger");
botonEliminar.innerText="Eliminar";
tdEleminar.appendChild(botonEliminar);
fila.appendChild(tdEleminar);
cuerpoTabla.appendChild(fila);
})
}

formDetalle.onsubmit = (e)=>{
    e.preventDefault();
    // creando objeto
    const objDetalle={
        cant: inputCantidad.nodeValue,
        descripcion: selectDescripcion.Value,
        desc: inputDesc.Value,
        pUnit: inputPUnitario.Value,
        pTotal: inputPTotal.Value,

    };

console.log(objDetalle);
// arregloDetalle.push(objDetalle);
//redibujarTabla();
};