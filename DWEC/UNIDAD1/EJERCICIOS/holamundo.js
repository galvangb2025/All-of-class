console.log("Hola mundo");
//CONSTANTES
const nconstante = 5;
//VARIABLES
let numero = 8;
numero++;
numero--;
numero++;

console.log(numero);




let importe = 11    ;

if (importe >= 100) {
    console.log("Se aplica descuento")
}else{
    console.log("No se aplica")
}




let temperatura = 12;

if (temperatura <= 18 || temperatura >= 25) {
    console.log("Mala temperatura");
} else {
    console.log("Buena temperatura")
}



let velocidad =20;

if (velocidad < 50) {
    console.log("Velocidad baja");
} else if (velocidad >= 50 && velocidad <= 90) {
    console.log("Velocidad normal")
} else {
    console.log("velocidad alta")
}


//switch
let codigo = "P";
switch (codigo) {
    case "A":
        console.log("Arrancar");
        break;
    case "P":
        console.log("Parada")
        break;
    case "R":
        console.log("Reinicio")
        break;
    default:
        console.log("Código erroneo")
        break;
}