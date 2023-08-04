var vectorCaracteres = []; // Vector para almacenar los caracteres

// Agregar el evento keypress al documento para detectar las pulsaciones de teclas
document.addEventListener("keypress", function(event) {
    // Si la tecla presionada es "Enter" (código 13), procesar la entrada
    if (event.keyCode === 13) {
        guardarEnVector();
    }




});

function guardarEnVector() {
    const entradaTexto = document.getElementById("entradaTexto");
    const textoIngresado = entradaTexto.value;

    // Dividir el texto ingresado en caracteres y guardarlos en el vector
    vectorCaracteres.push(...textoIngresado.split(" "));
    entradaTexto.value = " ";
    // Mostrar el vector en el div con id "resultado"
    mostrarVectorEnHTML();
}

function mostrarVectorEnHTML() {
    const resultadoDiv = document.getElementById("resultado");

    // Limpiar el contenido anterior del div antes de mostrar el vector
    resultadoDiv.innerHTML = "";

    // Crear un párrafo para cada carácter en el vector y agregarlo al div
    vectorCaracteres.forEach((caracter) => {
        let docente = document.getElementById("docente")
        let curso = document.getElementById("curso")
        let estado = document.getElementById("estado")

        if(caracter=="" || docente=="" || curso=="" || estado=="") return

        let tiempo = new Date
        
        const parrafo = document.createElement("p");
        parrafo.textContent = "Docente: " + docente.value + " curso: " + curso.value + " hora: " + tiempo.getHours() + ":" + tiempo.getMinutes() + " computadora: " + caracter + " estado : " + estado.value + " observacion: " + observacion.value;
        resultadoDiv.appendChild(parrafo);
    });

}

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
