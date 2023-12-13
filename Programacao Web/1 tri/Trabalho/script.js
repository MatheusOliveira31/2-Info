function verificar() {
    let retorno = true
    let formulario = document.getElementById('formulario')
    //Associa os campos dos formulários em variáveis
    let formNome = document.getElementById("nome")
    let formRG = document.getElementById("rg")
    let formCPF = document.getElementById("cpf")
    let formEtnia = document.getElementById("etnia")
    let formUniaofederativa = document.getElementById("uniaofederativa")
    let formTelefone = document.getElementById("telefone")
    let formEmail= document.getElementById("email")
    let formsexo = document.getElementById("sexo")


    const VERDE = "#0F0"
    const VERMELHO = "#F00"

    // Realiza as validações
    if (formNome.value.length == 0) {
        formNome.style.background = VERMELHO
        alert("Informe um nome!")
        retorno = false
    } else {
        formNome.style.background = VERDE
    }

    if (formRG.value.length == 0) {
        formRG.style.background = VERMELHO
        alert("Informe seu rg!")
        retorno = false
    } else {
        formRG.style.background = VERDE
    }

    if (formEmail.value.length == 0) {
        formEmail.style.background = VERMELHO
        alert("Informe um email!")
        retorno = false
    } else {
        formEmail.style.background = VERDE
    }

    if (formCPF.value.length == 0) {
        formCPF.style.background = VERMELHO
        alert("Informe uma senha!")
        retorno = false
    } else {
        formCPF.style.background = VERDE
    }

    if (formEtnia.value.length == 0) {
        formEtnia.style.background = VERMELHO
        alert("Informe uma confirmação de senha!")
        retorno = false
    } else {
        formEtnia.style.background = VERDE
    }

    if (formUniaofederativa.value.length == 0) {
        formUniaofederativa.style.background = VERMELHO
        alert("Informe uma confirmação de senha!")
        retorno = false
    } else {
        formUniaofederativa.style.background = VERDE
    }
    if (formTelefone.value.length == 0) {
        formTelefone.style.background = VERMELHO
        alert("Informe uma confirmação de senha!")
        retorno = false
    } else {
        formTelefone.style.background = VERDE
    }
    if(retorno){
        Swal.fire({
            title: 'Formulário Enviado!',
            confirmButtonText: 'OK'
        })
    }

   return retorno
}



//tentativa de validacãobpara deixar input vermelho


// verificar() = {
   
//     if (nome.value.leght == 0){
//         nome.style.backgroundColor = 'red'
//         return false
//     }


// }*/


/*const cadastro = document.getElementById('cadastro')
const botao_cadastre = document.getElementById('botao_cadastre')
botao_cadastre.addEventListener('click', () => {
    cadastro.style.display = 'block'
})
/*


tentativa de validacãobpara deixar input vermelho


nome = document.getElementById('nome')
rg = document.getElementById('rg')
cpf = document.getElementById('cpf')
telefone = document.getElementById('telefone')
email = document.getElementById('email')


verificar() = {
   
    if (nome.value.leght == 0){
        nome.style.backgroundColor = 'red'
        return false
    }


}*/
