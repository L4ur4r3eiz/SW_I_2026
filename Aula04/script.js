function processarValidacao(){
    const valorInput = document.getElementById('cpf').value;
    const ehValido = validarCPF(valorInput);

    if (ehValido){
        alert("O CPF" + valorInput + "é VALIDO!");
    } else {
        alert("O CPF" + valorInput + "é INVALIDO");
    }

}
function soma(){
        const valorInput = document.getElementById('cpf').value
        const Valornome = document.getElementById('nome').value
        const Valornome = document.getElementById('nome').value


        alert("olá " + Valornome + + "seu cpf é: " + valorInput);

    }









// Função auxiliar para capturar o valor e exibir o alerta
/* function processarValidacao(){
    const valorInput = document.getElementById('cpfInput').value;
    const ehValido = validarCPF(valorInput);

    if (ehvalido){
        alert("O CPF" + valorInput + "é VALIDO!");
    } else {
        alert("O CPF" + valorInput + "é INVALIDO");
    }
}

funcion validarCPF(){
    //remove pontos e traços, deixando apenas numeros
    cpf = cpf.replace(/[^\d]+/g, '');

    //Verifica se tem 11 digitos pu se é uma sequencia repetida conehcida 
    if (cpf.length !== 11 || !!cpf.match(/(\d)\1{10})}/)){
        return false;

    }

    const digitos = cpf.split('').map(el => +el);

    //calculo de 1° digito verificador 
    let soma = 0;
    for (let i = 0; i <9; i++){
        soma += digitos[i] * (10 - i);
    }
} */