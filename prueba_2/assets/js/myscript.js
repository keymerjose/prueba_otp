const operar = (valor) => {
    let numero1 = document.getElementById('numero1').value;
    let numero2 = document.getElementById('numero2').value;
    let numero3 = 0;

    if(valor == 1){
        numero3 = parseFloat(numero1) + parseFloat(numero2);
    }else if(valor == 2){
        numero3 = parseFloat(numero1) - parseFloat(numero2);
    }else if(valor == 3){
        numero3 = parseFloat(numero1) * parseFloat(numero2);
    }else if(valor == 4){
        numero3 = parseFloat(numero1) / parseFloat(numero2);
    }else if(valor == 5){
        numero3 = parseFloat(numero1) * (numero2 / 100);
    }

    document.getElementById('resultado').value = numero3;
}