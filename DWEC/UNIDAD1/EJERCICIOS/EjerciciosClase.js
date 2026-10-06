// Ejercicio 1 //
let opcion = "";

while (opcion !== "6") {
    console.log("Pulse 1 para sumar");
    console.log("Pulse 2 para restar");
    console.log("Pulse 3 para multiplicar");
    console.log("Pulse 4 para dividir");
    console.log("Pulse 5 para obtener módulo");
    console.log("Pulse 6 para salir");

    opcion = prompt("Elige un numero del (1-6): ");

    if (opcion === "1") {
        let num1 = parseInt(prompt("Introduce el primer numero:"));
        let num2 = parseInt(prompt("Introduce el segundo numero:"));
        console.log("Resultado es:" + (num1 + num2));
    } else if (opcion === "2") {
         let num1 = parseInt(prompt("Introduce el primer numero:"));
        let num2 = parseInt(prompt("Introduce el segundo numero:"));
        console.log("Resultado es:" + (num1 - num2));
    } else if (opcion === "3") {
         let num1 = parseInt(prompt("Introduce el primer numero:"));
        let num2 = parseInt(prompt("Introduce el segundo numero:"));
        console.log("Resultado es:" + (num1 * num2));
    } else if (opcion === "4") {
         let num1 = parseInt(prompt("Introduce el primer numero:"));
        let num2 = parseInt(prompt("Introduce el segundo numero:"));
        console.log("Resultado es:" + (num1 / num2));
    } else if (opcion === "5") {
        let num1 = parseInt(prompt("Introduce el primer numero:"));
        let num2 = parseInt(prompt("Introduce el segundo numero:"));
        console.log("Resultado es:" + (num1 % num2));
    }else if (opcion === "6") {
        let confirmacion = confirm("Deseas salir?")
        if (!confirmacion) {
            opcion = "";
        }
    }
}