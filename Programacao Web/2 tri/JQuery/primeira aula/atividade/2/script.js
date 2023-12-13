$(document).ready(() => {
    $("form").submit(() => {
        let nome = $('#nome')
        let cpf = $('#cpf')
        let senha = $('#senha')
        if (nome.val().length < 3) {
            alert("Nome deve ter no mínimo 3 letras.")
            nome.val('')
            nome.attr('class', 'erro')
            return false
        }
        nome.removeClass('erro')
        if (cpf.val().length != 11) {
            alert("CPF deve ter 11 números.")
            cpf.val('')
            cpf.attr('class', 'erro')
            return false
        }
        cpf.removeClass('erro')
        if (senha.val().length < 6) {
            alert("Senha deve ter no mínimo 6 letras.")
            senha.val('')   
            senha.attr('class', 'erro')
            return false
        }
        return true
    });
})
