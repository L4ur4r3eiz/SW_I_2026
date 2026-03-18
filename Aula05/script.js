function trocarNome() {
    var nome = document.getElementById("compoNome").value;
    document.getElementById("nomeExibido").innerText =
        "Nome" + nome;
}

//exercicio02

function somar() {

    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);

    var soma = numero1 + numero2;

    document.getElementById("resultado").innerText = "Resultado: "
        + soma;

}

//Calcular IMC
function calcularIMC() {
    const peso = parseFloat(document.getElementById("peso").value);
    const altura = parseFloat(document.getElementById("altura").value);

    const imc = peso / (altura * altura);
    let classificacaoimc = "";

    if (imc < 18.5) {
        classificacaoimc = "Magreza";
    } else if (imc >= 18.5 && imc < 25) {
        classificacaoimc = "Peso Normal";
    } else if (imc >= 25 && imc < 30) {
        classificacaoimc = "Sobrepeso";
    } else {
        classificacaoimc = "Obesidade";
    }

   
    document.getElementById("resultado").innerText = 
        "Resultado: " + imc.toFixed(2) + " (" + classificacaoimc + ")";
}