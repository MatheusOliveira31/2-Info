$("form").on("submit", function() {
    
    let nome = $('#nome')
    let cpf = $('#cpf')
    let login = $('#login')
    let senha = $('#senha')

    if (nome.val().length < 3) {
        alert("O Nome deve ter no minimo caracteres")
        nome.val('')
        nome.parent().addClass('error')
        return false
    }
    if (cpf.val().length != 11) {
        alert("CPF deve ter 11 números.")
        cpf.val('')
        cpf.parent().addClass('error')
        return false
    }
    if (login.val().length < 3) {
        alert("O Login deve ter no mínimo 3 caracteres.")
        login.val('')
        login.parent().addClass('error')
        return false
    }
    if (senha.val().length < 8) {
        alert("Senha deve ter no mínimo 8 caracteres.")
        senha.val('')
        senha.parent().addClass('error')
        return false
    }
    return true
});

$("#cpf").on("focus", function() {
    $("span").fadeIn();
});
$("#cpf").on("blur", function() {
    $("span").fadeOut();
});