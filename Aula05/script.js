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

function IMC() {

    var peso = parseFloat(document.getElementById("peso").value);
    var altura = parseFloat(document.getElementById("altura").value);

    var valoraltura = altura * altura;
    IMC = valoraltura / peso

    

    document.getElementById("resultado").innerText = "Resultado: "
        = IMC;

}
