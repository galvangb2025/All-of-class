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

//Mostrar los 8 primeros nuimeros multiplos de  de 7 que hay del 1 al 100
let contador = 0;
for (let index = 0; index < 100; index++) {
    if (index % 7 === 0) {
        console.log(index);
    }
    if (contador === 8) {
        break;
    }
}
//Continue, salta interraciones
for(i = 1; i < 10; i++){
    if (i % 3 == 0) continue; 
    console.log(i);

} 
    
//Etiquetando bucles
outerloop:
for (let i = 0; i < 3; i++) {
    for (let j = 0; j < 3; j++) {
        if (i === 1 && j === 1) {
            break outerloop; //Sale del bucle externo
        }
        console.log(`i: ${i}, j: ${j}`)
    }
    console.log("Fin del etiquetado de bucles")
    
}

//bucle etiquetado
saldeaqui:
for(i = 1; i <=3; i++){
    for (let j = 0; j <= 5; j++) {
        if(i ==2 && j == 4){
            console.log("Producto encontrado")
            break saldeaqui;
        }
        console.log(`Zona: ${i}, Estanteria: ${j}`);
    }
}


//Arrays

const multiarray = [
    [1,2,3,4],
    [5,6,7,8,9]
]


console.table(multiarray);



const notas=[7, 3, 5, 9, 4, 8, 2]
for (let index = 0; index < notas.length; index++) {
    if (notas >= 5) {
        console.log(index);
    }
}


// Foreach en js
/*
for (x of notis){
    if (x>= 5) {
        console.log(x);
    }
}
*/
