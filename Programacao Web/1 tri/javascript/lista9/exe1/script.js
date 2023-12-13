function verificaIdade(){
    const idade = prompt("Informe sua idade")
    if (Number(idade)){
        if(idade >= 18) document.write("voce é maior")
        else document.write("voce é menor")
    }
    else document.write("não é idade")
}
   